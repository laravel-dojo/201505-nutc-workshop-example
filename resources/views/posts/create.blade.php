@extends('layouts.master')

@section('title', '新增文章')

@section('content')
<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('{{ asset('img/post-bg.jpg') }}')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-heading">
                    <h1>新增文章</h1>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

            @include('layouts.partials.notification')

            <p>請依以下格式輸入</p>
            {!! Form::open(['route' => 'posts.store', 'method' => 'POST', 'id' => 'contactForm', 'name' => 'sentMessage', 'novalidate']) !!}
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        {!! Form::label('title', '文章標題') !!}
                        {!! Form::text('title', null, ['id' => 'title', 'class' => 'form-control', 'placeholder' => '文章標題', 'data-validation-required-message' => '請輸入文章標題', 'required']) !!}
                        <p class="help-block text-danger">{{ $errors->first('title') }}</p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        {!! Form::label('sub_title', '文章副標題') !!}
                        {!! Form::text('sub_title', null, ['id' => 'sub_title', 'class' => 'form-control', 'placeholder' => '文章副標題', 'data-validation-required-message' => '請輸入文章副標題', 'required']) !!}
                        <p class="help-block text-danger">{{ $errors->first('sub_title') }}</p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        {!! Form::label('content', '文章內容') !!}
                        {!! Form::textarea('content', null, ['id' => 'content', 'row' => 5, 'class' => 'form-control', 'placeholder' => '文章內容', 'data-validation-required-message' => '請輸入文章內容', 'required']) !!}
                        <p class="help-block text-danger">{{ $errors->first('content') }}</p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <p style="font-size: 1.5em; color: #555; margin-bottom: 0">熱門文章？</p>
                        {!! Form::label('is_hot', '熱門文章') !!}
                        是：{!! Form::radio('is_hot', 1, true, ['id' => 'is_hot']) !!}
                        否：{!! Form::radio('is_hot', 0, false, ['id' => 'is_hot']) !!}
                        <p class="help-block text-danger">{{ $errors->first('is_hot') }}</p>
                    </div>
                </div>
                <br>
                <div id="success"></div>
                <div class="row">
                    <div class="form-group col-xs-12">
                        {!! Form::submit('送出', ['class' => 'btn btn-default']) !!}
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection