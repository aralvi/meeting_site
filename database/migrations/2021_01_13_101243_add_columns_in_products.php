<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsInProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
           $table->string('product_url')->after('variant')->nullable();
           $table->string('page_title')->after('product_url')->nullable();
           $table->longText('keywords')->after('page_title')->nullable();
           $table->longText('seo_description')->after('keywords')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('page_title');
            $table->dropColumn('product_url');
            $table->dropColumn('keywords');
            $table->dropColumn('seo_description');
        });
    }
}
