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

        // news/index.blade.php ファイルを渡している
        // また View テンプレートに headline、 posts、という変数を渡している
        return view('ranking.index', ['headline' => $headline, 'posts' => $posts]);
    }
    //
}
