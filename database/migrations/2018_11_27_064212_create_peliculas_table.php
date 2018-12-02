<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeliculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peliculas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();         // cada pelicula pertece a un usuario (tipo: admin)

            // Create foreing key relationship
            $table->foreign('user_id')->references('id')->on('users');

            $table->string('titulo');
            $table->mediumText('sinopsis');
            // $table->binary('poster');
            $table->text('resena');
            $table->string('poster_image');   // nombre de la imagen
            $table->date('estreno');
            $table->timestamps();
        });

        // once the table is created use a raw query to ALTER it and add the MEDIUMBLOB
        // DB::statement("ALTER TABLE peliculas ADD poster MEDIUMBLOB");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peliculas');
    }
}
