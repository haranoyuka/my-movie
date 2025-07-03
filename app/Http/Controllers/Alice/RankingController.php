<?php

namespace App\Http\Controllers\Alice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Ranking;

class RankingController extends Controller
{
    public function look()
    {
        return view('alice.ranking.ranking');
    }

    public function ranking(Request $request)
    {
        $this->validate($request, Ranking::$rules);

        $ranking = new Ranking;
        $form = $request->all();

        // フォームから画像が送信されてきたら、保存して、$news->image_path に画像のパスを保存する
        if (isset($form['image'])) {
            $path = $request->file('image')->store('public/image');
            $ranking->image_path = basename($path);
        } else {
            $ranking->image_path = null;
        }

        unset($form['_token']);
        // フォームから送信されてきたimageを削除する
        unset($form['image']);

        // データベースに保存する
        $ranking->fill($form);
        $ranking->save();
        
        return redirect('movie/ranking');
    }

    public function index(Request $request)
    {
        $cond_title = $request->cond_title;
        if ($cond_title != null) {
            // 検索されたら検索結果を取得する
            $posts = Ranking::where('title', $cond_title)->get();
        } else {
            // それ以外はすべてのニュースを取得する
            $posts = Ranking::all();
        }
        return view('alice.ranking.index', ['posts' => $posts, 'cond_title' => $cond_title]);
    }

    public function edit(Request $request)
    {
        // News Modelからデータを取得する
        $news = Ranking::find($request->id);
        if (empty($ranking)) {
            abort(404);
        }
        return view('alice.ranking.edit', ['ranking_form' => $ranking]);
    }

    public function update(Request $request)
    {
        // Validationをかける
        $this->validate($request, Ranking::$rules);
        // News Modelからデータを取得する
        $ranking = Ranking::find($request->id);
        // 送信されてきたフォームデータを格納する
        $ranking_form = $request->all();

        if ($request->remove == 'true') {
            $ranking_form['image_path'] = null;
        } elseif ($request->file('image')) {
            $path = $request->file('image')->store('public/image');
            $ranking_form['image_path'] = basename($path);
        } else {
            $ranking_form['image_path'] = $ranking->image_path;
        }

        unset($ranking_form['image']);
        unset($ranking_form['remove']);
        unset($ranking_form['_token']);

        // 該当するデータを上書きして保存する
        $ranking->fill($ranking_form)->save();

        $rankinghistory = new RankingHistory();
        $rankinghistory->ranking_id = $ranking->id;
        $rankinghistory->edited_at = Carbon::now();
        $rankinghistory->save();

        return redirect('alice/ranking');
    }
   
    public function delete(Request $request)
    {
        // 該当するNews Modelを取得
        $ranking = Ranking::find($request->id);

        // 削除する
        $ranking_form->delete();

        return redirect('alice/ranking/');
    }
    //
}
