<?php

namespace Database\Seeders;

use App\Models\Coupon;
use Illuminate\Database\Seeder;

class CouponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Coupon::create([
            'code' => 'ABCDEFG',
            'type' => 'fixed',
            'value' => '30'
        ]);
        Coupon::create([
            'code' => '123456',
            'type' => 'percent',
            'percent_off' => '30'
        ]);
    }
}
