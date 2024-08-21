@extends('layouts.auth')

@section('content')
<div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signup-cover.jpg'); background-position: top;">
      <span class="mask bg-gradient-dark opacity-6"></span>
      
</div>
    <div class="container">
      <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
          <div class="card z-index-0">
            <div class="card-header text-center pt-4">
              <h5>Register with Below Form</h5>
            </div>
            
            <div class="card-body">
                <form method="POST" action="{{ route('doctor.register') }}">
                @csrf
                <div class="mb-3">
                  <input type="text" class="form-control" placeholder="Name" id="name" name="name" aria-label="Name">
                </div>
                <div class="mb-3">
                  <input type="email" class="form-control" placeholder="Email" id="email" name="email" aria-label="Email">
                </div>
                <div class="mb-3">
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password" aria-label="Password">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" aria-label="Password">
                </div>

                <div class="form-check form-switch text-start">
                  <input class="form-check-input" type="checkbox">
                  <label class="form-check-label" for="remember">
                    I agree the <a href="{{ route('terms') }}" class="text-dark font-weight-bolder">Terms and Conditions</a>
                  </label>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Sign up</button>
                </div>
                <p class="text-sm mt-3 mb-0">Already have an account? <a href="{{ route('doctor.login') }}" class="text-dark font-weight-bolder">Sign in</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
