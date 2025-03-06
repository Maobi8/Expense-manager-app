{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Expense</title>
</head>
<body>
    <h1>Edit Expense</h1>
    <form action="{{ route('expenses.update', $expense->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Name</label>
        <input type="text" name="name" value="{{ $expense->name }}" required>

        <label for="amount">Amount</label>
        <input type="number" step="0.01" name="amount" value="{{ $expense->amount }}" required>

        <label for="category">Category</label>
        <input type="text" name="category" value="{{ $expense->category }}">

        <label for="date">Date</label>
        <input type="date" name="date" value="{{ $expense->date }}" required>

        <button type="submit">Update Expense</button>
    </form>
</body>
</html> --}}
@extends('layouts.navigation')

@section('content')

<div class="container mt-5">
    <h1 class="mb-4">Edit Expense</h1>
    
    <!-- Form Start -->
    <form action="{{ route('expenses.update', $expense->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" value="{{ $expense->name }}" required>
        </div>

        <div class="form-group">
            <label for="amount">Amount</label>
            <input type="number"  class="form-control" step="0.01" name="amount" value="{{ $expense->amount }}" required>
        </div>

        <div class="form-group">
            <label for="category">Category</label>
            <input type="text" class="form-control" name="category" value="{{ $expense->category }}">
        </div>

        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" class="form-control" name="date" value="{{ $expense->date }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Expense</button>
    </form>
    <!-- Form End -->
</div>
@endsection