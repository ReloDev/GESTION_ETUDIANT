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
        Schema::create('structures_filieres', function (Blueprint $table) {

            $table->foreignId('id_filiere')->constrained('filieres')->onDelete('cascade');

            $table->foreignId('id_structure')->constrained('structures')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('structures_filieres');
    }
};
