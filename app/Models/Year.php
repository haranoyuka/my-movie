<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    public static $rules = array(
        'year' => 'required',
        'title' => 'required',
        'director' => 'required',
        'starring' => 'required',
        'synopsis' => 'required',
    );

}
