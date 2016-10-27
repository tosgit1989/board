@extends('app')

@section('content')
    <div class="container-fluid page-title">
        <p class="page-title-text">記事の削除</p><!--title-->
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="bs-docs-section">

                    <div class="panel panel-default">
                        <div class="panel-heading"><strong>{{{ $article->title }}}</strong></div>
                        <div class="panel-body">{{{ $article->comment }}}</div>
                        <div class ="panel-footer" style = "height: 55px">
                            <div class="col-xs-3">投稿者: {{{ $article->posted_by }}}</div>
                            <div class="col-xs-3">作成: {{{ $article->created_at }}}</div>
                            <div class="col-xs-3">更新: {{{ $article->updated_at }}}</div>
                        </div>
                    </div>

                    <p>本当に削除しますか？</p>
                    {!! Form::open(['action' => ['ArticlesController@postDestroy', $article->id], 'style' => 'display: inline']) !!}
                    <button type="submit" class="btn btn-danger">はい</button>
                    {!! Form::close() !!}
                    <a href="/" class="btn" style="background-color: silver; color: black">いいえ</a>

                </div>
            </div>
        </div>
    </div>
@endsection