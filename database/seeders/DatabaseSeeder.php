<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserCoupon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            CouponSeeder::class,
            PostSeeder::class,
            PostCommentSeeder::class,
        ]);
    }
}
