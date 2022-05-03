<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallesFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles_facturas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('cod_producto_fk')
                ->nullable(true)
                ->constrained('productos', 'id')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->foreignId('cod_factura_fk')
                ->nullable(true)
                ->constrained('facturas', 'id')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->double('cantidad');
            $table->double('subtotal');
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
        Schema::dropIfExists('detalles_facturas');
    }
}
