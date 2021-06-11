<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stls', function (Blueprint $table) {
            $table->integer('ID_STL')->unsigned();
            $table->integer('ID_MODELO')->unsigned();
            $table->integer('ID_CASO')->unsigned();
            $table->primary(['ID_CASO','ID_MODELO','ID_STL']);
            $table->string('Nombre_del_elemento', 50);
            $table->string('Color',8);
            $table->boolean('Visible');
            $table->integer('Transparencia')->unsigned();
            $table->integer('Orden')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stls');
    }
}
