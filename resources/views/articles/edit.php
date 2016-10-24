@extends('app')

@section('content')
<p class="page-header">記事編集</p>
{!! Form::open(['action' => ['ArticlesController@postEdit', $article->id]]) !!}
<div class="form-group">
    <label>タイトル</label>
    {!! Form::input('text', 'title', $article->title, ['required', 'class' => 'form-control']) !!}
</div>
<div class="form-group">
    <label>コメント</label>
    {!! Form::textarea('comment', $article->comment, ['required', 'class' => 'form-control']) !!}
</div>
<button type="submit" class="btn btn-primary">編集する</button>
<a href="/" class="btn btn-primary btn-xs">キャンセル</a>
{!! Form::close() !!}
@endsection