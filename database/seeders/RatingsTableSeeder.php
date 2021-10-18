<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RatingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ratings')->delete();
        
        \DB::table('ratings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 13,
                'product_id' => 71,
                'rating' => 2,
                'created_at' => '2021-05-22 18:27:18',
                'updated_at' => '2021-05-22 19:08:25',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 11,
                'product_id' => 71,
                'rating' => 5,
                'created_at' => '2021-05-22 18:27:18',
                'updated_at' => '2021-10-10 13:22:18',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 1,
                'product_id' => 71,
                'rating' => 4,
                'created_at' => '2021-05-22 18:27:18',
                'updated_at' => '2021-05-22 19:04:47',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 13,
                'product_id' => 39,
                'rating' => 4,
                'created_at' => '2021-05-22 19:09:25',
                'updated_at' => '2021-05-22 19:09:28',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 14,
                'product_id' => 71,
                'rating' => 3,
                'created_at' => '2021-09-26 14:01:48',
                'updated_at' => '2021-09-26 14:01:57',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 11,
                'product_id' => 20,
                'rating' => 2,
                'created_at' => '2021-10-06 17:26:19',
                'updated_at' => '2021-10-10 13:22:08',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 11,
                'product_id' => 92,
                'rating' => 3,
                'created_at' => '2021-10-10 12:53:50',
                'updated_at' => '2021-10-10 12:53:50',
            ),
        ));
        
        
    }
}