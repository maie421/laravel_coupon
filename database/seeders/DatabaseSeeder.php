<?php

namespace Database\Seeders;

use App\Models\User;
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
            User::factory(10)->create(),
            CouponSeeder::class,
            PostSeeder::class,
            PostCommentSeeder::class,
        ]);
    }
}
