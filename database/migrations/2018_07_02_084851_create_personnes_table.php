<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonnesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnes', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id_personne');
            $table->string('nom');
            $table->string('post_nom')->nullable();
            $table->string('prenom');
            $table->string('telephone')->unique();
            $table->string('email')->unique();
            $table->string('profession');
            $table->integer('scat_id')->unsigned();
            $table->foreign('scat_id')
                  ->references('id_scat')
                  ->on('sous_categories')
                  ->onDelete('cascade');
            $table->integer('cat_id')->unsigned();
            $table->foreign('cat_id')
                  ->references('id_cat')
                  ->on('categories')
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
        Schema::dropIfExists('personnes');
    }
}
