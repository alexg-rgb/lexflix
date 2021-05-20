<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    use HasFactory;

    protected $fillable = [
        //if id is not autoincrement then add 'id'
        'title',
        'vote_average',
        'release_date',
        'genres',
        'poster_path'
    ];

    protected $table = 'movies';
}
