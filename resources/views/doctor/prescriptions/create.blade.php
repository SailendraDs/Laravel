@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create Prescription for {{ $patient->name }}</h2>
    <form method="POST" action="{{ route('doctor.prescriptions.store') }}">
        @csrf

        <input type="hidden" name="patient_id" value="{{ $patient->id }}">

        <div id="medicines-container">
            <div class="medicine-item">
                <div class="form-group">
                    <label for="medicine-name">Medicine Name</label>
                    <input type="text" name="medicines[0][name]" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="medicine-dosage">Dosage</label>
                    <input type="text" name="medicines[0][dosage]" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="medicine-frequency-type">Frequency Type</label>
                    <select name="medicines[0][frequency][type]" class="form-control" required>
                        <option value="fasting">Fasting</option>
                        <option value="pre-breakfast">Pre-Breakfast</option>
                        <option value="post-breakfast">Post-Breakfast</option>
                        <option value="pre-lunch">Pre-Lunch</option>
                        <option value="post-lunch">Post-Lunch</option>
                        <option value="pre-dinner">Pre-Dinner</option>
                        <option value="post-dinner">Post-Dinner</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="medicine-frequency-time">Frequency Time</label>
                    <input type="time" name="medicines[0][frequency][time]" class="form-control" required>
                </div>

                <button type="button" class="btn btn-danger remove-medicine">Remove Medicine</button>
                <hr>
            </div>
        </div>

        <button type="button" id="add-medicine" class="btn btn-secondary">Add Another Medicine</button>

        <div class="form-group">
            <label for="notes">Notes</label>
            <textarea name="notes" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Create Prescription</button>
    </form>
</div>

<script>
    document.getElementById('add-medicine').addEventListener('click', function() {
        let container = document.getElementById('medicines-container');
        let index = container.children.length;
        let newMedicine = document.createElement('div');
        newMedicine.classList.add('medicine-item');
        newMedicine.innerHTML = `
            <div class="form-group">
                <label for="medicine-name">Medicine Name</label>
                <input type="text" name="medicines[${index}][name]" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="medicine-dosage">Dosage</label>
                <input type="text" name="medicines[${index}][dosage]" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="medicine-frequency-type">Frequency Type</label>
                <select name="medicines[${index}][frequency][type]" class="form-control" required>
                    <option value="fasting">Fasting</option>
                    <option value="pre-breakfast">Pre-Breakfast</option>
                    <option value="post-breakfast">Post-Breakfast</option>
                    <option value="pre-lunch">Pre-Lunch</option>
                    <option value="post-lunch">Post-Lunch</option>
                    <option value="pre-dinner">Pre-Dinner</option>
                    <option value="post-dinner">Post-Dinner</option>
                </select>
            </div>
            <div class="form-group">
                <label for="medicine-frequency-time">Frequency Time</label>
                <input type="time" name="medicines[${index}][frequency][time]" class="form-control" required>
            </div>
            <button type="button" class="btn btn-danger remove-medicine">Remove Medicine</button>
            <hr>`;
        container.appendChild(newMedicine);
    });

    document.addEventListener('click', function(e) {
        if (e.target && e.target.classList.contains('remove-medicine')) {
            e.target.closest('.medicine-item').remove();
        }
    });
</script>
@endsection
