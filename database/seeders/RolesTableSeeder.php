<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'display_name' => 'Administrator',
                'created_at' => '2021-01-09 09:33:56',
                'updated_at' => '2021-01-09 09:33:56',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'user',
                'display_name' => 'Normal User',
                'created_at' => '2021-01-09 09:33:56',
                'updated_at' => '2021-01-09 09:33:56',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'manager',
                'display_name' => 'Manager',
                'created_at' => '2021-01-22 12:50:02',
                'updated_at' => '2021-01-22 12:50:02',
            ),
        ));
        
        
    }
}