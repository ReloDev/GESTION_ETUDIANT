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
        Schema::create('structure_filieres', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_filiere')->constrained('filieres');
            $table->foreignId('id_structure')->constrained('structures');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('structure_filieres');
    }
};
