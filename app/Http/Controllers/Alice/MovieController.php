<?php

namespace App\Http\Controllers\Alice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function add()
    {
        return view('alice.movie.top');
    }

    public function create()
    {
        return view('alice.movie.create');
    }

    public function set(Request $request)
    {
        
        return redirect('alice/movie/create');
    }
}
