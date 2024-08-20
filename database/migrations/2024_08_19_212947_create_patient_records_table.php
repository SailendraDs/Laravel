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
    Schema::create('patient_records', function (Blueprint $table) {
        $table->id();
        $table->foreignId('patient_id')->constrained()->onDelete('cascade');
        $table->date('date');
        $table->text('notes');
        $table->string('report_link')->nullable();
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('patient_records');
}

};
