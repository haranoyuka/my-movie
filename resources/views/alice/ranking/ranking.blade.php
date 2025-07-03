@extends('layouts.alice')
@section('title', '作品ランキング')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>作品ランキング</h2>
                <form action="{{ route('movie.ranking') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">順位</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="ranking" value="{{ old('ranking') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">タイトル</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                    <label class="col-md-2">評価</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="review" value="{{ old('review') }}">
                        </div>       
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>
                    @csrf
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection