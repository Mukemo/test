<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->increments('id_participation');
            $table->integer('personne_id')
                  ->unsigned();
            $table->foreign('personne_id')
                  ->references('id_personne')
                  ->on('personnes')
                  ->onDelete('cascade');
            $table->integer('activite_id')
                  ->unsigned();
            $table->foreign('activite_id')
                  ->references('id_activite')
                  ->on('activites')
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
        Schema::dropIfExists('participations');
    }
}
