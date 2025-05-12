<?php

namespace App\Http\Controllers;

use App\Mail\MonthlyBudgetNotification;
use Illuminate\Support\Facades\Mail;
use App\Models\Expense;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ExpenseController extends Controller
{
    // Display the form to add a new expense
    public function create()
    {
        return view('expenses.create');
    }

    // Store a new expense
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'amount' => 'required|numeric',
            'category' => 'required|string',
            'date' => 'required|date',
        ]);

        Expense::create([
            'user_id' => auth()->user()->id,
            'name' => $request->name,
            'amount' => $request->amount,
            'category' => $request->category,
            'date' => $request->date
        ]);

        return redirect()->route('expenses.index')->with('success', 'Expense added successfully!');
    }

    // Show all expenses
    public function search(Request $request)
    {
        // Get the search term from the request (it will be empty if not provided)
        $search = $request->input('search');

        // Build the query for filtering the expenses based on the search term
        $expenses = Expense::query();

        if ($search) {
            $expenses->where(function ($query) use ($search) {
                $query->where('name', 'like', "%{$search}%")
                    ->orWhere('amount', 'like', "%{$search}%")
                    ->orWhere('category', 'like', "%{$search}%");
            });
        }


        // Fetch filtered expenses
        $expenses = $expenses->get();

        return view('expenses.search', compact('expenses'));
    }
    public function index()
    {
        
        $expenses = Expense::where('user_id', auth()->user()->id)->orderBy('created_at', 'desc')
                   ->get();

        // Daily total (sum of today's expenses)
        $dailyTotal = Expense::whereDate('created_at', Carbon::today())->where('user_id', auth()->user()->id)->sum('amount');

        // Weekly total (sum of expenses from the past 7 days)
        $weeklyTotal = Expense::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->where('user_id', auth()->user()->id)->sum('amount');

        // Monthly total (sum of expenses for the current month)
        $monthlyTotal = Expense::whereMonth('created_at', Carbon::now()->month)->where('user_id', auth()->user()->id)->sum('amount');


        // Sub-total (sum of all expenses)
        $subTotal = Expense::where('user_id', auth()->user()->id)->sum('amount');


        // Get the user's settings (budget and threshold)
        $settings = \App\Models\UserSetting::where('user_id', auth()->user()->id)->first();

        // Set default values if the user has not set the budget or threshold
        $monthlyBudget = $settings ? $settings->monthly_budget : 0;
        $notificationThreshold = $settings ? $settings->notification_threshold : 70; // Default to 70%

        if ($monthlyBudget > 0) {
            // Calculate the percentage of the budget used
            $budgetPercentage = ($monthlyTotal / $monthlyBudget) * 100;
        } else {
            // If no budget is set (i.e., $monthlyBudget is 0), set budget percentage to 0 or a default value
            $budgetPercentage = 0;  // Or you can set it to 100, depending on your logic
        }

        // Determine if the user should be notified
        $budgetReached = $budgetPercentage >= $notificationThreshold;

        // Send email notification if the budget threshold is reached
        if ($budgetReached) {
            Mail::to(auth()->user()->email)->send(new MonthlyBudgetNotification(auth()->user(), $budgetPercentage, $monthlyBudget, $monthlyTotal));
        }

        // Return the view and pass the calculated totals and expenses
        return view('expenses.index', compact(
            'expenses',
            'dailyTotal',
            'weeklyTotal',
            'monthlyTotal',
            'subTotal',
            'monthlyBudget',
            'notificationThreshold',
            'budgetPercentage',
            'budgetReached'
        ));
    }





    // Edit an existing expense
    public function edit($id)
    {
        $expense = Expense::find($id);
        return view('expenses.edit', compact('expense'));
    }

    // Update an expense
    public function update(Request $request, $id)
    {
        $expense = Expense::find($id);
        $expense->update($request->all());

        return redirect()->route('expenses.index')->with('success', 'Expense updated successfully!');
    }

    public function restoreuser(Request $request)
    {
        $user = Auth::user();
        if ($request->deleted == 1) {
            $expenses = Expense::onlyTrashed()->where('user_id', $user->id)->select("*")->get();
        } else {
            $expenses = Expense::where('user_id', $user->id)->select("*")->get();
        }
        return view('expenses.deletedexpense', compact('expenses'));
    }

    public function destroy($id)
    {
        $expense = Expense::findOrFail($id);
        $expense->delete(); // Soft delete

        return redirect()->route('expenses.index')->with('success', 'Expense deleted successfully.');
    }

    // Restore the soft-deleted expense
    public function restore($id)
    {
        $user = Auth::user();
        $expense = Expense::withTrashed()->where('user_id', $user->id)->findOrFail($id);
        $expense->restore(); // Restore

        return redirect()->route('expenses.index')->with('success', 'Expense restored successfully.');
    }

public function dashboard()
{
    $user = auth()->user();

    $expenses = DB::table('expenses')
        ->select(DB::raw('category, SUM(amount) as total'))
        ->where('user_id', $user->id)
        ->whereMonth('created_at', now()->month)
        ->groupBy('category')
        ->get();

    // Prepare arrays
    $categories = $expenses->pluck('category')->toArray();
    $totals = $expenses->pluck('total')->toArray();

    return view('dashboard', [
        'categories' => $categories,
        'totals' => $totals
    ]);
}


}
