<?php

namespace Database\Factories;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Students>
 */
class StudentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'phone' => Str::random(11),
            'cnic' => Str::random(13),
            'course_id' => rand(1,4), // password
            'grade_id' => rand(1,4),
            "created_at" => now(),
            "updated_at" => now()
        ];
    }
}
