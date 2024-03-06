<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Review;
use Illuminate\Database\Seeder;
use App\Models\Book;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        Book::factory(33)->create()->each(function ($book) {
            $numReviews = random_int(5, 30);
            Review::factory()->count($numReviews)
                ->good()
                ->avarage()
                ->for($book)
                ->create();
        });
    }
}
