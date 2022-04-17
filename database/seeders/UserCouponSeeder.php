<?php

namespace Database\Seeders;

use App\Models\UserCoupon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserCouponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserCoupon::factory()
            ->count(10)
            ->create();
    }
}
