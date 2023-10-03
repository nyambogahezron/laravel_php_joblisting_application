<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('job_listings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->string('logo')->nullable();
            $table->string('tags')->nullable();
            $table->string('company');
            $table->string('location');
            $table->string('email');
            $table->string('industry');
            $table->string('jobType');
            $table->string('experience_level');
            $table->dateTime('dateline');
            $table->string('website');
            $table->longText('description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_listings');
    }
};