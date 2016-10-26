@extends('app')

@section('content')
<div class="container-fluid page-title">
    <p class="page-title-text">記事の編集</p><!--title-->
</div>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="bs-docs-section">

                {!! Form::open(['action' => ['ArticlesController@postEdit', $article->id]]) !!}
                <div class="form-group">
                    <label>投稿者</label>
                    {!! Form::input('text', 'posted_by', $article->posted_by, ['required', 'class' => 'form-control', 'placeholder' => '投稿者を入力']) !!}
                </div>
                <div class="form-group">
                    <label>タイトル</label>
                    {!! Form::input('text', 'title', $article->title, ['required', 'class' => 'form-control', 'placeholder' => 'タイトルを入力']) !!}
                </div>
                <div class="form-group">
                    <label>コメント</label>
                    {!! Form::textarea('comment', $article->comment, ['required', 'class' => 'form-control', 'placeholder' => 'コメントを入力']) !!}
                </div>
                <button type="submit" class="btn btn-primary">編集する</button>
                <a href="/" class="btn btn-secondary">キャンセル</a>
                {!! Form::close() !!}

            </div>
        </div>
    </div>
</div>
@endsection