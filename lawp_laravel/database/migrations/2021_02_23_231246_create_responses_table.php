<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponsesTable extends Migration
{

    public function up()
    {
        Schema::create('responses', function (Blueprint $table) {
            $table->id();
            $table->text('response_pqr');
            $table->foreignId('fk_pqr_id')
                ->constrained()
                ->references('id')->on('pqrs')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('responses');
    }
}
