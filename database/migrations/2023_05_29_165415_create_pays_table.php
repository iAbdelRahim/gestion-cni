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
        Schema::create('pays', function (Blueprint $table) {
            $table->string('id_pays');
            $table->string('lib_pays');
            $table->primary(['id_pays', 'lib_pays']); // Ajoute une clé primaire sur les deux colonnes
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pays');
    }
};
