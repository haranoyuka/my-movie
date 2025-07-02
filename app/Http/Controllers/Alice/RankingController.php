<?php

namespace App\Http\Controllers\Alice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RankingController extends Controller
{
    public function look()
    {
        return view('alice.movie.ranking');
    }

    public function ranking(Request $request)
    {
        
        return redirect('movie/ranking');
    }
   
    //
}
