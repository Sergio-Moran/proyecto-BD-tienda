<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventarioProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventario_productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descripcion');
            $table->double('cantidad');
            $table->foreignId('cod_producto_fk')
                ->nullable(true)
                ->constrained('productos', 'id')
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
        Schema::dropIfExists('inventario_productos');
    }
}
