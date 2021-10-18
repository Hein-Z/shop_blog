<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrderProductTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('order_product')->delete();
        
        \DB::table('order_product')->insert(array (
            0 => 
            array (
                'id' => 1,
                'order_id' => NULL,
                'product_id' => 20,
                'quantity' => 2,
                'created_at' => '2021-01-09 09:50:23',
                'updated_at' => '2021-01-09 09:50:23',
            ),
            1 => 
            array (
                'id' => 2,
                'order_id' => NULL,
                'product_id' => 74,
                'quantity' => 8,
                'created_at' => '2021-01-22 15:39:06',
                'updated_at' => '2021-01-22 15:39:06',
            ),
            2 => 
            array (
                'id' => 3,
                'order_id' => NULL,
                'product_id' => 74,
                'quantity' => 7,
                'created_at' => '2021-01-22 15:44:32',
                'updated_at' => '2021-01-22 15:44:32',
            ),
            3 => 
            array (
                'id' => 4,
                'order_id' => NULL,
                'product_id' => 71,
                'quantity' => 3,
                'created_at' => '2021-01-22 15:46:34',
                'updated_at' => '2021-01-22 15:46:34',
            ),
            4 => 
            array (
                'id' => 5,
                'order_id' => NULL,
                'product_id' => 16,
                'quantity' => 3,
                'created_at' => '2021-01-22 15:48:32',
                'updated_at' => '2021-01-22 15:48:32',
            ),
            5 => 
            array (
                'id' => 6,
                'order_id' => NULL,
                'product_id' => 71,
                'quantity' => 4,
                'created_at' => '2021-01-22 15:49:57',
                'updated_at' => '2021-01-22 15:49:57',
            ),
            6 => 
            array (
                'id' => 7,
                'order_id' => 7,
                'product_id' => 71,
                'quantity' => 1,
                'created_at' => '2021-01-22 15:59:04',
                'updated_at' => '2021-01-22 15:59:04',
            ),
            7 => 
            array (
                'id' => 8,
                'order_id' => 8,
                'product_id' => 71,
                'quantity' => 2,
                'created_at' => '2021-10-06 17:29:56',
                'updated_at' => '2021-10-06 17:29:56',
            ),
            8 => 
            array (
                'id' => 9,
                'order_id' => 8,
                'product_id' => 20,
                'quantity' => 1,
                'created_at' => '2021-10-06 17:29:56',
                'updated_at' => '2021-10-06 17:29:56',
            ),
            9 => 
            array (
                'id' => 10,
                'order_id' => 9,
                'product_id' => 92,
                'quantity' => 1,
                'created_at' => '2021-10-10 12:55:43',
                'updated_at' => '2021-10-10 12:55:43',
            ),
            10 => 
            array (
                'id' => 11,
                'order_id' => 10,
                'product_id' => 8,
                'quantity' => 1,
                'created_at' => '2021-10-11 16:57:53',
                'updated_at' => '2021-10-11 16:57:53',
            ),
        ));
        
        
    }
}