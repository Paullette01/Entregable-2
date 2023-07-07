<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('empresa');
            $table->string('rol');
            $table->string('nombre');
            $table->string('imagen')->nullable();
            $table->string('employee_id');
            $table->string('telefono');
            $table->string('email');
            $table->date('fecha_nacimiento');
            $table->text('direccion');
            $table->string('genero');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
