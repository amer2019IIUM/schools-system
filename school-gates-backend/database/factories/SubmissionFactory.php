<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Submission;

class SubmissionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Submission::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(4),
            'student_id' => $this->faker->numberBetween(-10000, 10000),
            'type' => $this->faker->randomElement(["assignment","submission"]),
            'path' => $this->faker->word,
            'assignment_id' => $this->faker->numberBetween(-10000, 10000),
        ];
    }
}
