<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoviesDb extends Model
{
    use HasFactory;

    protected $table = 'movies';
    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'vote_average','release_date', 'genres','poster_path',
    ];
}
