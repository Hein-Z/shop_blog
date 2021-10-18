<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'parent_id' => NULL,
                'order' => 1,
                'name' => 'Nature',
                'slug' => 'nature',
                'created_at' => '2021-01-09 09:34:02',
                'updated_at' => '2021-05-23 10:59:10',
            ),
            1 => 
            array (
                'id' => 2,
                'parent_id' => NULL,
                'order' => 1,
                'name' => 'Product',
                'slug' => 'product',
                'created_at' => '2021-01-09 09:34:02',
                'updated_at' => '2021-05-23 10:59:33',
            ),
        ));
        
        
    }
}