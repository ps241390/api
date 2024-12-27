<?php

namespace Database\Seeders;

use App\Models\Film;
use Illuminate\Database\Seeder;

class FilmSeeder extends Seeder
{
    public function run()
    {
        $films = [
            [
                'title' => 'The Shawshank Redemption',
                'description' => 'Over the course of several years, two convicts form a friendship, seeking consolation and, eventually, redemption through basic compassion.',
                'release_year' => 1994,
                'director' => 'Frank Darabont',
                'rating' => 9.3,
                'duration' => 142
            ],
            [
                'title' => 'The Godfather',
                'description' => 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.',
                'release_year' => 1972,
                'director' => 'Francis Ford Coppola',
                'rating' => 9.2,
                'duration' => 175
            ],
            [
                'title' => 'Inception',
                'description' => 'A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a C.E.O.',
                'release_year' => 2010,
                'director' => 'Christopher Nolan',
                'rating' => 8.8,
                'duration' => 148
            ],
        ];

        foreach ($films as $film) {
            Film::create($film);
        }
    }
}
