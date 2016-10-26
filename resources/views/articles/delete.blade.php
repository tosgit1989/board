@extends('app')

@section('content')
<div class="container-fluid page-title">
    <p class="page-title-text">記事の削除</p><!--title-->
</div>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="bs-docs-section">

                <p>本当に削除しますか？</p>
                <a href="/articles/delete/{{{ $article->id }}}" class="btn btn-danger">はい</a>
                <a href="/" class="btn" style="background-color: silver; color: black">いいえ</a>

            </div>
        </div>
    </div>
</div>
@endsection