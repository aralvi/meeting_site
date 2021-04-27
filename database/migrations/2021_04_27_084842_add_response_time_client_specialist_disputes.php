<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddResponseTimeClientSpecialistDisputes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('client_specialist_disputes', function (Blueprint $table) {
            $table->string('response_time')->after('admin_seen');
            $table->string('status')->after('response_time')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('client_specialist_disputes', function (Blueprint $table) {
            //
        });
    }
}
