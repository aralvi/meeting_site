<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class AdmindataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = DB::table('users')->insert([
        	'user_type' => 'superadmin',
        	'first_name' => Str::random(10),
            'last_name' => Str::random(10),
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('asdfghjkl;'),
            'status' => 'active'
        ]);

        
    }
}
