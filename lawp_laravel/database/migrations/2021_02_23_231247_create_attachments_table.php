<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attachments', function (Blueprint $table) {
            $table->id();
            $table->string('url')->nullable();
            $table->string('archive');
            $table->foreignID('fk_pqr_id')
                ->nullable()
                ->constrained()
                ->references('id')
                ->on('pqrs')
                ->onDelete('cascade');
            $table->foreignID('fk_response_id')
                ->nullable()
                ->constrained()
                ->references('id')
                ->on('responses')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attachments');
    }
}
