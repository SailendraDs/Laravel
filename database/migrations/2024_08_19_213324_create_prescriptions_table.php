<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('prescriptions', function (Blueprint $table) {
        $table->id();
        $table->foreignId('patient_id')->constrained()->onDelete('cascade');
        $table->foreignId('doctor_id')->constrained('users')->onDelete('cascade');
        $table->json('medicines');
        $table->text('notes')->nullable();
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('prescriptions');
}

};
