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
            <p>請依以下格式輸入</p>
            <form name="sentMessage" id="contactForm" novalidate>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>文章標題</label>
                        <input type="text" class="form-control" placeholder="文章標題" id="name" required data-validation-required-message="請輸入文章標題">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>文章內容</label>
                        <textarea rows="5" class="form-control" placeholder="文章內容" id="message" required data-validation-required-message="請輸入文章內容"></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <br>
                <div id="success"></div>
                <div class="row">
                    <div class="form-group col-xs-12">
                        <button type="submit" class="btn btn-default">送出</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection