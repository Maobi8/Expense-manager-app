<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ExpenseController;
use App\Models\Expense;
use Illuminate\Support\Facades\Route;
use Carbon\Carbon;
use App\Http\Controllers\UserSettingsController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    $dailyTotal = Expense::whereDate('created_at', Carbon::today())->where('user_id', auth()->user()->id)->sum('amount');  
     
    $weeklyTotal = Expense::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->where('user_id', auth()->user()->id)->sum('amount');
           
    $monthlyTotal = Expense::whereMonth('created_at', Carbon::now()->month)->where('user_id', auth()->user()->id)->sum('amount');
       
    $subTotal = Expense::where('user_id', auth()->user()->id)->sum('amount');
    
    return view('dashboard', compact('dailyTotal', 'weeklyTotal', 'monthlyTotal', 'subTotal'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/expenses', [ExpenseController::class, 'index'])->name('expenses.index');
// Route to show the form for creating a new expense
Route::get('/expenses/create', [ExpenseController::class, 'create'])->name('expenses.create');

// Route to store a new expense
Route::post('/expenses', [ExpenseController::class, 'store'])->name('expenses.store');

// Route to show the form for editing an existing expense
Route::get('/expenses/{id}/edit', [ExpenseController::class, 'edit'])->name('expenses.edit');

// Route to update an existing expense
Route::put('/expenses/{id}', [ExpenseController::class, 'update'])->name('expenses.update');

// Route to delete an expense
Route::delete('/expenses/{id}', [ExpenseController::class, 'destroy'])->name('expenses.destroy');


Route::middleware('auth')->group(function() {
    Route::get('/settings', [UserSettingsController::class, 'index'])->name('settings.index');
    Route::put('/settings', [UserSettingsController::class, 'update'])->name('settings.update');
});


require __DIR__.'/auth.php';





