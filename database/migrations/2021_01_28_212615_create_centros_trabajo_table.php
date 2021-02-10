<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCentrosTrabajoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centros_trabajo', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_centro')->unique();
            $table->string('direccion');
            $table->string('poblacion');
            $table->char('cp', 5);
            $table->string('actividad');
            $table->string('numero_trabajadores');
            $table->string('email')->unique();
            $table->string('telefono1');
            $table->string('telefono2')->nullable();
            $table->enum('tipo_jornada', ['completa', 'parcial']);
            $table->string('Horario');
            $table->string('nombre_coordinador_fct')->nullable()->comment('Quizá se borra por un enlace a otra tabla');
            $table->string('nif_coordinador_fct')->nullable()->comment('Quizá se borra por un enlace a otra tabla');
            $table->string('comentarios')->nullable();
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
        Schema::dropIfExists('centros_trabajo');
    }
}
