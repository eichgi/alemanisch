<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePronombresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pronombres', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pronombre_tipo_id');
            $table->string('pronombre');
            $table->string('pronomen');
            $table->string('ejemplo');
            $table->string('exempel');
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
        Schema::dropIfExists('pronombres');
    }
}
