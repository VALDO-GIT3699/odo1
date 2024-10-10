<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->id(); // ID auto incremental
            //$table->unsignedBigInteger('usuario_id'); // Referencia al usuario (puedes ajustarlo según tu modelo)
            $table->date('fecha'); // Fecha de la cita
            $table->time('hora'); // Hora de la cita
            $table->string('descripcion')->nullable();  // Descripción de la cita
            $table->string('consultorio');
            $table->enum('estado', ['pendiente', 'confirmada', 'cancelada'])->default('pendiente'); // Estado de la cita
            $table->timestamps(); // Campos created_at y updated_at

            // Si deseas crear una relación con el modelo de usuario:
            //$table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('citas');
    }
};
