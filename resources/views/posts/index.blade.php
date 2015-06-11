@extends('layouts.master')

@section('title', $post_type)

@section('content')
<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('{{ asset('img/home-bg.jpg') }}')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1>{{ $post_type }}</h1>
                    <hr class="small">
                    <span class="subheading">瀏覽我所發表的文章</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            
            <div class="text-right" style="margin-bottom: 20px;">
                <a href="{{ route('posts.create') }}" class="btn btn-primary">新增</a>
            </div>

            @foreach($posts as $post)
            <div class="post-preview">
                <a href="{{ route('posts.show', $post->id) }}">
                    <h2 class="post-title">
                        {{ $post->title }}
                    </h2>
                    <h3 class="post-subtitle">
                        {{ $post->sub_title }}
                    </h3>
                </a>
                <p class="post-meta">發表於 {{ $post->created_at->toDateString() }}</p>
                
                {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
                <p class="text-right">
                    {!! Form::submit('刪除', ['class' => 'btn btn-danger']) !!}
                </p>
                {!! Form::close() !!}
            </div>
            <hr>
            @endforeach
            
            <!-- Pager -->
            <div class="text-center">
                {!! $posts->render() !!}
            </div>

        </div>
    </div>
</div>
@endsection