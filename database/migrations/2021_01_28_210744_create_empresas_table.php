<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();
            $table->string('cif')->unique();
            $table->string('direccion');
            $table->string('poblacion');
            $table->char('cp', 5);
            $table->string('telefono1');
            $table->string('telefono2')->nullable();
            $table->string('fax')->nullable();
            $table->string('email')->unique();
            $table->enum('sector_productivo', ['primario', 'secundario', 'terciario']);
            $table->string('actividad_principal');
            $table->enum('titularidad', ['publica', 'privada']);
            $table->string('representante_nombre');
            $table->string('representante_nif');
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
        Schema::dropIfExists('empresas');
    }
}
