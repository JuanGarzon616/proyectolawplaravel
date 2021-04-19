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
            $table->foreignId('fk_user_id')
                ->constrained()
                ->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreignId('fk_bussiness_id')
                ->constrained()
                ->references('id')
                ->on('businesses')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreignId('fk_status_id')
                ->default(1)
                ->constrained()
                ->references('id')
                ->on('status');
            $table->foreignId('fk_pqr_type_id')
                ->default(1)
                ->constrained()
                ->references('id')
                ->on('pqr_types');
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
