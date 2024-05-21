<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Movie extends Model
{
    use HasFactory;

    protected $movies = [
        [
            'id' => 1,
            'title' => 'Jojo Bizarre Adventure',
            'poster' => 'movie-01.jpg',
            'genre' => 'Shounen',
            'synopsis' => 'Jojos Bizarre Adventure is a story about the Joestar family, who are possessed with intense psychic strength.',
        ],
        [
            'id' => 2,
            'title' => 'Noragami',
            'poster' => 'movie-02.jpg',
            'genre' => 'Drama',
            'synopsis' => 'Noragami is an anime series that follows a poor deity named Yato, who desires to become a famous god.',
        ],
        [
            'id' => 3,
            'title' => 'Wind Breaker',
            'poster' => 'movie-03.jpg',
            'genre' => 'School',
            'synopsis' => 'Haruka Sakura wants nothing to do with weaklings—hes only interested in the strongest of the strong.',
        ],
        [
            'id' => 4,
            'title' => 'Spongebob',
            'poster' => 'spg1.jpg',
            'genre' => 'Animation',
            'synopsis' => 'Kisah dalam SpongeBob Squarepants berpusat pada kehidupan makhluk laut di kota Bikini Bottom, nama yang diambil dari bebatuan karang Bikini Atoll di Samudera Pasifik.',
        ],
        [
            'id' => 5,
            'title' => 'Real Steel',
            'poster' => 'real-01.jpg',
            'genre' => 'Action',
            'synopsis' => 'Real Steel membayangkan masa depan yang dekat ketika petinju manusia digantikan oleh robot. Mengapa tidak? Pertandingan antara mesin robot pertarungan kecil cukup populer untuk ditayangkan di televisi, tetapi dalam Real Steel, robot-robot ini adalah mesin yang menjulang tinggi dan dikendalikan komputer dengan gerak kaki yang gesit dan keseimbangan naluriah. (Di dunia nyata, bot bisa menjadi tidak berdaya di punggungnya, seperti kura-kura.) Harus dikatakan juga bahwa dalam warna dan desain, robot Real Steel cukup glamor dan futuristik-retro untuk berpose di sampul depan. Kisah Ajaib yang Mendebarkan.',
        ],
    ];

    public function getAllMovies()
    {
        return $this->movies;
    }
}