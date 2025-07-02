@extends('layouts.alice')
@section('title', '映画公開年')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>映画公開年</h2>
                <form action="{{ route('movie.year') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">公開年</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="year" value="{{ old('year') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">タイトル</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">監督</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="director" value="{{ old('director') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">主演</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="starring" value="{{ old('starring') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">あらすじ</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="synopsis" rows="20">{{ old('synopsis') }}</textarea>
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