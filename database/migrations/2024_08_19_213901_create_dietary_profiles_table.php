<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dietary_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained()->onDelete('cascade');
            $table->foreignId('doctor_id')->constrained()->onDelete('cascade'); // assuming doctors create dietary profiles
            $table->json('schedule'); // to store the schedule with foods, calories, and nutrition details
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dietary_profiles');
    }
};
