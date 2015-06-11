@extends('layouts.master')

@section('title', $post['title'])

@section('content')
<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('{{ asset('img/post-bg.jpg') }}')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-heading">
                    <h1>{{ $post->title }}</h1>
                    <h2 class="subheading">{{ $post->sub_title }}</h2>
                    <span class="meta">發表於 {{ $post->created_at->toDateString() }}</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Post Content -->
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                
                @include('layouts.partials.notification')
                
                <div class="text-right" style="margin-bottom: 20px;">
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">編輯</a>
                </div>

                <div style="margin-bottom: 50px;">
                    {!! $post->content !!}
                </div>

                <!-- Comments Form -->
                <div class="well">
                    <h4>留下您的想法：</h4>

                    @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>錯誤！</strong> 請檢查你填寫的資料
                    </div>
                    @endif

                    {!! Form::open(['route' => ['posts.comment', $post->id], 'method' => 'POST', 'role' => 'form']) !!}
                        <div class="form-group">
                            {!! Form::label('name', '名字：') !!}
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                            <p class="help-block text-danger">{{ $errors->first('name') }}</p>

                            {!! Form::label('email', 'Email：') !!}
                            {!! Form::email('email', null, ['class' => 'form-control']) !!}
                            <p class="help-block text-danger">{{ $errors->first('email') }}</p>

                            {!! Form::label('content', '留言：') !!}
                            {!! Form::textarea('content', null, ['row' => 3, 'class' => 'form-control']) !!}
                            <p class="help-block text-danger">{{ $errors->first('content') }}</p>
                        </div>
                        {!! Form::submit('送出', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>

                <hr>

                <!-- Comments -->
                @foreach($post->comments()->orderBy('created_at', 'desc')->get() as $comment)
                <div class="media">
                    <div class="media-body">
                        <h4 class="media-heading">
                            {{ $comment->name }} ({{ $comment->email}})
                            <small>{{ $comment->created_at->toDateString() }}</small>
                        </h4>
                        {{ $comment->content }}
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</article>
@endsection