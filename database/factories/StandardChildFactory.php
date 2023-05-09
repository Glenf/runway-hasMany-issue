<?php

namespace Database\Factories;

use App\Models\StandardParent;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StandardChild>
 */
class StandardChildFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'standard_parent_id' => StandardParent::factory()->create()->id,
            'name' => $this->faker->sentence(2),
        ];
    }
}
