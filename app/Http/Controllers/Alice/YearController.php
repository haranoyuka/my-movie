<?php

namespace App\Http\Controllers\Alice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Year;

class YearController extends Controller
{
    public function sort()
    {
        return view('alice.year.year');
    }

    public function year(Request $request)
    {
        
        $this->validate($request, Year::$rules);

        $year = new Year;
        $form = $request->all();

        // フォームから画像が送信されてきたら、保存して、$news->image_path に画像のパスを保存する
        if (isset($form['image'])) {
            $path = $request->file('image')->store('public/image');
            $year->image_path = basename($path);
        } else {
            $year->image_path = null;
        }

        unset($form['_token']);
        // フォームから送信されてきたimageを削除する
        unset($form['image']);

        // データベースに保存する
        $year->fill($form);
        $year->save();

        return redirect('movie/year');
    }

    public function index(Request $request)
    {
        $cond_title = $request->cond_title;
        if ($cond_title != null) {
            // 検索されたら検索結果を取得する
            $posts = Year::where('title', $cond_title)->get();
        } else {
            // それ以外はすべてのニュースを取得する
            $posts = Year::all();
        }
        return view('alice.year.index', ['posts' => $posts, 'cond_title' => $cond_title]);
    }
   
    public function edit(Request $request)
    {
        // News Modelからデータを取得する
        $year = Year::find($request->id);
        if (empty($year)) {
            abort(404);
        }
        return view('alice.year.edit', ['year_form' => $year]);
    }

    public function update(Request $request)
    {
        // Validationをかける
        $this->validate($request, Year::$rules);
        // News Modelからデータを取得する
        $year = Year::find($request->id);
        // 送信されてきたフォームデータを格納する
        $year_form = $request->all();

        if ($request->remove == 'true') {
            $year_form['image_path'] = null;
        } elseif ($request->file('image')) {
            $path = $request->file('image')->store('public/image');
            $year_form['image_path'] = basename($path);
        } else {
            $year_form['image_path'] = $year->image_path;
        }

        unset($year_form['image']);
        unset($year_form['remove']);
        unset($year_form['_token']);

        // 該当するデータを上書きして保存する
        $year->fill($year_form)->save();

        return redirect('alice/year');
    }

    public function delete(Request $request)
    {
        // 該当するNews Modelを取得
        $year = Year::find($request->id);

        // 削除する
        $year->delete();

        return redirect('alice/year/');
    }
    //
}
