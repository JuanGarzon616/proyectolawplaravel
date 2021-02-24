<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePqrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pqrs', function (Blueprint $table) {
            $table->id();
            $table->string('affair',50);
            $table->text('description');
            $table->date('date');
            $table->bigInteger('fk_user_id')->unsigned();
            $table->bigInteger('fk_bussiness_id')->unsigned();
            $table->foreign('fk_user_id')->references('id')->on('users');
            $table->foreign('fk_bussiness_id')->references('id')->on('businesses');
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
        Schema::dropIfExists('pqrs');
    }
}
