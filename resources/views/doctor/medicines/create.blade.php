@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Medicine</h1>
    <form method="POST" action="{{ route('doctor.medicines.store') }}">
        @csrf
        <div class="form-group">
            <label for="name">Medicine Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="dosage">Dosage</label>
            <input type="text" name="dosage" id="dosage" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description (optional)</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Add Medicine</button>
    </form>
</div>
@endsection
