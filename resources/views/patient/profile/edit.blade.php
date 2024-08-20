@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Profile</h1>
    <form method="POST" action="{{ route('patient.profile.update') }}">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}" required>
        </div>
        <!-- Add other profile fields -->
        <button type="submit" class="btn btn-primary">Update Profile</button>
    </form>
</div>
@endsection
