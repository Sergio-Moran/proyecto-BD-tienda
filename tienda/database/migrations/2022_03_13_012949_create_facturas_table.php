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
            $table->bigIncrements('codigo');
            $table->string('descripcion');
            $table->double('total');
            $table->foreignId('cod_cliente')
                ->nullable(true)
                ->constrained('clientes', 'codigo')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->foreignId('cod_venta')
                ->nullable(true)
                ->constrained('ventas', 'codigo')
                ->onUpdate('cascade')
                ->onDelete('restrict');
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
