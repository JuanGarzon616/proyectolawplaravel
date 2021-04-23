<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fk_business_id')
                ->constrained()
                ->references('id')
                ->on('businesses')
                ->onDelete('cascade');
            $table->foreignId('fk_membership_id')
                ->constrained()
                ->references('id')
                ->on('memberships');
            $table->foreignId('fk_payment_id')
                ->constrained()
                ->references('id')
                ->on('payments');
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
        Schema::dropIfExists('bills');
    }
}
