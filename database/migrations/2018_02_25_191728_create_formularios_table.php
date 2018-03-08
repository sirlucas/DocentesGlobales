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
            $table->string('nombre',50);
            $table->string('rut',10);
            $table->string('email');
            $table->integer('telefono');
            $table->integer('dom_cargo_id')->unsigned();
            $table->integer('dom_unidad_id')->unsigned();
            $table->integer('dom_carrera_id')->unsigned();
            $table->integer('dom_sede_id')->unsigned();// sede UDD correspondiente
            // datos institucion anfitriona
            $table->string('institucion_anf',100);
            $table->string('inst_descripcion',150)->nullable();
            $table->integer('dom_actividad_id')->unsigned();
            $table->integer('dom_ciudad_id')->unsigned();
            $table->string('website',100)->nullable();
            // datos de contacto anfitrion
            $table->string('contacto_anf',100)->nullable();
            $table->string('cont_cargo',50)->nullable();
            $table->string('cont_email',50)->nullable();
            $table->integer('cont_fono')->nullable();
            //fecha de viaje y motivos
            $table->date('fecha_ida');
            $table->date('fecha_retorno');
            $table->integer('dom_clasificacion_id')->unsigned();
            $table->string('proposito',200)->nullable(); //proposito de la visita
            //formulario DDCA
            $table->integer('duracion_act')->nullable();//duracion de la actividad en horas (si es menos de 100horas)
            $table->enum('Incluido_en_plan_de_trabajo', ['Si','No','Por Ingresar']);
            $table->decimal('inscripcion',10,2)->nullable(); //inscripcion/matricula
            $table->decimal('arancel',10,2)->nullable();
            $table->decimal('pasajes',10,2)->nullable();
            $table->decimal('viatico',10,2)->nullable();
            $table->decimal('otros',10,2)->nullable();
            $table->decimal('total',10,2)->nullable();
            $table->integer('currency_id')->unsigned();
            $table->string('observaciones',200)->nullable();
            // otros campos
            $table->string('colaboracion',200)->nullable();//colaboraiciones U. anfitriona con UDD
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
