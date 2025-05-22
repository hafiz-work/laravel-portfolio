<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Alumni;

class AlumniFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Alumni::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->safeEmail(),
            'phone_number' => fake()->phoneNumber(),
            'date_of_birth' => fake()->date(),
            'gender' => fake()->randomElement(["male","female"]),
            'ic_no' => fake()->word(),
            'is_active' => fake()->boolean(),
            'avatar' => fake()->word(),
            'info' => fake()->word(),
            'add_unit' => fake()->word(),
            'add_level' => fake()->word(),
            'add_block' => fake()->word(),
            'address_1' => fake()->word(),
            'address_2' => fake()->word(),
            'postcode' => fake()->postcode(),
            'city' => fake()->city(),
            'state' => fake()->word(),
        ];
    }
}
