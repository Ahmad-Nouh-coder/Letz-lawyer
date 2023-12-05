<?php

namespace Database\Factories;

use Faker\Guesser\Name;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lawyer>
 */
class LawyerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company' => $this->faker->name(),
            'specialty' => [2, 3, 15, 5, 6, 12, 18, 30, 7, 19, 1, 0],   // this gives 10 valid entries, the other and an empty one
            'location' => $this->faker->location(),
            'languages' => ['English', 'Spanish', 'Luxembourgish'], // example of the string
            'email' => $this->faker->email(),
            'phone' => $this->faker->phoneNumber(),
            'logo' => $this->faker->imageUrl(),
            'description' => $this->faker->paragraphs(6, true),     // paragraphs for the about me
            'website' => $this->faker->url(),
        ];
    }
}
