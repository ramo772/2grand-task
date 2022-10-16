<?php

namespace Database\Factories;

use App\Models\Advertiser;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ad>
 */
class AdFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $types = array(
            'free',
            'paid',
        );
        $category_id = Category::inRandomOrder()->implode('id');
        $advertiser_id = Advertiser::inRandomOrder()->implode('id');
        return [
            'title' => fake()->word(),
            'type' => $types[rand(0,1)] ,
            'description' => fake()->paragraph(),
            'category_id' => $category_id[0],
            'advertiser_id' => $advertiser_id[0],
            'start_date' => fake()->date(),
        ];
    }
}
