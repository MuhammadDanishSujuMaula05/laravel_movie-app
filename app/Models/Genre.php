<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $genres = [
        [
            'id' => 1,
            'title' => 'Jojo Bizarre Adventure',
           
            'genre' => 'Shounen',
            'synopsis' => 'Jojos Bizarre Adventure is a story about the Joestar family, who are possessed with intense psychic strength.',
        ],

        [
            'id' => 2,
            'title' => 'Noragami',
           
            'genre' => 'Drama',
            'synopsis' => 'Noragami is an anime series that follows a poor deity named Yato, who desires to become a famous god.',
        ],
        
        [
            'id' => 3,
            'title' => 'Wind Breaker',
          
            'genre' => 'School',
            'synopsis' => 'Haruka Sakura wants nothing to do with weaklings—hes only interested in the strongest of the strong.',
        ],
    ];

    public function getAllGenre()
    {
        return $this-> genres;
}
}
