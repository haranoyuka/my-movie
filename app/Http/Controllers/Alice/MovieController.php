<?php

namespace App\Http\Controllers\Alice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\History;
use Carbon\Carbon;

class MovieController extends Controller
{
    public function add()
    {
        return view('alice.movie.top');
    }

    public function set()
    {
        return view('alice.movie.create');
    }
    public function create(Request $request)
    {
        // dd("createが呼ばれた");//
        // dd($request);
        $this->validate($request, Movie::$rules);
        // return redirect('movie/create');


        $movie = new Movie;
        $form = $request->all();

        
        if (isset($form['image'])) {
            $path = $request->file('image')->store('public/image');
            $movie->image_path = basename($path);
        } else {
            $movie->image_path = "";
        }

        // フォームから送信されてきた_tokenを削除する
        unset($form['_token']);
        // フォームから送信されてきたimageを削除する
        unset($form['image']);
        // dd($form);

        // データベースに保存する
        $movie->fill($form);
        $movie->save();

        return redirect('movie/create');
    }

    public function index(Request $request)
    {
        $cond_title = $request->cond_title;
        if ($cond_title != null) {
            // 検索されたら検索結果を取得する
            $posts = Movie::where('title', $cond_title)->get();
        } else {
            // それ以外はすべてのニュースを取得する
            $posts = Movie::all();
        }
        return view('alice.movie.index', ['posts' => $posts, 'cond_title' => $cond_title]);
    }

    // 以下を追記
    public function edit(Request $request)
    {
        // News Modelからデータを取得する
        $movie = Movie::find($request->id);
        if (empty($movie)) {
            abort(404);
        }
        return view('alice.movie.edit', ['movie_form' => $movie]);
    }

    public function update(Request $request)
    {
        // Validationをかける
        $this->validate($request, movie::$rules);
        // News Modelからデータを取得する
        $movie = Movie::find($request->id);
        // 送信されてきたフォームデータを格納する
        $movie = $request->all();

        if ($request->remove == 'true') {
            $movie_form['image_path'] = null;
        } elseif ($request->file('image')) {
            $path = $request->file('image')->store('public/image');
            $movie_form['image_path'] = basename($path);
        } else {
            $movie_form['image_path'] = $movie->image_path;
        }

        unset($movie_form['image']);
        unset($movie_form['remove']);
        unset($movie_form['_token']);

        // 該当するデータを上書きして保存する
        $movie->fill($movie_form)->save();

        $history = new History();
        $history->movie_id = $movie->id;
        $history->edited_at = Carbon::now();
        $history->save();

        return redirect('alice/movie');
    }

    public function delete(Request $request)
    {
        // 該当するNews Modelを取得
        $news = Movie::find($request->id);

        // 削除する
        $movie->delete();

        return redirect('alice/movie');
    }
    // 追記ここまで
    
}