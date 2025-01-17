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
        Schema::create('personal_data', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('range');
            $table->string('address');
            $table->string('city');
            $table->integer('postal_code');
            $table->string('state');
            $table->string('country');
            $table->integer('phone');
            $table->string('prefix');
            $table->string('email');
            $table->string('website');
            $table->string('linkedin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_data');
    }
};
