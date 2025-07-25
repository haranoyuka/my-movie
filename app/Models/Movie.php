<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $guarded = array('id');

    public static $rules = array(
        'title' => 'required',
        'genre' => 'required',
        'director' => 'required',
        'review' => 'required',
    );

}