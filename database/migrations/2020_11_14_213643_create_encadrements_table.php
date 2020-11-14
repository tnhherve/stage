<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncadrementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encadrements', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('etudiant_id');
            $table->bigInteger('enseignant_id');
            $table->foreign('enseignant_id')->references('id')->on('enseignants')->onDelete('RESTRICT')->onUpdate('RESTRICT');
            $table->foreign('etudiant_id')->references('id')->on('etudiants')->onDelete('RESTRICT')->onUpdate('RESTRICT');
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
        Schema::dropIfExists('encadrements');
    }
}
