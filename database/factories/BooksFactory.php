<?php

namespace Database\Factories;

use App\Models\Books;
use App\Models\Bookshop;
use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Books>
 */
class BooksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'author' => $this->faker->firstName(),
            'body' => $this->faker->paragraph(),
            'bookshop_id' => Bookshop::factory(),
        ];
    }
}
