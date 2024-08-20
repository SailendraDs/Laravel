@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dietary Profile Details</h1>
    <p><strong>Patient:</strong> {{ $profile->patient->name }}</p>
    <p><strong>Dietary Schedule:</strong></p>
    <ul>
        @foreach(json_decode($profile->schedule) as $meal)
            <li>{{ $meal->time }} - {{ $meal->meal }}</li>
        @endforeach
    </ul>
</div>
@endsection
