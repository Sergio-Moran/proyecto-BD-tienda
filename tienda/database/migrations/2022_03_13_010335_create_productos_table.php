<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('codigo');
            $table->string('nombres');
            $table->double('precio_venta');
            $table->double('precio_compra');
            $table->boolean('estado')->default(0);
            $table->foreignId('cod_proveedor_fk')
                ->nullable(true)
                ->constrained('proveedores', 'codigo')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->foreignId('cod_unidad_medida_fk')
                ->nullable(true)
                ->constrained('unidades_de_medidas', 'codigo')
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
        Schema::dropIfExists('productos');
    }
}
