<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Ranking;

class RankingController extends Controller
{
    public function index(Request $request)
    {
        $posts = Ranking::all()->sortByDesc('updated_at');

        if (count($posts) > 0) {
            $headline = $posts->shift();
        } else {
            $headline = null;
        }

        return view('alice.ranking.index', ['headline' => $headline, 'posts' => $posts]);
    }
    //
}
