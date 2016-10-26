@extends('app')

@section('content')
<div class="container-fluid page-title">
    <p class="page-title-text">記事の新規作成</p><!--title-->
</div>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="bs-docs-section">

                {!! Form::open() !!}
                <div class="form-group">
                    <label>投稿者</label>
                    {!! Form::input('text', 'posted_by', null, ['required', 'class' => 'form-control', 'placeholder' => '投稿者を入力']) !!}
                </div>
                <div class="form-group">
                    <label>タイトル</label>
                    {!! Form::input('text', 'title', null, ['required', 'class' => 'form-control', 'placeholder' => 'タイトルを入力']) !!}
                </div>
                <div class="form-group">
                    <label>コメント</label>
                    {!! Form::textarea('comment', null, ['required', 'class' => 'form-control', 'placeholder' => 'コメントを入力']) !!}
                </div>
                <button type="submit" class="btn btn-primary">投稿する</button>
                <a href="/" class="btn" style="background-color: silver; color: black">キャンセル</a>
                {!! Form::close() !!}

            </div>
        </div>
    </div>
</div>
@endsection