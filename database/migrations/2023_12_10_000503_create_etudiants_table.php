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
        Schema::create('etudiants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom',100);
            $table->string('prenom',100);
            $table->date('date_naissance'); 
            $table->string('matricule',25)->unique();
            $table->string('adresse',65);   
            $table->string('email',85)->unique();
            $table->string('telephone',25)->nullable();
            $table->unsignedBigInteger('ville_id');
            $table->timestamps();
        
            $table->foreign('ville_id')->references('id')->on('villes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiants');
    }
};
