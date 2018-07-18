<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgrammesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programmes', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id_programme');
            $table->time('heure_debut');
            $table->time('heure_fin');
            $table->date('date');
            $table->string('libelle');
            $table->integer('activite_id')
                  ->unsigned();
            $table->foreign('activite_id')
                  ->references('id_activite')
                  ->on('activites')
                  ->onDelete('cascade');
            $table->integer('intervenant_id')
                  ->unsigned();
            $table->foreign('intervenant_id')
                  ->references('id_intervenant')
                  ->on('intervenants')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('programmes');
    }
}
