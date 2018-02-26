<?php

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 3,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'description' => '',
                'generate_permissions' => true,
                'created_at' => '2018-02-11 12:34:25',
                'updated_at' => '2018-02-11 12:34:25',
                'server_side' => 0,
                'controller' => '',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
            ),
            1 => 
            array (
                'id' => 5,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'description' => '',
                'generate_permissions' => true,
                'created_at' => '2018-02-11 12:34:25',
                'updated_at' => '2018-02-11 12:34:25',
                'server_side' => 0,
                'controller' => '',
                'policy_name' => NULL,
            ),
            2 => 
            array (
                'id' => 6,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'description' => '',
                'generate_permissions' => true,
                'created_at' => '2018-02-11 12:34:25',
                'updated_at' => '2018-02-11 12:34:25',
                'server_side' => 0,
                'controller' => '',
                'policy_name' => NULL,
            ),
            3 => 
            array (
                'id' => 7,
                'name' => 'products',
                'slug' => 'products',
                'display_name_singular' => 'Продукт',
                'display_name_plural' => 'Продукты',
                'icon' => 'voyager-pizza',
                'model_name' => 'App\\Product',
                'description' => NULL,
                'generate_permissions' => true,
                'created_at' => '2018-02-11 12:50:57',
                'updated_at' => '2018-02-26 09:33:22',
                'server_side' => 1,
                'controller' => NULL,
                'policy_name' => NULL,
            ),
        ));
        
        
    }
}