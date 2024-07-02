<?php

namespace Database\Factories;

use App\Models\Employer;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employer>
 */
class EmployerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name,
            'user_id' => User::factory(),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Employer $employer) {
            $logo = '/home/rimke/Desktop/slike/le-code.jpg';

            $employer->addMedia($logo)
                ->preservingOriginal()
                ->toMediaCollection('logos');
        });
    }
}
