<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->numberBetween(1, 4),
            'category_id' => fake()->numberBetween(1, 5),
            'isbn' => fake()->isbn13(),
            'title' => fake()->words(3, true),
            'subtitle' => fake()->userName(),
            'author' => fake()->name,
            'image' => fake()->imageUrl(),
            'file_pdf' => fake()->file(storage_path('app\public\pdfs'), public_path('storage\site'), false),
            'publisher' => fake()->name,
            'pages' => fake()->numberBetween(1, 1000),
            'description' => fake()->paragraphs(3, true),
        ];
    }
}
