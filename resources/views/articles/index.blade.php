@extends('app')

@section('content')
<h2 class="page-header">記事一覧</h2>
<div>
    <a href="/articles/new" class="btn btn-primary">新規作成</a>
</div>
@if (count($articles) >= 1)
    <table class="table">
        <thead>
        <tr>
            <th>タイトル</th>
            <th>コメント</th>
            <th>投稿者</th>
            <th>作成日時</th>
            <th>更新日時</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($articles as $article)
        <tr>
            <td>{{{ $article->title }}}</td>
            <td>{{{ $article->comment }}}</td>
            <td>{{{ $article->posted_by }}}</td>
            <td>{{{ $article->created_at }}}</td>
            <td>{{{ $article->updated_at }}}</td>
            <td>
                <a href="/articles/edit/{{{ $article->id }}}" class="btn btn-primary btn-xs">編集</a>
                <a href="/articles/delete/{{{ $article->id }}}" class="btn btn-danger btn-xs">削除</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@else
    <p>投稿はありません。</p>
@endif
@endsection