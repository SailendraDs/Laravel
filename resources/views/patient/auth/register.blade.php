@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('patient.register') }}">
        @csrf
        <!-- Name, Email, Password, Confirm Password Fields -->
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>
@endsection
