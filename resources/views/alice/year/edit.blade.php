@extends('layouts.alice')
@section('title', '公開年の編集')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>公開年編集</h2>
                <form action="{{ route('alice.year.update') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2" for="ranking">公開年</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="year" value="{{ $year_form->year }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="title">タイトル</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ $ryear_form->title }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="director">監督</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="director" value="{{ $year_form->director }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="starring">主演</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="starring" value="{{ $year_form->starring }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="synopsis">あらすじ</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="synopsis" rows="20">{{ $year_form->synopsis }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="image">画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                            <div class="form-text text-info">
                                設定中: {{ $year_form->image_path }}
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="remove" value="true">画像を削除
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="hidden" name="id" value="{{ $year_form->id }}">
                            @csrf
                            <input type="submit" class="btn btn-primary" value="更新">
                        </div>
                    </div>
                </form>
                <div class="row mt-5">
                    <div class="col-md-4 mx-auto">
                        <h2>編集履歴</h2>
                        <ul class="list-group">
                            @if ($year_form->yearhistories != null)
                                @foreach ($year_form->yearhistories as $history)
                                    <li class="list-group-item">{{ $history->edited_at }}</li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection