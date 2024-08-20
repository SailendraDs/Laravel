@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('patient.login') }}">
        @csrf
        <!-- Email and Password Fields -->
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>
@endsection
