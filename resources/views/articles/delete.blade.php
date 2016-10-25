@extends('app')

@section('content')
<p class="page-header">記事削除</p>
<p>本当に削除しますか？</p>
<button type="submit" class="btn btn-danger">はい</button>
<a href="/" class="btn btn-primary btn-xs">いいえ</a>
@endsection