<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $this->faker->addProvider(new \Faker\Provider\Fakecar($this->faker));
        return [
            "name" => $this->faker->unique()->vehicleBrand,
            "description" => $this->faker->unique()->vehicleModel,
            "created_at" => $this->faker->dateTimeThisDecade($timezone = "Europe/Amsterdam"),
            "updated_at" => $this->faker->dateTimeThisDecade($timezone = "Europe/Amsterdam")
        ];
    }
}
