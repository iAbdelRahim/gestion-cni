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
        Schema::create('enroler', function (Blueprint $table) {
            $table->char('id_enrolement', 10)->primary();
            $table->integer('id_pere')->unsigned();
            $table->integer('id_mere')->unsigned();
            $table->char('id_sexe', 1);
            $table->integer('id_profession')->unsigned();
            $table->char('id_pays', 255);
            $table->char('lib_pays', 255);
            $table->char('nom', 10);
            $table->char('prenom');
            $table->time('heure_naissance');
            $table->char('lieu_naissance', 255);
            $table->char('nni', 255);
            $table->integer('taille');
            $table->char('lien_photo', 255);
            $table->char('lien_empreinte', 255);
            $table->char('lien_signature', 255);
            $table->char('visa', 255);
            $table->char('signataire', 255);
            $table->date('date_emission');
            $table->date('date_expiration');
            $table->date('date_enrolement');
            $table->date('date_naissance');
            $table->timestamps();

            $table->foreign('id_pere')->references('id_pere')->on('pere');
            $table->foreign('id_mere')->references('id_mere')->on('mere');
            $table->foreign('id_sexe')->references('id_sexe')->on('sexe');
            $table->foreign('id_profession')->references('id_profession')->on('profession');
            $table->foreign(['id_pays', 'lib_pays'])->references(['id_pays', 'lib_pays'])->on('pays');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enroler');
    }
};
