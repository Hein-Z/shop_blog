<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use ProductSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        $this->call(
            'Database\Seeders\CategorySeeder'
        );

        $this->call(
            'Database\Seeders\ProductSeeder'
        );

        $this->call(
            'Database\Seeders\CouponSeeder'
        );
    }
}
