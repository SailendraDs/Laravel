@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Dietary Profile for {{ $patient->name }}</h1>
    <form method="POST" action="{{ route('dietician.dietary-profiles.store') }}">
        @csrf
        <input type="hidden" name="patient_id" value="{{ $patient->id }}">
        <div id="schedule">
            <div class="form-group">
                <label for="schedule[0][time]">Time</label>
                <input type="text" name="schedule[0][time]" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="schedule[0][meal]">Meal</label>
                <input type="text" name="schedule[0][meal]" class="form-control" required>
            </div>
        </div>
        <button type="button" id="add-meal" class="btn btn-secondary">Add Another Meal</button>
        <button type="submit" class="btn btn-primary">Create Dietary Profile</button>
    </form>
</div>

<script>
document.getElementById('add-meal').addEventListener('click', function() {
    let index = document.querySelectorAll('#schedule .form-group').length / 2;
    let newMeal = `
        <div class="form-group">
            <label for="schedule[${index}][time]">Time</label>
            <input type="text" name="schedule[${index}][time]" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="schedule[${index}][meal]">Meal</label>
            <input type="text" name="schedule[${index}][meal]" class="form-control" required>
        </div>
    `;
    document.getElementById('schedule').insertAdjacentHTML('beforeend', newMeal);
});
</script>
@endsection
