<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Year;

class YearController extends Controller
{
   
    public function index(Request $request)
    {
        $cond_title = $request->cond_title;
        if ($cond_title != null) {
            // 検索されたら検索結果を取得する
            $posts = Year::where('title', $cond_title)->get();
        } else {
            // それ以外はすべてのニュースを取得する
            $posts = Year::all();
            $cond_title = "";
        }
        return view('alice.year.index', ['posts' => $posts, 'cond_title' => $cond_title]);
    }
}
