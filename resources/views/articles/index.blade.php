@extends('app')

@section('content')
<h3 class="text-middle">記事一覧</h3>
<div>
    <a href="/articles/new" class="btn btn-primary">新規作成</a>
</div>
@if (count($articles) >= 1)
    @foreach($articles as $article)
        <div class="panel panel-default">
            <div class="panel-heading">{{{ $article->title }}}</div>
            <div class="panel-body">{{{ $article->comment }}}</div>
            <div class ="panel-footer" style = "height: 55px">
                <div class="col-xs-3">投稿者: {{{ $article->posted_by }}}</div>
                <div class="col-xs-3">作成: {{{ $article->created_at }}}</div>
                <div class="col-xs-3">更新: {{{ $article->updated_at }}}</div>
                <div class="col-xs-3">
                    <a href="/articles/edit/{{{ $article->id }}}" class="btn btn-primary">編集</a>
                    <a href="/articles/delete/{{{ $article->id }}}" class="btn btn-danger">削除</a>
                </div>
            </div>
        </div>
    @endforeach
@else
    <p>投稿はありません。</p>
@endif
@endsection