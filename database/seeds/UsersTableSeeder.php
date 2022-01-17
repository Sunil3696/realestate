<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_array = array(
        		'name' = 'Adminname',
        		'email' = 'sunil@gmail.com',
        		'password' = HASH::make('admin123'),
        		'role' = 'admin'
        );
             DB::table('users')->insert($user_array);
    }
}




   