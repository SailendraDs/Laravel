@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Reset Password</h1>
    <form method="POST" action="{{ route('admin.password.email') }}">
        @csrf
        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Send Password Reset Link</button>
    </form>
</div>
@endsection
