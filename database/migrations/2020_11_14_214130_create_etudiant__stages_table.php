<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantStagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiant__stages', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('etudiant_id');
            $table->bigInteger('stage_id');
            $table->foreign('etudiant_id')->references('id')->on('etudiants')->onDelete('RESTRICT')->onUpdate('RESTRICT');
            $table->foreign('stage_id')->references('id')->on('stages')->onDelete('RESTRICT')->onUpdate('RESTRICT');
            $table->integer('annee');
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
        Schema::dropIfExists('etudiant__stages');
    }
}
