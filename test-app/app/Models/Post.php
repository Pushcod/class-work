<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //Связь с таблицей - posts
    protected $table = 'posts';


    //Указывает с какими полями можем работать
    protected $fillable = [
        'title',
        'text',
        'image'
    ];
}
