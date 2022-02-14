<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReplyFactory extends Factory
{
    /**
     * Define the model's default state. Thread::factory()->count(50)->create();
     *Thread::factory()->count(50)->create();
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'thread_id' => \App\Models\Thread::factory(),
            'body' => $this->faker->paragraph(),
        ];
    }
}
