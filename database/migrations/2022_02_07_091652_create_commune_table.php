<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommuneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //no olvidar revisar si esta pluralizada el nombre de la tabla
        Schema::create('communes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            //agregamos la relacion de pertenencia
            $table->unsignedBigInteger('region_id');
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
        Schema::dropIfExists('communes');
    }
}
