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
        Schema::create('pere', function (Blueprint $table) {
            $table->increments('id_pere');
            $table->integer('id_profession')->unsigned();
            $table->string('nom_pere', 255);
            $table->string('prenom_pere', 255);
            $table->date('date_naissance_pere');
            $table->timestamps();

            $table->foreign('id_profession')->references('id_profession')->on('profession');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pere');
    }
};
