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
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('price');
            $table->string('company');
            $table->string('address');
            $table->string('city');
            $table->string('cover');
            $table->tinyInteger('beds');
            $table->tinyInteger('baths');
            $table->integer('square_meters');
            $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('houses');
    }
};
