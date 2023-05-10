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
        Schema::create('validrequests', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('birthday');
            $table->string('sex');
            $table->string('career');
            $table->string('tel');
            $table->string('ms');
            $table->string('city');
            $table->string('block');
            $table->string('square');
            $table->string('house');
            $table->string('request_code');
            $table->string('code');
            $table->string('transmis')->default('false');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('validrequests');
    }
};
