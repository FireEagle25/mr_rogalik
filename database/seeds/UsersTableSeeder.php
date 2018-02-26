<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Админ',
                'email' => 'your@email.com',
                'password' => '$2y$10$z4dBTObuYiKQWnYBwkEDceY8CdLVBVTEEG8tcT9Qv0NwpJb0JIEre',
                'remember_token' => NULL,
                'created_at' => '2018-02-11 12:36:24',
                'updated_at' => '2018-02-11 12:36:24',
                'avatar' => 'users/default.png',
                'role_id' => 1,
            ),
        ));
        
        
    }
}