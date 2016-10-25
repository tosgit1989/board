@extends('app')

@section('content')
<p class="page-header">記事投稿</p>
{!! Form::open() !!}
<div class="form-group">
    <label>投稿者</label>
    {!! Form::input('text', 'posted_by', null, ['required', 'class' => 'form-control']) !!}
</div>
<div class="form-group">
    <label>タイトル</label>
    {!! Form::input('text', 'title', null, ['required', 'class' => 'form-control']) !!}
</div>
<div class="form-group">
    <label>コメント</label>
    {!! Form::textarea('comment', null, ['required', 'class' => 'form-control']) !!}
</div>
<button type="submit" class="btn btn-primary">投稿する</button>
<a href="/" class="btn btn-primary btn-xs">キャンセル</a>
{!! Form::close() !!}
@endsection