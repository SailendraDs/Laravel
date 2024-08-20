@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Prescriptions</h1>
    <form method="GET" action="{{ route('doctor.prescriptions.index') }}">
        <div class="form-group">
            <label for="patient_name">Filter by Patient Name</label>
            <input type="text" name="patient_name" id="patient_name" class="form-control" value="{{ request('patient_name') }}">
        </div>
        <button type="submit" class="btn btn-primary">Filter</button>
    </form>
    <ul>
        @foreach($prescriptions as $prescription)
            <li>
                <a href="{{ route('doctor.prescriptions.show', $prescription->id) }}">
                    Prescription for {{ $prescription->patient->name }} on {{ $prescription->created_at->format('d/m/Y') }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
@endsection
