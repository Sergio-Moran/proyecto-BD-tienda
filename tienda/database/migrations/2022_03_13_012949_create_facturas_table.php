<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('cod_cliente_fk')
                ->nullable(true)
                ->constrained('clientes', 'id')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->string('ciudad')->nullable(true);
            $table->string('descripcion')->nullable(true);
            $table->double('total')->nullable(true);
            $table->foreignId('cod_usuario_fk')
            ->nullable(true)
            ->constrained('users', 'id')
            ->onUpdate('cascade')
            ->onDelete('restrict');
            $table->boolean('estado_pagado')->nullable(true);
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
        Schema::dropIfExists('facturas');
    }
}
