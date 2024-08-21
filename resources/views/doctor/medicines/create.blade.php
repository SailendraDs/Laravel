@extends('layouts.dash')

@section('content')
<div class="container-fluid">
<div class="row">
  
<div class="container">
    <h3>Add Medicine</h3>

    <form method="POST" action="{{ route('doctor.medicines.store') }}">
        @csrf
        <div class="form-group">
            <label for="name">Medicine Name</label>
            <input type="text" placeholder="eg: Dolo" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="dosage">Dosage</label>
            <input type="text" name="dosage" placeholder="eg: 650mg" id="dosage" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description (optional)</label>
            <textarea name="description" placeholder="eg: Manufacturer Name, Chemical/Ayurvedic/Homeo Components" id="description" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Add Medicine</button>
    </form>
</div>
@endsection
