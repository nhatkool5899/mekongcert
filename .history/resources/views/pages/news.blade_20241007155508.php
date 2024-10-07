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
                    <div class="news-elementor">
                        <div class="news-inner">
                            <a href="{{route('news_details')}}" class="news-inner-img">
                                <img src="https://quatest3.com.vn/Content/UserImages/Hinh-anh-bai-viet/03-Tin-tuc/2024/Doan%20NSCL%20Dai%20Loan/Picture1.jpg" alt="tin-tuc">
                            </a>
                            <div class="news-home-time">18 Tháng Chín 2024</div>
                            <a href="{{route('news_details')}}" class="news-home-name">Đánh giá tác động của chính sách - công cụ đo lường tác động tiềm ẩn về thay đổi chính sách</a>
                            <div class="news-home-desc">
                                (VietQ.vn) - Báo cáo đánh giá tác động chính sách được xem là một công cụ dùng để phân tích, đo lường các tác động tiềm tàng (lợi, hại) của sự thay đổi về chính sách và đưa ra các phương án nhằm thực hiện sự thay đổi đó.     
                            </div>
                            <div class="news-readmore">
                                <a href="{{route('news_details')}}">Chi tiết</a>
                            </div>
                        </div>
                        <div class="news-inner">
                            <a href="{{route('news_details')}}" class="news-inner-img">
                                <img src="https://quatest3.com.vn/Content/UserImages/Hinh-anh-bai-viet/03-Tin-tuc/2024/ANF/P1160094.JPG" alt="tin-tuc">
                            </a>
                            <div class="news-home-time">18 Tháng Chín 2024</div>
                            <a href="{{route('news_details')}}" class="news-home-name">Đánh giá tác động của chính sách - công cụ đo lường tác động tiềm ẩn về thay đổi chính sách</a>
                            <div class="news-home-desc">
                                (VietQ.vn) - Báo cáo đánh giá tác động chính sách được xem là một công cụ dùng để phân tích, đo lường các tác động tiềm tàng (lợi, hại) của sự thay đổi về chính sách và đưa ra các phương án nhằm thực hiện sự thay đổi đó.     
                            </div>
                            <div class="news-readmore">
                                <a href="{{route('news_details')}}">Chi tiết</a>
                            </div>
                        </div>
                        <div class="news-inner">
                            <a href="{{route('news_details')}}" class="news-inner-img">
                                <img src="https://quatest3.com.vn/Content/UserImages/Hinh-anh-bai-viet/03-Tin-tuc/2024/DE/Picture2.jpg" alt="tin-tuc">
                            </a>
                            <div class="news-home-time">18 Tháng Chín 2024</div>
                            <a href="{{route('news_details')}}" class="news-home-name">Đánh giá tác động của chính sách - công cụ đo lường tác động tiềm ẩn về thay đổi chính sách</a>
                            <div class="news-home-desc">
                                (VietQ.vn) - Báo cáo đánh giá tác động chính sách được xem là một công cụ dùng để phân tích, đo lường các tác động tiềm tàng (lợi, hại) của sự thay đổi về chính sách và đưa ra các phương án nhằm thực hiện sự thay đổi đó.     
                            </div>
                            <div class="news-readmore">
                                <a href="{{route('news_details')}}">Chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <div class="wrapper-view">
                        <a href="#" class="view-all">Xem tất cả</a>
                    </div>
                </div>

                <div class="news-group">
                    <div class="about-title">
                        <h3>Tin khoa học</h3>
                        <div style="width:80px" class="line-title"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection