@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Appointments for {{ $patient->name }}</h1>
    <ul>
        @foreach($appointments as $appointment)
            <li>{{ $appointment->date }} - {{ $appointment->notes }}</li>
        @endforeach
    </ul>
</div>
@endsection
