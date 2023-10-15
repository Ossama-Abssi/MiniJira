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
        Schema::create('liverables', function (Blueprint $table) {
            $table->id();
            $table->string('Libellé');
            $table->string('Description');
            $table->string('Chemin Vers Document Disque');
            $table->foreignId('phase_id')->constrained('phases')->cascadeOnDelete();

            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('liverables');
    }
};
