<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMunicipalitiesTable extends Migration
{

    public function up()
    {
        Schema::create('municipalities', function (Blueprint $table) {
            $table->id();
            $table->string('name',45);
            //$table->bigInteger('fk_departaments_id')->unsigned();
            $table->foreignId('fk_departaments_id')
                ->constrained()
                ->references('id')
                ->on('departament');
            //$table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('municipalities');
    }
}
