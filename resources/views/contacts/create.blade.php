@extends('layouts.master')

@section('title', '聯絡本站')

@section('content')
<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('{{ asset('img/contact-bg.jpg') }}')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="page-heading">
                    <h1>聯絡本站</h1>
                    <hr class="small">
                    <span class="subheading">有任何問題嗎？歡迎留言給我們！</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <p>請填寫以下表單，我們會儘快回覆您的！</p>
            <form name="sentMessage" id="contactForm" novalidate>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>姓名</label>
                        <input type="text" class="form-control" placeholder="姓名" id="name" required data-validation-required-message="請輸入您的姓名">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>電子郵件</label>
                        <input type="email" class="form-control" placeholder="電子郵件" id="email" required data-validation-required-message="請輸入您的電子郵件">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>想說的話</label>
                        <textarea rows="5" class="form-control" placeholder="想說的話" id="message" required data-validation-required-message="請輸入想說的話"></textarea>
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