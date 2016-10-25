@extends('app')

@section('content')
<div class="container-fluid page-title">
    <p class="page-title-text">記事の削除</p><!--title-->
</div>
<p>本当に削除しますか？</p>
<button type="button" class="btn btn-danger">はい</button>
<a href="/" class="btn btn-secondary">いいえ</a>
@endsection