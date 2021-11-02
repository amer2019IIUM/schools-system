<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Inquiry;

class InquiryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Inquiry::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'body' => $this->faker->word,
            'inquiryable_id' => $this->faker->numberBetween(-10000, 10000),
            'inquiryable_type' => $this->faker->word,
            'administrator_id' => $this->faker->numberBetween(-10000, 10000),
            'doable_id' => $this->faker->numberBetween(-10000, 10000),
            'doable_type' => $this->faker->numberBetween(-10000, 10000),
        ];
    }
}
