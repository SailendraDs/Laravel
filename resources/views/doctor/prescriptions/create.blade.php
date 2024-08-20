@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Prescription for {{ $patient->name }}</h1>
    <form method="POST" action="{{ route('doctor.prescriptions.store') }}">
        @csrf
        <input type="hidden" name="patient_id" value="{{ $patient->id }}">
        <div id="medicines">
            <div class="form-group">
                <label for="medicines[0][name]">Medicine Name</label>
                <input type="text" name="medicines[0][name]" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="medicines[0][dosage]">Dosage</label>
                <input type="text" name="medicines[0][dosage]" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="medicines[0][frequency]">Frequency</label>
                <input type="text" name="medicines[0][frequency]" class="form-control" required>
            </div>
        </div>
        <button type="button" id="add-medicine" class="btn btn-secondary">Add Another Medicine</button>
        <div class="form-group">
            <label for="notes">Notes</label>
            <textarea name="notes" id="notes" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create Prescription</button>
    </form>
</div>

<script>
document.getElementById('add-medicine').addEventListener('click', function() {
    let index = document.querySelectorAll('#medicines .form-group').length / 3;
    let newMedicine = `
        <div class="form-group">
            <label for="medicines[${index}][name]">Medicine Name</label>
            <input type="text" name="medicines[${index}][name]" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="medicines[${index}][dosage]">Dosage</label>
            <input type="text" name="medicines[${index}][dosage]" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="medicines[${index}][frequency]">Frequency</label>
            <input type="text" name="medicines[${index}][frequency]" class="form-control" required>
        </div>
    `;
    document.getElementById('medicines').insertAdjacentHTML('beforeend', newMedicine);
});
</script>
@endsection
