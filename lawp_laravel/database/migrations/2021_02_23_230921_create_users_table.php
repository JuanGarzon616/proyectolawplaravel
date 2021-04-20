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
            $table->bigInteger('document')->unique();
            $table->string('names',50);
            $table->string('last_names',50);
            $table->string('direcction',50);
            $table->string('image')/*->default('http://127.0.0.1:8000/storage/images/img-default.jpg')*/->nullable();
            $table->bigInteger('tellephone1');
            $table->bigInteger('tellephone2')->nullable();
            $table->string('mail',50)->unique();
            $table->string('password');
            $table->string('token')->nullable();
            $table->boolean('is_admin')->nullable();
            $table->foreignId('fk_business_id')
                ->nullable()
                ->constrained()
                ->onDelete('set null')
                ->references('id')
                ->on('businesses');
            $table->foreignId('fk_document_type_id')
                ->constrained()
                ->references('id')
                ->on('document_types');
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
