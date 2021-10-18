<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CouponsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('coupons')->delete();
        
        \DB::table('coupons')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => 'ABCDEFG',
                'value' => '30',
                'percent_off' => NULL,
                'type' => 'fixed',
                'created_at' => '2021-01-09 09:32:00',
                'updated_at' => '2021-05-21 18:23:09',
            ),
            1 => 
            array (
                'id' => 2,
                'code' => '123456',
                'value' => NULL,
                'percent_off' => '30',
                'type' => 'percent',
                'created_at' => '2021-01-09 09:32:00',
                'updated_at' => '2021-05-21 18:23:14',
            ),
        ));
        
        
    }
}