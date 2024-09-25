<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('reservation', function (Blueprint $table) {
        $table->id();
        $table->string('lieu_depart');
        $table->string('lieu_arrivee');
        $table->dateTime('date_heure');
        $table->dateTime('date_retour')->nullable();
        $table->integer('pax');
        $table->string('email');
        $table->string('nom_prenom');
        $table->string('numero_telephone');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservation');
    }
};
