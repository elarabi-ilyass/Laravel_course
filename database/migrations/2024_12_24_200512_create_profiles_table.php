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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50); // Augmentez si nécessaire
            $table->string('email', 255)->unique(); // Les emails peuvent être longs
            $table->string('password', 255); // Les hash bcrypt font environ 60 caractères
            $table->text('description'); // Garde une grande capacité
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
