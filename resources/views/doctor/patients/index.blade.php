@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Patients</h1>
    <ul>
        @foreach($patients as $patient)
            <li><a href="{{ route('doctor.patients.show', $patient->id) }}">{{ $patient->name }}</a></li>
        @endforeach
    </ul>
</div>
@endsection
