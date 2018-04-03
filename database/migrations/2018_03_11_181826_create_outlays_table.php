<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOutlaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outlays', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('monto',10,2)->nullable();
            $table->integer('currency_id')->unsigned();
            $table->integer('c_gestion_id')->unsigned();
            $table->integer('account_id')->unsigned();
            $table->integer('formulario_in_id')->unsigned();


            $table->foreign('currency_id')->references('id')->on('currencies')->onDelete('no action');
            $table->foreign('c_gestion_id')->references('id')->on('c_gestions')->onDelete('no action');
            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('no action');
            $table->foreign('formulario_id')->references('id')->on('formularios')->onDelete('no action');
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
        Schema::dropIfExists('outlays');
    }
}
