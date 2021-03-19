<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nit')->unique();
            $table->bigInteger('tellephone1');
            $table->bigInteger('tellephone2');
            $table->string('bussiness_name',100);
            $table->string('name',30);
            $table->string('password');
            $table->string('mail',100);
            $table->dateTime('member_remaining');
            $table->string('token');
            $table->foreignId('fk_economic_sector_id')
                ->constrained()
                ->references('id')
                ->on('economic_sectors');
            $table->foreignId('fk_municipality_id')
                ->constrained()
                ->references('id')
                ->on('municipalities');
            $table->foreignId('fk_membership_id')
                ->constrained()
                ->references('id')
                ->on('memberships');
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
        Schema::dropIfExists('businesses');
    }
}
