<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormulariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formularios', function (Blueprint $table) {
            $table->increments('id');
            // datos personales
            $table->string('nombres',50);
            $table->string('paterno',50);
            $table->string('materno',50);
            $table->string('rut',10)->unique();
            $table->string('email');
            $table->integer('telefono');
            $table->integer('dom_cargo_id')->unsigned();
            $table->integer('dom_unidad_id')->unsigned();
            $table->integer('dom_carrera_id')->unsigned();
            $table->integer('dom_sede_id')->unsigned();// sede UDD correspondiente
            // datos institucion anfitriona
            $table->string('institucion_anf',100);
            $table->string('inst_descripcion',150);
            $table->string('website',100);
            // datos de contacto anfitrion
            $table->string('contacto_anf',100);
            $table->string('cont_cargo',50);
            $table->string('cont_email',50);
            $table->integer('cont_fono');
            //fecha de viaje y motivos
            $table->date('fecha_ida');
            $table->date('fecha_retorno');
            $table->integer('dom_clasificacion_id')->unsigned();
            $table->string('proposito',200); //proposito de la visita
            $table->integer('dom_actividad_id')->unsigned();
            $table->integer('dom_ciudad_id')->unsigned();
            //formulario DDCA
            $table->integer('duracion_act');//duracion de la actividad en horas
            $table->enum('Incluido_en_plan_de_trabajo', ['Si','No','Por Ingresar']);
            $table->decimal('inscripcion',10,2); //inscripcion/matricula
            $table->decimal('arancel',10,2);
            $table->decimal('pasajes',10,2);
            $table->decimal('viatico',10,2);
            $table->decimal('otros',10,2);
            $table->decimal('total',10,2);
            $table->integer('currency_id')->unsigned();
            $table->string('observaciones',200);
            $table->timestamps();

            $table->foreign('dom_cargo_id')->references('id')->on('dom_cargos')->onDelete('no action');
            $table->foreign('dom_unidad_id')->references('id')->on('dom_faculties')->onDelete('no action');
            $table->foreign('dom_carrera_id')->references('id')->on('dom_careers')->onDelete('no action');
            $table->foreign('dom_sede_id')->references('id')->on('dom_sedes')->onDelete('no action');
            $table->foreign('dom_clasificacion_id')->references('id')->on('dom_clasificacions')->onDelete('no action');
            $table->foreign('dom_actividad_id')->references('id')->on('dom_activities')->onDelete('no action');
            $table->foreign('dom_ciudad_id')->references('id')->on('cities')->onDelete('no action');
            $table->foreign('currency_id')->references('idcurrency')->on('currencies')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formularios');
    }
}
