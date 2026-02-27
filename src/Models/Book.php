<?php

namespace De\BooksCrud\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';

    protected $fillable = [
        'title',
        'author',
        'price',
        'published_year'
    ];
}