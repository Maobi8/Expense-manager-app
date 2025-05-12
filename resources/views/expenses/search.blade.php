@extends('layouts.navigation')

@section('content')
    <h2 class=" mb-3">Expenses</h2>

    <form method="GET" action="{{ route('expenses.index') }}" id="search-form">
        <div class="input-group input-group-flat d-inline-flex me-1 mb-4">
            <input type="text" name="search" id="search" class="form-control" placeholder="Search..."
                value="{{ request('search') }}">
            <span class="input-group-text"></span>
        </div>
    </form>
    <div class="row mb-4">
        <div class="col-md-2">
            <a href="{{ route('expenses.create') }}" class="btn btn-primary mb-2">Add New Expense</a>

        </div>


    </div>


    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Amount</th>
                <th>Category</th>
                <th>Date</th>
            </tr>```php
<div class="row mb-4">
    <div class="col-md-2">
        <a href="{{ route('expenses.create') }}" class="btn btn-primary mb-2">Add New Expense</a>
    </div>
    <div class="col-md-10">
        <form method="GET" action="{{ route('expenses.index') }}" id="search-form">
            <div class="input-group input-group-flat d-inline-flex me-1 mb-4">
                <input type="text" name="search" id="search" class="form-control" placeholder="Search..."
                    value="{{ request('search') }}">
                <span class="input-group-text"></span>
            </div>
        </form>
    </div>
</div>

<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Amount</th>
            <th>Category</th>
            <th>Date</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @if ($expenses->isEmpty())
            <tr>
                <td colspan="5">No expenses found matching your search.</td>
            </tr>
        @else
            @foreach ($expenses as $expense)
                <tr>
                    <td>{{ $expense->name }}</td>
                    <td>{{ $expense->amount }}</td>
                    <td>{{ $expense->category }}</td>
                    <td>{{ $expense->created_at->format('Y-m-d') }}</td>
                    <td>
                        <a href="{{ route('expenses.edit', $expense->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('expenses.destroy', $expense->id) }}" method="POST" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>
```
        </thead>
        <tbody>
            @if ($expenses->isEmpty())
                <tr>
                    <td colspan="4">No expenses found matching your search.</td>
                </tr>
            @else
                @foreach ($expenses as $expense)
                    <tr>
                        <td>{{ $expense->name }}</td>
                        <td>{{ $expense->amount }}</td>
                        <td>{{ $expense->category }}</td>
                        <td>{{ $expense->created_at->format('Y-m-d') }}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection
