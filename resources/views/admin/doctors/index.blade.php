@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Manage Doctors</h1>
    <ul>
        @foreach($doctors as $doctor)
            <li>{{ $doctor->name }} - {{ $doctor->email }}</li>
        @endforeach
    </ul>
</div>
@endsection
