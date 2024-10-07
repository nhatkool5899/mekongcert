@extends('layouts.page')

@section('banner')
<div class="banner">
    <div class="banner-page">
        <img src="{{asset('front-end/assets/imgs/banner-news.jpg')}}" alt="banner-news">
        <div class="container">
            <div class="banner-breadcrumbs">
                <h2 class="breadcrumbs-title">Tin tức</h2>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
    <section class="section">
        <div class="container">
            <div class="wrapper-news">
                <div class="news-group">
                    <div class="about-title">
                        <h3>Sự kiện</h3>
                        <div class="line-title"></div>
                    </div>
                </div>

                <div class="news-group">
                    <div class="about-title">
                        <h3>Tin khoa học</h3>
                        <div class="line-title"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection