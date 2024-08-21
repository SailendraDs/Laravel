@extends('layouts.dash1')

@section('content')
<div class="container">
    <h3>Edit Patient Profile</h3>
    <form method="POST" action="{{ route('profile.update', $patient->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Personal Information -->
        <h3>Personal Information</h3>
        <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" name="name" placeholder="{{ old('name', $patient->name) }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="dob">Date of Birth</label>
            <input type="date" name="dob" value="{{ old('dob', $patient->dob) }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="gender">Gender</label>
            <select name="gender" class="form-control" required>
                <option value="male" {{ old('gender', $patient->gender) == 'male' ? 'selected' : '' }}>Male</option>
                <option value="female" {{ old('gender', $patient->gender) == 'female' ? 'selected' : '' }}>Female</option>
                <option value="other" {{ old('gender', $patient->gender) == 'other' ? 'selected' : '' }}>Other</option>
            </select>
        </div>
        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" name="email" value="{{ old('email', $patient->email) }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="text" name="phone" value="{{ old('phone', $patient->phone) }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" value="{{ old('address', $patient->address) }}" class="form-control" required>
        </div>

        <!-- Emergency Contact Information -->
        <h3>Emergency Contact Information</h3>
        <div class="form-group">
            <label for="emergency_contact_name">Emergency Contact Name</label>
            <input type="text" name="emergency_contact_name" value="{{ old('emergency_contact_name', $patient->emergency_contact_name) }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="emergency_contact_relationship">Emergency Contact Relationship</label>
            <input type="text" name="emergency_contact_relationship" value="{{ old('emergency_contact_relationship', $patient->emergency_contact_relationship) }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="emergency_contact_phone">Emergency Contact Phone</label>
            <input type="text" name="emergency_contact_phone" value="{{ old('emergency_contact_phone', $patient->emergency_contact_phone) }}" class="form-control" required>
        </div>

        <!-- Medical Information -->
        <h3>Medical Information</h3>
        <div class="form-group">
            <label for="blood_group">Blood Group</label>
            <input type="text" name="blood_group" value="{{ old('blood_group', $patient->blood_group) }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="height">Height (cm)</label>
            <input type="number" name="height" value="{{ old('height', $patient->height) }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="weight">Weight (kg)</label>
            <input type="number" name="weight" value="{{ old('weight', $patient->weight) }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="bmi">BMI</label>
            <input type="number" step="0.01" name="bmi" value="{{ old('bmi', $patient->bmi) }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="pulse_rate">Pulse Rate</label>
            <input type="number" name="pulse_rate" value="{{ old('pulse_rate', $patient->pulse_rate) }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="blood_pressure_systolic">Blood Pressure (Systolic)</label>
            <input type="number" name="blood_pressure_systolic" value="{{ old('blood_pressure_systolic', $patient->blood_pressure_systolic) }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="blood_pressure_diastolic">Blood Pressure (Diastolic)</label>
            <input type="number" name="blood_pressure_diastolic" value="{{ old('blood_pressure_diastolic', $patient->blood_pressure_diastolic) }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="diabetic_status">Diabetic Status</label>
            <select name="diabetic_status" class="form-control" required>
                <option value="1" {{ old('diabetic_status', $patient->diabetic_status) == '1' ? 'selected' : '' }}>Yes</option>
                <option value="0" {{ old('diabetic_status', $patient->diabetic_status) == '0' ? 'selected' : '' }}>No</option>
            </select>
        </div>

        <!-- Phobias and Allergies -->
        <h3>Phobias and Allergies</h3>
        <div class="form-group">
            <label for="fear_of_insulin">Fear of Insulin</label>
            <select name="fear_of_insulin" class="form-control">
                <option value="1" {{ old('fear_of_insulin', $patient->fear_of_insulin) == '1' ? 'selected' : '' }}>Yes</option>
                <option value="0" {{ old('fear_of_insulin', $patient->fear_of_insulin) == '0' ? 'selected' : '' }}>No</option>
            </select>
        </div>
        <div class="form-group">
            <label for="fear_of_medicines">Fear of Medicines</label>
            <select name="fear_of_medicines" class="form-control">
                <option value="1" {{ old('fear_of_medicines', $patient->fear_of_medicines) == '1' ? 'selected' : '' }}>Yes</option>
                <option value="0" {{ old('fear_of_medicines', $patient->fear_of_medicines) == '0' ? 'selected' : '' }}>No</option>
            </select>
        </div>
        <div class="form-group">
            <label for="other_phobias">Other Phobias</label>
            <input type="text" name="other_phobias" value="{{ old('other_phobias', $patient->other_phobias) }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="known_allergies_medications">Known Allergies (Medications)</label>
            <input type="text" name="known_allergies_medications" value="{{ old('known_allergies_medications', $patient->known_allergies_medications) }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="known_allergies_foods">Known Allergies (Foods)</label>
            <input type="text" name="known_allergies_foods" value="{{ old('known_allergies_foods', $patient->known_allergies_foods) }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="known_allergies_environmental">Known Allergies (Environmental)</label>
            <input type="text" name="known_allergies_environmental" value="{{ old('known_allergies_environmental', $patient->known_allergies_environmental) }}" class="form-control">
        </div>

        <!-- Medical History -->
        <h3>Medical History</h3>
        <div class="form-group">
            <label for="chronic_conditions">Chronic Conditions</label>
            <select name="chronic_conditions[]" class="form-control" multiple>
                <option value="condition_1" {{ in_array('condition_1', old('chronic_conditions', $patient->chronic_conditions ?? [])) ? 'selected' : '' }}>Condition 1</option>
                <option value="condition_2" {{ in_array('condition_2', old('chronic_conditions', $patient->chronic_conditions ?? [])) ? 'selected' : '' }}>Condition 2</option>
                <option value="hypertension" {{ in_array('hypertension', old('chronic_conditions', $patient->chronic_conditions ?? [])) ? 'selected' : '' }}>Hypertension</option>
                <option value="asthma" {{ in_array('asthma', old('chronic_conditions', $patient->chronic_conditions ?? [])) ? 'selected' : '' }}>Asthma</option>
            </select>
        </div>

        <div class="form-group">
            <label for="previous_diagnoses">Previous Diagnoses</label>
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#previousDiagnosesModal">Add Previous Diagnoses</button>
        </div>

        <!-- Modal for Previous Diagnoses -->
        <div class="modal fade" id="previousDiagnosesModal" tabindex="-1" role="dialog" aria-labelledby="previousDiagnosesModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="previousDiagnosesModalLabel">Add Previous Diagnoses</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="diagnosis_condition">Condition</label>
                            <input type="text" class="form-control" id="diagnosis_condition" name="previous_diagnoses[][condition]">
                        </div>
                        <div class="form-group">
                            <label for="diagnosis_date">Date</label>
                            <input type="date" class="form-control" id="diagnosis_date" name="previous_diagnoses[][date]">
                        </div>
                        <div class="form-group">
                            <label for="diagnosis_severity">Severity</label>
                            <select class="form-control" id="diagnosis_severity" name="previous_diagnoses[][severity]">
                                <option value="mild">Mild</option>
                                <option value="moderate">Moderate</option>
                                <option value="severe">Severe</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="diagnosis_status">Current Status</label>
                            <select class="form-control" id="diagnosis_status" name="previous_diagnoses[][status]">
                                <option value="resolved">Resolved</option>
                                <option value="ongoing">Ongoing</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="addDiagnosis">Add Diagnosis</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
    <label for="family_medical_history">Family Medical History</label>
    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#familyMedicalHistoryModal">Add Family Medical History</button>
</div>

<!-- Modal for Family Medical History -->
<div class="modal fade" id="familyMedicalHistoryModal" tabindex="-1" role="dialog" aria-labelledby="familyMedicalHistoryModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="familyMedicalHistoryModalLabel">Add Family Medical History</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="hereditary_conditions">Hereditary Conditions</label>
                    <input type="text" class="form-control" id="hereditary_conditions" name="family_medical_history[][hereditary_conditions]">
                </div>
                <div class="form-group">
                    <label for="familial_diseases">Familial Diseases</label>
                    <input type="text" class="form-control" id="familial_diseases" name="family_medical_history[][familial_diseases]">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="addFamilyHistory">Add Family History</button>
            </div>
        </div>
    </div>
</div>

<div class="form-group">
    <label for="surgical_history">Surgical History</label>
    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#surgicalHistoryModal">Add Surgical History</button>
</div>

<!-- Modal for Surgical History -->
<div class="modal fade" id="surgicalHistoryModal" tabindex="-1" role="dialog" aria-labelledby="surgicalHistoryModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="surgicalHistoryModalLabel">Add Surgical History</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="surgery_name">Surgery Name</label>
                    <input type="text" class="form-control" id="surgery_name" name="surgical_history[][surgery_name]">
                </div>
                <div class="form-group">
                    <label for="surgery_date">Surgery Date</label>
                    <input type="date" class="form-control" id="surgery_date" name="surgical_history[][surgery_date]">
                </div>
                <div class="form-group">
                    <label for="surgery_outcome">Surgery Outcome</label>
                    <input type="text" class="form-control" id="surgery_outcome" name="surgical_history[][surgery_outcome]">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="addSurgicalHistory">Add Surgical History</button>
            </div>
        </div>
    </div>
</div>


<div class="form-group">
    <label for="treatment_history">Treatment History</label>
    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#treatmentHistoryModal">Add Treatment History</button>
</div>

<!-- Modal for Treatment History -->
<div class="modal fade" id="treatmentHistoryModal" tabindex="-1" role="dialog" aria-labelledby="treatmentHistoryModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="treatmentHistoryModalLabel">Add Treatment History</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="treatment_type">Treatment Type</label>
                    <input type="text" class="form-control" id="treatment_type" name="treatment_history[][treatment_type]">
                </div>
                <div class="form-group">
                    <label for="treatment_date">Treatment Date</label>
                    <input type="date" class="form-control" id="treatment_date" name="treatment_history[][treatment_date]">
                </div>
                <div class="form-group">
                    <label for="treatment_outcome">Treatment Outcome</label>
                    <input type="text" class="form-control" id="treatment_outcome" name="treatment_history[][treatment_outcome]">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="addTreatmentHistory">Add Treatment History</button>
            </div>
        </div>
    </div>
</div>

        
        <div class="form-group">
            <label for="lab_reports">Lab Reports</label>
            <input type="file" name="lab_reports[]" class="form-control" multiple>
        </div>

        <div class="form-group">
            <label for="radiology_reports">Radiology Reports</label>
            <input type="file" name="radiology_reports[]" class="form-control" multiple>
        </div>

        <div class="form-group">
            <label for="specialist_reports">Specialist Reports</label>
            <input type="file" name="specialist_reports[]" class="form-control" multiple>
        </div>

        <!-- Continue adding fields for each section in the controller's validation rules -->

        <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary">Update Profile</button>
        </div>
    </form>
</div>

<script>
    // Script for handling modal form submissions for complex fields
    $('#addDiagnosis').click(function() {
        var condition = $('#diagnosis_condition').val();
        var date = $('#diagnosis_date').val();
        var severity = $('#diagnosis_severity').val();
        var status = $('#diagnosis_status').val();

        // Example of appending values to the form
        $('<input>').attr({
            type: 'hidden',
            name: 'previous_diagnoses[][condition]',
            value: condition
        }).appendTo('form');
        
        $('<input>').attr({
            type: 'hidden',
            name: 'previous_diagnoses[][date]',
            value: date
        }).appendTo('form');
        
        $('<input>').attr({
            type: 'hidden',
            name: 'previous_diagnoses[][severity]',
            value: severity
        }).appendTo('form');
        
        $('<input>').attr({
            type: 'hidden',
            name: 'previous_diagnoses[][status]',
            value: status
        }).appendTo('form');

        // Clear modal fields
        $('#diagnosis_condition').val('');
        $('#diagnosis_date').val('');
        $('#diagnosis_severity').val('');
        $('#diagnosis_status').val('');
        
        // Close the modal
        $('#previousDiagnosesModal').modal('hide');
    });

    // Example for Family Medical History
$('#addFamilyHistory').click(function() {
    var hereditary_conditions = $('#hereditary_conditions').val();
    var familial_diseases = $('#familial_diseases').val();

    $('<input>').attr({
        type: 'hidden',
        name: 'family_medical_history[][hereditary_conditions]',
        value: hereditary_conditions
    }).appendTo('form');
    
    $('<input>').attr({
        type: 'hidden',
        name: 'family_medical_history[][familial_diseases]',
        value: familial_diseases
    }).appendTo('form');

    // Clear modal fields
    $('#hereditary_conditions').val('');
    $('#familial_diseases').val('');
    
    // Close the modal
    $('#familyMedicalHistoryModal').modal('hide');
});

$('#addSurgicalHistory').click(function() {
    var surgery_name = $('#surgery_name').val();
    var surgery_date = $('#surgery_date').val();
    var surgery_outcome = $('#surgery_outcome').val();

    $('<input>').attr({
        type: 'hidden',
        name: 'surgical_history[][surgery_name]',
        value: surgery_name
    }).appendTo('form');

    $('<input>').attr({
        type: 'hidden',
        name: 'surgical_history[][surgery_date]',
        value: surgery_date
    }).appendTo('form');

    $('<input>').attr({
        type: 'hidden',
        name: 'surgical_history[][surgery_outcome]',
        value: surgery_outcome
    }).appendTo('form');

    $('#surgery_name').val('');
    $('#surgery_date').val('');
    $('#surgery_outcome').val('');
    $('#surgicalHistoryModal').modal('hide');
});

// Treatment History
$('#addTreatmentHistory').click(function() {
    var treatment_type = $('#treatment_type').val();
    var treatment_date = $('#treatment_date').val();
    var treatment_outcome = $('#treatment_outcome').val();

    $('<input>').attr({
        type: 'hidden',
        name: 'treatment_history[][treatment_type]',
        value: treatment_type
    }).appendTo('form');

    $('<input>').attr({
        type: 'hidden',
        name: 'treatment_history[][treatment_date]',
        value: treatment_date
    }).appendTo('form');

    $('<input>').attr({
        type: 'hidden',
        name: 'treatment_history[][treatment_outcome]',
        value: treatment_outcome
    }).appendTo('form');

    $('#treatment_type').val('');
    $('#treatment_date').val('');
    $('#treatment_outcome').val('');
    $('#treatmentHistoryModal').modal('hide');
});
</script>
@endsection

