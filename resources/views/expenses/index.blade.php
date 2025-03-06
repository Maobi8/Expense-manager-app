@extends('layouts.navigation')

@section('content')
    <div class="container mt-4">
        <h2 class="mb-4">Expense List</h2>

        <!-- Display Success Message -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Notification for Budget Reached -->
        @if ($budgetReached)
            <div class="alert alert-warning">
                You've used <strong>{{ number_format($budgetPercentage, 2) }}%</strong> of your monthly budget of
                <strong>{{ number_format($monthlyBudget, 2) }}</strong>!
                <strong>Be careful! You're nearing your budget limit.</strong>
            </div>
        @endif


        <div class="row mb-4">
            <div class="col-md-2">
                <h5>Daily Total: </h5>
                <p>{{ number_format($dailyTotal, 2) }}</p>
            </div>
            <div class="col-md-2">
                <h5>Weekly Total: </h5>
                <p>{{ number_format($weeklyTotal, 2) }}</p>
            </div>
            <div class="col-md-2">
                <h5>Monthly Total: </h5>
                <p>{{ number_format($monthlyTotal, 2) }}</p>
            </div>

            <div class="col-md-2">
                <h5>Sub-Total: </h5>
                <p>{{ number_format($subTotal, 2) }}</p>
            </div>
        </div><!-- Expense Totals Section -->


        <!-- Add Expense Button -->
        <a href="{{ route('expenses.create') }}" class="btn btn-primary mb-4">Add New Expense</a>

        <!-- Expenses Table -->
        <table class="table table-striped table-bordered">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Category</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($expenses as $expense)
                    <tr>
                        <td>{{ $expense->name }}</td>
                        <td>{{ number_format($expense->amount, 2) }}</td>
                        <td>{{ $expense->category }}</td>
                        <td>
                            <!-- Edit Button -->
                            <a href="{{ route('expenses.edit', $expense->id) }}" class="btn btn-warning btn-sm">Edit</a>

                            <!-- Delete Button (using a form to submit the DELETE method) -->
                            <form action="{{ route('expenses.destroy', $expense->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure you want to delete this expense?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
