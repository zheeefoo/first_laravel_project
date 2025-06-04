<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts'; // Assuming you have a 'posts' table in your database
    protected $fillable = ['title', 'body'];
    //
}
