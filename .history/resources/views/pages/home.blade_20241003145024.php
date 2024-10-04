@extends('layouts.page')

@section('banner')
<div class="banner">
    <div class="swiper banner-swiper">
        <div class="swiper-wrapper banner-wrapper">
            <div class="swiper-slide">
                <div class="banner-item">
                    <img src="{{asset('front-end/assets/imgs/banner/banner-1.jpg')}}" alt="banner">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="banner-item">
                    <img src="{{asset('front-end/assets/imgs/banner/banner-2.jpg')}}" alt="banner">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="banner-item">
                    <img src="{{asset('front-end/assets/imgs/banner/banner-3.jpg')}}" alt="banner">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="banner-item">
                    <img src="{{asset('front-end/assets/imgs/banner/banner-4.jpg')}}" alt="banner">
                </div>
            </div>
        </div>
        <div class="autoplay-progress">
            <svg viewBox="0 0 48 48">
                <circle cx="24" cy="24" r="20"></circle>
            </svg>
            <span></span>
        </div>
    </div>
    <div class="banner-context">
        <div class="banner-title">Tin mới:</div>
        <div class="banner-text">
            <ul class="banner-text-list">
                <li class="banner-text-item">
                    <a href="#" class="banner-text-link" target="_blank">
                        THÔNG TƯ 09/2021/TT-BKHCN SỬA ĐỔI 1:2021 QCVN 20:2019/BKHCN VỀ THÉP KHÔNG GỈ
                    </a>
                </li>
                <li class="banner-text-item">
                    <a href="#" class="banner-text-link" target="_blank">
                        THÔNG TƯ 09/2021/TT-BKHCN SỬA ĐỔI 1:2021 QCVN 20:2019/BKHCN VỀ THÉP KHÔNG GỈ
                    </a>
                </li>
                <li class="banner-text-item">
                    <a href="#" class="banner-text-link" target="_blank">
                        THÔNG TƯ 09/2021/TT-BKHCN SỬA ĐỔI 1:2021 QCVN 20:2019/BKHCN VỀ THÉP KHÔNG GỈ
                    </a>
                </li>
                <li class="banner-text-item">
                    <a href="#" class="banner-text-link" target="_blank">
                        THÔNG TƯ 09/2021/TT-BKHCN SỬA ĐỔI 1:2021 QCVN 20:2019/BKHCN VỀ THÉP KHÔNG GỈ
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection

@section('content')
    
@endsection