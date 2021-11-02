<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Announcement;

class AnnouncementFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Announcement::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'body' => $this->faker->text,
            'path' => $this->faker->word,
            'type' => $this->faker->randomElement(["examinations schedule","general","meeting"]),
            'teacher_id' => $this->faker->numberBetween(-10000, 10000),
        ];
    }
}
