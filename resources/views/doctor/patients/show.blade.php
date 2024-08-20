@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $patient->name }}</h1>
    <p>{{ $patient->email }}</p>
    <p>Medical History</p>
    <ul>
        @foreach($patient->records as $record)
            <li>
                <strong>{{ $record->date }}</strong> - {{ $record->notes }}
                <a href="{{ $record->report_link }}">View Report</a>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('doctor.patients.edit', $patient->id) }}" class="btn btn-primary">Edit Profile</a>
</div>
@endsection
