<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\failed_job>
 */
class failed_jobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        
        return [
            'uuid' => $this->faker->word,
            'connection' => $this->faker->sentence(),
            'queue' => $this->faker->word,
            'payload' => $this->faker->text,
            'exception' => $this->faker->text,
            'failed_at' => $this->faker->dateTime,
        ];
    }
}
