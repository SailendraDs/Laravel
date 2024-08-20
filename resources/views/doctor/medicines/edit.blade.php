@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Medicine</h1>
    <form method="POST" action="{{ route('doctor.medicines.update', $medicine->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Medicine Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $medicine->name }}" required>
        </div>
        <div class="form-group">
            <label for="dosage">Dosage</label>
            <input type="text" name="dosage" id="dosage" class="form-control" value="{{ $medicine->dosage }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description (optional)</label>
            <textarea name="description" id="description" class="form-control">{{ $medicine->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Medicine</button>
    </form>
</div>
@endsection
