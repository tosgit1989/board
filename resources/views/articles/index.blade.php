@extends('app')

@section('content')
<div class="container-fluid page-title">
    <p class="page-title-text">トップページ</p><!--title-->
</div>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="bs-docs-section">

                <div><h3 class="text-middle">記事一覧</h3></div>
                <div><a href="/articles/new" class="btn btn-primary" style="position: fixed; top: 66px; right: 16px">記事を新規作成する</a></div>
                @if (count($articles) >= 1)
                    @foreach($articles as $article)
                        <div class="panel panel-default">
                            <div class="panel-heading"><strong>{{{ $article->title }}}</strong></div>
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

            </div>
        </div>
    </div>
</div>
@endsection