@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Manage Dieticians</h1>
    <ul>
        @foreach($dieticians as $dietician)
            <li>{{ $dietician->name }} - {{ $dietician->email }}</li>
        @endforeach
    </ul>
</div>
@endsection
