<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->string('matricule');
            $table->string('nom');
            $table->string('prenom');
            $table->string('email');
            $table->string('telephone');
            $table->bigInteger('parcours_id');
            $table->bigInteger('cycle_id');
            $table->bigInteger('niveau_id');
            $table->bigInteger('option_id');
            $table->foreign('parcours_id')->references('id')->on('parcours')->onDelete('RESTRICT')->onUpdate('RESTRICT');
            $table->foreign('cycle_id')->references('id')->on('cycles')->onDelete('RESTRICT')->onUpdate('RESTRICT');
            $table->foreign('niveau_id')->references('id')->on('niveaux')->onDelete('RESTRICT')->onUpdate('RESTRICT');
            $table->foreign('option_id')->references('id')->on('options')->onDelete('RESTRICT')->onUpdate('RESTRICT');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etudiants');
    }
}
