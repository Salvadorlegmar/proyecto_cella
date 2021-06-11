<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelos', function (Blueprint $table) {
            $table->integer('ID_MODELO')->unsigned();
            $table->integer('ID_CASO')->unsigned();
            $table->primary(['ID_CASO','ID_MODELO']);
            $table->string('Nombre_del_modelo',50);
            $table->enum('Tipo',['hepático','pancreático','colorrectal','tiroides','otro']);
            $table->dateTime("Fecha/hora_de_alta");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modelos');
    }
}
