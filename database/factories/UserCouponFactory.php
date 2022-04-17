<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

class UserCouponFactory extends Factory
{
    #[ArrayShape(['user_id' => "int", 'coupon_id' => "int"])]
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->numberBetween(0,10),
            'coupon_id' => $this->faker->numberBetween(0,10),
        ];
    }
}
