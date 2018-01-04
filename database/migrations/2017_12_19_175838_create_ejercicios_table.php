<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEjerciciosTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('ejercicios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ejercicios_categorias_id');
            /*$table->string('nombre');*/
            $table->string('categoria');
            $table->integer('nivel');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('ejercicios');
    }
}
