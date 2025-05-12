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
            <div class="alert alert-danger">
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
        <div class="row mb-4">
            <div class="col-md-2">
                <a href="{{ route('expenses.create') }}" class="btn btn-primary mb-4">Add New Expense</a>

            </div>
            <div class="col-md-2">
                <form method="GET" action="{{ route('expenses.search') }}" id="searchForm">
                    <div class="input-group input-group-flat d-inline-flex me-1">
                        <input type="text" name="search" id="search" class="form-control" placeholder="Search..."
                            value="{{ request('search') }}" onkeydown="submitSearchForm(event)">
                        <span class="input-group-text"></span>
                    </div>
                </form>
            </div>
            <!-- Filter Form -->
            <div class="col-md-2">
                <form method="GET" action="{{ route('expenses.filter') }}" id="filterForm">
                    <select name="date_filter" id="date_filter" class="form-control" onchange="submitFilterForm()">
                        <option value="" selected disabled>Filter by Date</option>
                        <option value="today" {{ request('date_filter') == 'today' ? 'selected' : '' }}>Today</option>
                        <option value="week" {{ request('date_filter') == 'week' ? 'selected' : '' }}>This Week</option>
                        <option value="month" {{ request('date_filter') == 'month' ? 'selected' : '' }}>This Month
                        </option>
                        <option value="all" {{ request('date_filter') == 'all' ? 'selected' : '' }}>All Time</option>
                    </select>
                </form>
            </div>
            <div class="col-md-2">
                <a href="{{ route('expenses.restoreuser', ['deleted' => 1]) }}" class="btn btn-primary mb-4">Deleted Expenses</a>

            </div>

        </div>

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
                            @if ($expense->trashed())
                                <!-- Check if the expense is soft-deleted -->
                                <!-- Restore Button if the expense is soft-deleted -->
                                <form action="{{ route('expenses.restore', $expense->id) }}" method="POST"
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
                            @endif

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script>
        // Function that submits the search form when 'Enter' key is pressed
        function submitSearchForm(event) {
            if (event.key === 'Enter') {
                event.preventDefault(); // Prevent default behavior of form submission
                document.getElementById('searchForm').submit();
            }
        }

        // Function that submits the filter form when a filter is selected
        function submitFilterForm() {
            const filterValue = document.getElementById('date_filter').value;

            // Only submit the form if a valid filter is selected (prevents submitting on default empty selection)
            if (filterValue !== "") {
                document.getElementById('filterForm').submit();
            }
        }

        // Optional: Clear the search input on page load if you don't want to keep the previous search term
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('search').value = ''; // Clear the search field on load

            // Prevent form submission on page load if the filter select value is empty
            const filterForm = document.getElementById('filterForm');
            if (filterForm) {
                filterForm.addEventListener('submit', function(event) {
                    const selectedValue = filterForm.querySelector('select').value;
                    if (selectedValue === '') {
                        event.preventDefault(); // Prevent form submission if no valid filter is selected
                    }
                });
            }
        });
    </script>

    {{-- <script>
        // This function submits the form when 'Enter' key is pressed
        function submitSearchForm(event) {
            if (event.key === 'Enter') {
                document.getElementById('searchForm').submit();
            }
        }
    </script>
    
    <script>
        // This function automatically submits the filter form when the user selects a date filter
        function submitFilterForm() {
            document.getElementById('filterForm').submit();
        }
    </script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Clear the search input on page load if you don't want to keep the previous search term.
            document.getElementById('search').value = '';
    
            // Optional: Prevent form submission on page load if not triggered by user input
            const filterForm = document.getElementById('filterForm');
            if (filterForm) {
                filterForm.addEventListener('submit', function(event) {
                    // Add any additional logic to prevent auto-submit on page load if needed
                    if (filterForm.querySelector('select').value === '') {
                        event.preventDefault();
                    }
                });
            }
        });
    </script> --}}
@endsection
