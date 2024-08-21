@extends('layouts.dash')

@section('content')
<div class="container">
    <h3>Patients</h3>
    <ul>
        @foreach($patients as $patient)
            <li><a class="btn btn-primary" href="{{ route('doctor.patients.show', $patient->id) }}">{{ $patient->name }}</a></li>
        @endforeach
    </ul>
</div>
@endsection
