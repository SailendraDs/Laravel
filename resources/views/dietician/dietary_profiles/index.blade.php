@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dietary Profiles</h1>
    <ul>
        @foreach($profiles as $profile)
            <li>
                <a href="{{ route('dietician.dietary-profiles.show', $profile->id) }}">
                    Dietary Profile for {{ $profile->patient->name }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
@endsection
