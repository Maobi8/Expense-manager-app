@extends('layouts.navigation')

@section('content')
    <div class="container">
        <h1 class="my-4">Add Expense</h1>

        <!-- Display validation errors if any -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Expense form -->
        <form action="{{ route('expenses.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Expense Name</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}" required placeholder="Enter the expense name">
            </div>

            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="number" name="amount" class="form-control" value="{{ old('amount') }}" step="0.01" required placeholder="Enter the expense amount">
            </div>

            <div class="form-group">
                <label for="category">Category</label>
                <select name="category" class="form-control" required>
                    <option value="">Select Category</option>
                    <option value="Food" {{ old('category') == 'Food' ? 'selected' : '' }}>Food</option>
                    <option value="Transport" {{ old('category') == 'Travel' ? 'selected' : '' }}>Travel</option>
                    <option value="Bills" {{ old('category') == 'Bills' ? 'selected' : '' }}>Bills</option>
                    <option value="Entertainment" {{ old('category') == 'Entertainment' ? 'selected' : '' }}>Entertainment</option>
                    <option value="Healthcare" {{ old('category') == 'Healthcare' ? 'selected' : '' }}>Healthcare</option>
                    <option value="Other" {{ old('category') == 'Others' ? 'selected' : '' }}>Other</option>
                </select>
            </div>

            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" name="date" class="form-control" value="{{ old('date') }}" required>
            </div>

            <button type="submit" class="btn btn-primary btn-lg mt-3">Save Expense</button>
        </form>
    </div>
@endsection

