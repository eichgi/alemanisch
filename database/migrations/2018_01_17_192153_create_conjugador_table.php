<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConjugadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conjugador', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('verbos_categoria');
            $table->integer('verbos_id');
            $table->string('pronombre');
            $table->string('pronomen');
            $table->string('verbo');
            $table->string('verb');
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
        Schema::dropIfExists('conjugador');
    }
}
