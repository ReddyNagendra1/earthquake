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
        Schema::create('earthquake_observation', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('earthquake_id');
            $table->unsignedBigInteger('observation_id');
            $table->timestamps();

            $table->foreign('earthquake_id')->references('id')->on('earthquakes')->onDelete('cascade');
            $table->foreign('observation_id')->references('id')->on('observations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('earthquake_observation');
    }
};
