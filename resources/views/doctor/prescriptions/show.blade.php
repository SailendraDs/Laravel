@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Prescription Details</h1>
    <p><strong>Patient:</strong> {{ $prescription->patient->name }}</p>
    <p><strong>Date:</strong> {{ $prescription->created_at->format('d/m/Y') }}</p>
    <p><strong>Medicines:</strong></p>
    <ul>
        @foreach(json_decode($prescription->medicines) as $medicine)
            <li>{{ $medicine->name }} - {{ $medicine->dosage }} - {{ $medicine->frequency }}</li>
        @endforeach
    </ul>
    <p><strong>Notes:</strong> {{ $prescription->notes }}</p>
</div>
@endsection
