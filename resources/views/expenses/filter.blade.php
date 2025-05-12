@extends('layouts.navigation')

@section('content')
    <h2 class=" mb-3">{{ $title }}</h2>


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
                <th>Category</th>
                <th>Amount</th>
                <th>Date</th>
             
            </tr>
        </thead>
        <tbody>
          
                @foreach ($expenses as $expense)
                    <tr>
                        <td>{{ $expense->name }}</td>
                        <td>{{ $expense->category }}</td>                      
                        <td>${{ number_format($expense->amount, 2) }}</td>
                        <td>{{ $expense->date }}</td>
                     
                    </tr>
                @endforeach
         
        </tbody>
    </table>
@endsection
