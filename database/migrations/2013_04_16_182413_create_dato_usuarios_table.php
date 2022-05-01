<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatoUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dato_usuarios', function (Blueprint $table) {
            $table->bigIncrements('codigo');
            $table->string('nombres');
            $table->string('apellidos');
            $table->integer('telefono');
            $table->string('direccion');
            $table->string('dpi');
            $table->foreignId('cod_rol_usuario_fk')
            ->nullable()
            ->constrained('rol_usuarios', 'codigo')
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
        Schema::dropIfExists('dato_usuarios');
    }
}
