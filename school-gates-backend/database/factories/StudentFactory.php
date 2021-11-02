<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Student;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'passport' => $this->faker->word,
            'teams_email' => $this->faker->word,
            'gender' => $this->faker->randomLetter,
            'password' => $this->faker->password,
            'grade_id' => $this->faker->numberBetween(-10000, 10000),
            'city' => $this->faker->city,
            'phone_number_1' => $this->faker->numberBetween(-10000, 10000),
            'phone_number_2' => $this->faker->numberBetween(-10000, 10000),
            'platform_report' => $this->faker->text,
            'personal_email' => $this->faker->word,
        ];
    }
}
