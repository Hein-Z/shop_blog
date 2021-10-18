<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('category')->delete();
        
        \DB::table('category')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Products',
                'slug' => 'products',
                'created_at' => '2021-01-09 09:32:50',
                'updated_at' => '2021-01-09 09:32:50',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Laptops',
                'slug' => 'laptops',
                'created_at' => '2021-01-09 09:32:50',
                'updated_at' => '2021-01-09 09:32:50',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Desktops',
                'slug' => 'desktops',
                'created_at' => '2021-01-09 09:32:50',
                'updated_at' => '2021-01-09 09:32:50',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Mobile Phones',
                'slug' => 'mobile-phones',
                'created_at' => '2021-01-09 09:32:50',
                'updated_at' => '2021-01-09 09:32:50',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Tablets',
                'slug' => 'tablets',
                'created_at' => '2021-01-09 09:32:50',
                'updated_at' => '2021-01-09 09:32:50',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'TVs',
                'slug' => 'tvs',
                'created_at' => '2021-01-09 09:32:50',
                'updated_at' => '2021-01-09 09:32:50',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Digital Cameras',
                'slug' => 'digital-cameras',
                'created_at' => '2021-01-09 09:32:50',
                'updated_at' => '2021-01-09 09:32:50',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Appliances',
                'slug' => 'appliances',
                'created_at' => '2021-01-09 09:32:50',
                'updated_at' => '2021-01-09 09:32:50',
            ),
        ));
        
        
    }
}