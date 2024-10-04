@extends('layouts.page')

@section('banner')
<div class="banner">
    <div class="banner-page">
        <img src="https://quatest3.com.vn/Content/UserImages/admin/Gioi-thieu-chung.png" alt="banner-about">
        <div class="container">
            <div class="banner-breadcrumbs">
                <h2 class="breadcrumbs-title">Giới thiệu</h2>
            </div>
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
    <div class="tab-menu">
        <div class="container">
            <div class="menu-about">
                <div class="menu-about-item">
                    <a href="{{route('about')}}" class="about-redirect" data-section="section1">Giới thiệu chung</a>
                </div>
                <div class="menu-about-item">
                    <a href="{{route('about')}}" class="about-redirect" data-section="section2">Chức năng, phạm vi hoạt động</a>
                </div>
                <div class="menu-about-item">
                    <a href="{{route('about')}}" class="about-redirect" data-section="section3">Thông tin năng lực</a>
                </div>
                <div class="menu-about-item">
                    <a href="{{route('about')}}" class="about-redirect" data-section="section4">Chính sách chất lượng</a>
                </div>
                <div class="menu-about-item">
                    <a href="{{route('about')}}" class="about-redirect" data-section="section5">Ban lãnh đạo</a>
                </div>
                <div class="menu-about-item">
                    <a href="{{route('about')}}" class="about-redirect" data-section="section6">Sơ đồ tổ chức</a>
                </div>
            </div>
        </div>
    </div>
    <section class="section" id="section1">
        <div class="container">
            <div class="about-title">
                <h3>Giới thiệu chung</h3>
            </div>
        </div>
    </section>
@endsection