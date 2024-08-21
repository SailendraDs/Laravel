<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();  // Primary key for patients
            $table->unsignedBigInteger('user_id'); 
            $table->string('name');
            $table->date('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('emergency_contact_name')->nullable();
            $table->string('emergency_contact_relationship')->nullable();
            $table->string('emergency_contact_phone')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('occupation')->nullable();
            $table->string('nationality')->nullable();
            $table->string('insurance_provider')->nullable();
            $table->string('insurance_policy_number')->nullable();
            $table->text('insurance_coverage_details')->nullable();
            $table->string('blood_group')->nullable();
            $table->float('height')->nullable();
            $table->float('weight')->nullable();
            $table->float('bmi')->nullable();
            $table->integer('pulse_rate')->nullable();
            $table->integer('blood_pressure_systolic')->nullable();
            $table->integer('blood_pressure_diastolic')->nullable();
            $table->boolean('diabetic_status')->nullable();
            $table->boolean('fear_of_insulin')->nullable();
            $table->boolean('fear_of_medicines')->nullable();
            $table->string('other_phobias')->nullable();
            $table->text('known_allergies_medications')->nullable();
            $table->text('known_allergies_foods')->nullable();
            $table->text('known_allergies_environmental')->nullable();
            $table->json('chronic_conditions')->nullable();
            $table->json('blood_sugar_levels')->nullable();
            $table->json('current_conditions')->nullable();
            $table->json('current_medications')->nullable();
            $table->json('previous_diagnoses')->nullable();
            $table->json('family_medical_history')->nullable();
            $table->json('surgical_history')->nullable();
            $table->json('treatment_history')->nullable();
            $table->json('lab_reports')->nullable();
            $table->json('radiology_reports')->nullable();
            $table->json('specialist_reports')->nullable();
            $table->json('medication_history')->nullable();
            $table->json('health_hobbies')->nullable();
            $table->json('exercise_fitness_routine')->nullable();
            $table->json('dietary_preferences')->nullable();
            $table->json('food_hobbies')->nullable();
            $table->json('food_allergies')->nullable();
            $table->json('health_goals')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};

