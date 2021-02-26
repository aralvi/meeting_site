<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PaymentGatewaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payment_gateways')->insert([
            'publish_key' => 'pk_'.Str::random(20),
            'secret_key' => 'sk_'.Str::random(20),
            'payment_mode' => 'sandbox',
        ]);
    }
}
