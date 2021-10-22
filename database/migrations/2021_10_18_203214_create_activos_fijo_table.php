<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivosFijoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activos_fijo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('tipo_bienes_id');
            $table->unsignedBigInteger('aux_contable_id');
            $table->text('descripcion');
            $table->unsignedBigInteger('funcionario_id');
            $table->string('ci');
            $table->timestamps();
            $table->unsignedBigInteger('cargo_id');
            $table->text('ubicacion');
            $table->enum('estado',['ACTIVO','INACTIVO']);

            $table->foreign('tipo_bienes_id')->references('id')->on('bienes');
            $table->foreign('aux_contable_id')->references('id')->on('aux_contable');
            $table->foreign('funcionario_id')->references('id')->on('funcionario');
            $table->foreign('cargo_id')->references('id')->on('cargo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activos_fijo');
    }
}
