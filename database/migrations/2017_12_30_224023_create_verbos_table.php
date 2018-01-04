<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVerbosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verbos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('verbo_categoria_id');
            $table->integer('nivel');
            $table->string('verbo');
            $table->string('verb');
            $table->string('ejemplo');
            $table->string('exampel');
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
        Schema::dropIfExists('verbos');
    }
}
