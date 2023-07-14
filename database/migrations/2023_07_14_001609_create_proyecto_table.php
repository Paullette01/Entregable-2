<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('proyecto', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('cliente');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->decimal('tarifa', 8, 2);
            $table->string('tipo');
            $table->string('prioridad');
            $table->string('lider_proyecto')->nullable();
            $table->string('lider_equipo')->nullable();
            $table->text('equipo')->nullable();
            $table->text('miembros_equipo')->nullable();
            $table->text('descripcion')->nullable();
            $table->string('archivos')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyecto');
    }
};
