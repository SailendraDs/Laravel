@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Manage Patients</h1>
    <ul>
        @foreach($patients as $patient)
            <li>{{ $patient->name }} - {{ $patient->email }}</li>
        @endforeach
    </ul>
</div>
@endsection
