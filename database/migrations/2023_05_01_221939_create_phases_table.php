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
        Schema::create('phases', function (Blueprint $table) {
            $table->id();
            $table->string('Libellé');
            $table->string('Description');
            $table->string('DateDebut');
            $table->string('DateFin');
            $table->string('MontantAPayé');
            $table->string('EtatDeRealisation');
            $table->string('EtatDeFacture');
            $table->string('EtatDePaiement');
            $table->softDeletes();
            $table->foreignId('projet_id')->constrained('projets')->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phases');
    }
};
