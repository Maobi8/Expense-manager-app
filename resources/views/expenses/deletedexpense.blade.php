@extends('layouts.navigation')

@section('content')

<h2 class=" mb-3">Deleted Expenses</h2>


    
    <div class="row mb-4">
        <div class="col-md-2">
            <a href="{{ route('expenses.create') }}" class="btn btn-primary mb-2">Add New Expense</a>

        </div>
        <div class="col-md-2">
            <a href="{{ route('expenses.index') }}" class="btn btn-primary mb-2">Show All Expenses</a>

        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Category</th>
                <th>Amount</th>
                <th>Date</th>
                <th>Action</th>
             
            </tr>
        </thead>
        <tbody>
          
                @foreach ($expenses as $expense)
                    <tr>
                        <td>{{ $expense->name }}</td>
                        <td>{{ $expense->category }}</td>                      
                        <td>${{ number_format($expense->amount, 2) }}</td>
                        <td>{{ $expense->date }}</td>
                        <td>                            <!-- Delete Button (using a form to submit the DELETE method) -->
                            @if ($expense->trashed())
                                <!-- Check if the expense is soft-deleted -->
                                <!-- Restore Button if the expense is soft-deleted -->
                                <form action="{{ route('expenses.restore', $expense->id) }}" method="post"
                                    style="display:inline-block;">
                                    @csrf
                                    <button type="submit" class="btn btn-success">Restore</button>
                                </form>
                            @else
                                <!-- Delete Button if the expense is not soft-deleted -->
                                <form action="{{ route('expenses.destroy', $expense->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure you want to delete this expense?')">Delete</button>
                                </form>
                            @endif</td>
                     
                    </tr>
                @endforeach
         
        </tbody>
    </table>
@endsection