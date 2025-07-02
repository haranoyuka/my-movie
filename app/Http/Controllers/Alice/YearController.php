<?php

namespace App\Http\Controllers\Alice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class YearController extends Controller
{
    public function sort()
    {
        return view('alice.movie.year');
    }

    public function year(Request $request)
    {
        // admin/news/createにリダイレクトする
        return redirect('movie/year');
    }
    //
}
