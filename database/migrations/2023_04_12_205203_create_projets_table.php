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
        Schema::create('projets', function (Blueprint $table) {
            $table->id();
            $table->string('Nom');
            $table->string('Description',1200);
            $table->string('DateDebut');
            $table->string('DateFin');
            $table->boolean('EtatDeRealisation');
            $table->foreignId('organisme_id')->constrained('organismes')->cascadeOnDelete();
 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projets');
    }
};
