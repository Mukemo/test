<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAffectationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affectations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->increments('id');
            $table->integer('hotesse_id')
                  ->unsigned();
            $table->foreign('hotesse_id')
                  ->references('id_hotesse')
                  ->on('hotesses')
                  ->onDelete('cascade');
            $table->integer('chauffeur_id')
                  ->unsigned();
            $table->foreign('chauffeur_id')
                  ->references('id_chauffeur')
                  ->on('chauffeurs')
                  ->onDelete('cascade');
            $table->integer('personne_id')
                  ->unsigned();
            $table->foreign('personne_id')
                  ->references('id_personne')
                  ->on('personnes')
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
        Schema::dropIfExists('affectations');
    }
}
