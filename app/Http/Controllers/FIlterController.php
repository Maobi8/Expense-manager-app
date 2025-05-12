<?php

namespace App\Http\Controllers;
use App\Models\Expense;

use Illuminate\Http\Request;
use Carbon\Carbon;
class FIlterController extends Controller
{
    


public function filter(Request $request)
{
    // Get the selected filter from the request
    $dateFilter = $request->input('date_filter', 'all');  // Default is 'all'
    $title = ''; // Variable to store dynamic title


    // Query the expenses
    $expensesQuery = Expense::query();

    switch ($dateFilter) {
        case 'today':
            // Filter expenses for today
            $expensesQuery->whereDate('date', Carbon::today());
            $title = 'Today\'s Expenses'; // Set title for today

            break;

        case 'week':
            // Filter expenses for the current week
            $expensesQuery->whereBetween('date', [
                Carbon::now()->startOfWeek(), 
                Carbon::now()->endOfWeek()
            ]);
            $title = 'This Week\'s Expenses'; // Set title for this week

            break;

        case 'month':
            // Filter expenses for the current month
            $expensesQuery->whereMonth('date', Carbon::now()->month);
            $title = 'This Month\'s Expenses'; // Set title for this month

            break;

        case 'all':
        default:
            // No filter, show all expenses
            $title = 'All Expenses'; // Set title for all expenses

            break;
    }

    // Get the filtered expenses
    $expenses = $expensesQuery->get();

    // Return the view with filtered expenses
    return view('expenses.filter', compact('expenses','title'));
}
}
