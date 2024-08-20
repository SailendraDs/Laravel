@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Reports and Analytics</h1>
    <ul>
        <li><a href="{{ route('admin.reports.show', 'users') }}">User Reports</a></li>
        <li><a href="{{ route('admin.reports.show', 'patients') }}">Patient Reports</a></li>
        <li><a href="{{ route('admin.reports.show', 'appointments') }}">Appointment Reports</a></li>
        <!-- Add more report types as needed -->
    </ul>
</div>
@endsection
