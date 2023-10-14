<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image' => $this->faker->image('public/storage/images', 640, 480, null, false),
            'name' => $this->faker->company(),
            'email'=> $this->faker->companyEmail(),
            'address'=> $this->faker->address(),
        ];
    }
}
