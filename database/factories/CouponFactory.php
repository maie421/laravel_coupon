<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Coupon>
 */
class CouponFactory extends Factory
{
    public string $faker_discount_type;
    public string $discount_value;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $this->faker_discount_type = $this->faker->randomElement(['PERCENT', 'PIXED']);

        return [
            'discount_type' => $this->faker_discount_type,
            'discount_value' => $this->discountValue($this->faker_discount_type),
            'period_day' => $this->faker->randomNumber(1, false),
        ];
    }

    private function discountValue(string $discount_type): string {
        return $this->discount_value = match ($discount_type) {
            'PIXED' => $this->faker->randomNumber(5, false),
            'PERCENT' => $this->faker->randomNumber(2, true),
        };
    }
}
