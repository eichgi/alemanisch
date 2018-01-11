<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSustantivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sustantivos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('categoria_id');
            $table->char('articulo', 3);
            $table->string('sustantivo');
            $table->char('artikel', 3);
            $table->string('substantiv');
            $table->char('artikel_plural', 3);
            $table->string('substantiv_plural');
            $table->integer('nivel');
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
        Schema::dropIfExists('sustantivos');
    }
}
