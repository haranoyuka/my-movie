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

    public function set()
    {
        return view('alice.movie.create');
    }
    public function create(Request $request)
    {
        $this->validate($request, Movie::$rules);
        return redirect('alice/movie/create');

        $movie = new Movie;
        $form = $request->all();

        
        if (isset($form['image'])) {
            $path = $request->file('image')->store('public/image');
            $news->image_path = basename($path);
        } else {
            $movie->image_path = null;
        }

        // フォームから送信されてきた_tokenを削除する
        unset($form['_token']);
        // フォームから送信されてきたimageを削除する
        unset($form['image']);

        // データベースに保存する
        $movie->fill($form);
        $movie->save();
    }
    
    public function academy()
    {
        return redirect('alice/movie/academy');
    }

    public function ranking()
    {
        return redirect('alice/movie/ranking');
    }
}

