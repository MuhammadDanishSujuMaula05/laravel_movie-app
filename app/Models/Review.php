<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $reviews = [
        [
            'id' => 1,
            'movie' => 'Jojo Bizarre Adventure',
            'user'=> 'Danish',
            'rating'=> '5/10',
            'date' => '20 May 2024',
        ],
        [
            'id' => 2,
            'movie' => 'Noragami',
            'user'=> 'Danish',
            'rating'=> '4/10',
            'date' => '20 May 2024',
        ],
        [
            'id' => 3,
            'movie' => 'Wind Breaker',
            'user'=> 'Danish',
            'rating'=> '5,5/10',
            'date' => '20 May 2024',
        ],
        [
            'id' => 4,
            'movie' => 'Spongebob',
            'user'=> 'Danish',
            'rating'=> '8/10',
            'date' => '20 May 2024',
        ],
        [
            'id' => 5,
            'movie' => 'Real Steel',
            'user'=> 'Danish',
            'rating'=> '9,5/10',
            'date' => '20 May 2024',
        ],
       
    ];

    public function getAllreview()
    {
        return $this-> reviews;
}
}
