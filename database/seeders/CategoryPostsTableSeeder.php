<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryPostsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('category_posts')->delete();
        
        \DB::table('category_posts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'category_id' => 1,
                'post_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}