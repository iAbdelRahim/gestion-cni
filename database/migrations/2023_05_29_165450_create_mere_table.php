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
        Schema::create('mere', function (Blueprint $table) {
            $table->increments('id_mere');
            $table->integer('id_profession')->unsigned();
            $table->string('nom_mere');
            $table->string('prenom_mere');
            $table->date('date_naissance_mere');
            $table->timestamps();

            $table->foreign('id_profession')->references('id_profession')->on('profession');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mere');
    }
};
