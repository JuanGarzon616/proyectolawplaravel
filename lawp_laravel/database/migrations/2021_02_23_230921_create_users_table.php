<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->integer('document');
            $table->string('names',50);
            $table->string('last_names',50);
            $table->string('direcction',50);
            $table->integer('telephone1');
            $table->integer('tellephone2')->nullable();
            $table->string('mail',50);
            $table->string('password',30);
            $table->bigInteger('fk_document_type_id')->unsigned();
            $table->bigInteger('fk_rol_id')->unsigned();
            $table->bigInteger('fk_municipality_id')->unsigned();
            $table->foreign('fk_document_type_id')->references('id')->on('document_types');
            $table->foreign('fk_rol_id')->references('id')->on('rols');
            $table->foreign('fk_municipality_id')->references('id')->on('municipalities');

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
        Schema::dropIfExists('users');
    }
}
