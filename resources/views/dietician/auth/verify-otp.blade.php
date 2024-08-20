@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Verify Your Email</h1>
    <form method="POST" action="{{ route('dietician.verify-otp') }}">
        @csrf
        <input type="hidden" name="email" value="{{ $user->email }}">
        <div class="form-group">
            <label for="otp">Enter OTP</label>
            <input type="text" class="form-control" id="otp" name="otp" required>
        </div>
        <button type="submit" class="btn btn-primary">Verify</button>
    </form>
</div>
@endsection
