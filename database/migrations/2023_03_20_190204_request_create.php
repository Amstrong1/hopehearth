<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hospital_id')->constrained();
            $table->string('name_doctor');
            $table->string('fname_doctor');
            $table->string('tel_doctor');
            $table->string('name_patient');
            $table->string('fname_patient');
            $table->string('tel_patient');
            $table->string('diagnostic');
            $table->string('treatment');
            $table->string('cost');
            $table->string('code');
            $table->string('valid')->default('false');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requests');
    }
};
