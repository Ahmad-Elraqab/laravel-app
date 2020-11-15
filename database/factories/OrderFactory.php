<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'user_id' => \App\Models\User::factory(User::class),
            'user_name' => \App\Models\User::factory(User::class),
            'product_image' => $this->faker->imageUrl(),
            'product_quantity' => $this->faker->randomDigit,
            'product_name' => $this->faker->sentence,
            'product_price' => $this->faker->randomDigit,
            'status' => $this->faker->sentence,
            'product_id' => Str::random(10),
        ];
    }
}
