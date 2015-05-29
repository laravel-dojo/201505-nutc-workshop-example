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
            
            @foreach(range(1, 5) as $number)
            <div class="post-preview">
                <a href="{{ route('posts.show', $number) }}">
                    <h2 class="post-title">
                        文章主標題 - {{ $number }}
                    </h2>
                    <h3 class="post-subtitle">
                        文章副標題
                    </h3>
                </a>
                <p class="post-meta">發表於 {{ date('Y-m-d')}}</p>
            </div>
            <hr>
            @endforeach
            
            <!-- Pager -->
            <div class="text-center">
                <ul class="pagination">
                    <li>
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</div>
@endsection