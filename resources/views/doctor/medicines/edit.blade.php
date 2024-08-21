@extends('layouts.dash')

@section('content')
<div class="container">
    <h3>Edit Medicine</h3>
    <form method="POST" action="{{ route('doctor.medicines.update', $medicine->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Medicine Name</label>
            <input type="text" placeholder="eg: Dolo" name="name" id="name" class="form-control" value="{{ $medicine->name }}" required>
        </div>
        <div class="form-group">
            <label for="dosage">Dosage</label>
            <input type="text" name="dosage" placeholder="eg: 650mg" id="dosage" class="form-control" value="{{ $medicine->dosage }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description (optional)</label>
            <textarea name="description" placeholder="eg: Manufacturer Name, Chemical/Ayurvedic/Homeo Components" id="description" class="form-control">{{ $medicine->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Medicine</button>
    </form>
</div>
@endsection
