@extends('layouts.alice')
@section('title', '登録済み公開年の一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>公開年</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ route('alice.year.sort') }}" role="button" class="btn btn-primary">新規作成</a>
            </div>
            <div class="col-md-8">
                <form action="{{ route('alice.year.index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">タイトル</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cond_title" value="{{ $cond_title }}">
                        </div>
                        <div class="col-md-2">
                            @csrf
                            <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="10%">ID</th>
                                <th width="20%">公開年</th>
                                <th width="20%">タイトル</th>
                                <th width="20%">監督</th>
                                <th width="20%">主演</th>
                                <th width="50%">あらすじ</th>
                                <th width="10%">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $news)
                                <tr>
                                    <th>{{ $year->id }}</th>
                                    <td>{{ Str::limit($year->year, 100) }}</td>
                                    <td>{{ Str::limit($year->title, 100) }}</td>
                                    <td>{{ Str::limit($year->director, 100) }}</td>
                                    <td>{{ Str::limit($year->starring, 100) }}</td>
                                    <td>{{ Str::limit($year->synopsis, 250) }}</td>
                                    <td>
                                        <div>
                                            <a href="{{ route('alice.year.edit', ['id' => $year->id]) }}">編集</a>
                                        </div>
                                        <div>
                                            <a href="{{ route('alice.year.delete', ['id' => $year->id]) }}">削除</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection