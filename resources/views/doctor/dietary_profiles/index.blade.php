@extends('layouts.dash')

@section('content')
<div class="container-fluid py-4">
<div class="row">
  
<div class="card">
<h3>Dietary Profiles</h3>

  <div class="table-responsive">
    <table class="table align-items-center mb-0">
      <thead>
        <tr>
          
        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Patient Name</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Show Profile</th>

        </tr>
      </thead>
      <tbody>
      @foreach($profiles as $profile)
        <tr>
         
          <td>
            <p class="text-xs font-weight-bold mb-0">{{ $profile->patient->name }}</p>
            
          </td>
          
          <td class="align-middle text-center">
          <a href="{{ route('dietician.dietary-profiles.show', $profile->id) }}">Diet Profle </a>
          </td>
        
        </tr>
      @endforeach

@endsection
