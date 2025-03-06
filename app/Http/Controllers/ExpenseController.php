<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;
use Carbon\Carbon;

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
    public function index()
    {
    $expenses = Expense::where('user_id', auth()->user()->id)->get();

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

    // Calculate the percentage of the budget used
    $budgetPercentage = ($monthlyTotal / $monthlyBudget) * 100;

    // Determine if the user should be notified
    $budgetReached = $budgetPercentage >= $notificationThreshold;

    // Return the view and pass the calculated totals and expenses
    return view('expenses.index', compact('expenses', 'dailyTotal', 'weeklyTotal', 'monthlyTotal', 'subTotal', 
    'monthlyBudget',  'notificationThreshold', 'budgetPercentage','budgetReached'));

       
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

    // Delete an expense
    public function destroy($id)
    {
        Expense::destroy($id);

        return redirect()->route('expenses.index')->with('success', 'Expense deleted successfully!');
    }



}
