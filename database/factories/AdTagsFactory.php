<?php

namespace Database\Factories;

use App\Models\Ad;
use App\Models\Tags;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AdTags>
 */
class AdTagsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $ad_id = Ad::inRandomOrder()->implode('id');
        $tag_id = Tags::inRandomOrder()->implode('id');

        return [
            'ad_id' => $ad_id[0],
            'tag_id' => $tag_id[0],
        ];
    }
}
