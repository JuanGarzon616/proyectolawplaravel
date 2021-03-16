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
            $table->foreignId('fk_document_type_id')
                ->constrained()
                ->references('id')
                ->on('document_types');
            $table->foreignId('fk_rol_id')
                ->default(1)
                ->constrained()
                ->references('id')
                ->on('rols');
            $table->foreignId('fk_municipality_id')
                ->constrained()
                ->references('id')
                ->on('municipalities');

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
