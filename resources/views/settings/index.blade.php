@extends('layouts.navigation')

@section('content')
<div class="container">
    <h2>User Settings</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('settings.update') }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="monthly_budget">Monthly Budget</label>
            <input type="number" step="0.01" name="monthly_budget" id="monthly_budget" class="form-control" value="{{ old('monthly_budget', $settings->monthly_budget) }}" required>
        </div>

        <div class="form-group">
            <label for="notification_threshold">Notification Threshold (%)</label>
            <input type="number" name="notification_threshold" id="notification_threshold" class="form-control" value="{{ old('notification_threshold', $settings->notification_threshold) }}" min="1" max="100" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Save Settings</button>
    </form>
</div>
@endsection
