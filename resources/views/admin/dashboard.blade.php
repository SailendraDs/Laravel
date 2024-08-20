@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Admin Dashboard</h1>
    <p>Welcome, {{ Auth::user()->name }}</p>
    <a href="{{ route('admin.users') }}" class="btn btn-primary">Manage Users</a>
    <a href="{{ route('admin.patients') }}" class="btn btn-primary">Manage Patients</a>
    <a href="{{ route('admin.doctors') }}" class="btn btn-primary">Manage Doctors</a>
    <a href="{{ route('admin.dieticians') }}" class="btn btn-primary">Manage Dieticians</a>
</div>
@endsection
