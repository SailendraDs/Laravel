@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Manage Users</h1>
    <ul>
        @foreach($users as $user)
            <li>{{ $user->name }} - {{ $user->role }}</li>
        @endforeach
    </ul>
</div>
@endsection
