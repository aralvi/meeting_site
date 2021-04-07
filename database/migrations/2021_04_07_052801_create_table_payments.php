<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePayments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('specialist_id');
            $table->string('appointment_id')->nullable();
            $table->string('bid_id')->nullable();
            $table->double('amount');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('specialist_id')->references('id')->on('specialists')->onDelete('cascade');
            $table->enum('recieve_status',['0','1'])->default(0);
            $table->enum('withdraw_status',['0','1','2'])->default(0);
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
        Schema::dropIfExists('payments');
    }
}
