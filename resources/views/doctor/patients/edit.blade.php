@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Patient: {{ $patient->name }}</h1>
    <form method="POST" action="{{ route('doctor.patients.update', $patient->id) }}">
        @csrf
        <!-- Include form fields for editing patient profile -->
        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
</div>
@endsection
