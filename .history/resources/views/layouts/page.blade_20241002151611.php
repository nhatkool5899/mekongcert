<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ $ogTitle ?? 'Mekong Cert' }}</title>

    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('front-end/assets/imgs/logo/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('front-end/assets/imgs/logo/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('front-end/assets/imgs/logo/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('front-end/assets/imgs/logo/site.webmanifest')}}">

    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $ogTitle ?? 'Mekong Cert' }}" />
    <meta property="og:description" content="{{ $ogDesc ?? '' }}" />
    <meta property="og:image" content="{{ $ogImage ?? '' }}" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Link custom css -->
    <link rel="stylesheet" href="{{asset('front-end/assets/fonts/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('front-end/assets/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('front-end/assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('front-end/assets/css/responsive.css')}}">
    
</head>
<body>
    <div class="app">
        <header>
            <div class="header">
                <div class="header-top">
                    <div class="container">
                        <div class="header-flex">
                           <h1 class="header-name">CÔNG TY CỔ PHẦN CHỨNG NHẬN VÀ GIÁM ĐỊNH NÔNG NGHIỆP VIỆT – VACERT</h1>
                            <div class="header-info">
                                <div class="header-info-item">
                                    <div class="info-item-icon">
                                        <i class="fa-sharp fa-light fa-phone-volume"></i>
                                    </div>
                                    <div class="info-item-context">
                                        <h3>+84 292 2245 599</h3>
                                    </div>
                                </div>
                                <div class="header-info-item">
                                    <div class="info-item-icon">
                                        <i class="fa-thin fa-envelope"></i>
                                    </div>
                                    <div class="info-item-context">
                                        <h3>mekongcert.sale@gmail.com</h3>
                                    </div>
                                </div>
                                {{-- <div class="header-info-item">
                                    <div class="info-item-icon">
                                        <i class="fa-sharp fa-light fa-location-dot"></i>
                                    </div>
                                    <div class="info-item-context">
                                        <h3>Cần Thơ</h3>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom">
                    <div class="container">
                        <div class="header-main">
                            <div class="header-logo">
                                <a href="{{route('home')}}" class="logo-link">
                                    <img src="{{asset('front-end/assets/imgs/logo.jpg')}}" alt="logo-mekongcert">
                                </a>
                            </div>
                            <ul class="navigation">
                                <li class="nav-item">
                                    <a href="{{route('home')}}" class="nav-link">Trang chủ</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('home')}}" class="nav-link">Giới thiệu</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('home')}}" class="nav-link">Dịch vụ</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('home')}}" class="nav-link">Tin tức</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('home')}}" class="nav-link">Hỏi đáp</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('home')}}" class="nav-link">Liên hệ</a>
                                </li>
                            </ul>
                            <div class="header-action">
                                <div class="header-search">
                                    <button class="header-search-btn">
                                        <i class="fa-regular fa-magnifying-glass"></i>
                                    </button>
                                </div>
                                <div class="header-button">
                                    <button class="header-register-btn">
                                        Đăng ký ngay
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="wrapper-banner">
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
        </section>
        
        <main>
            <section class="section">
                <div class="container">
                    <div class="wrapper-title">
                        <label>
                            <h2 class="title">Dịch vụ</h2>
                        </label>
                    </div>
                    <div class="services">
                        <div class="services-list">
                            <div class="services-item">
                                <div class="sv-image">
                                    <img src="https://quatest3.com.vn/Content/UserImages/admin/[thumb]%20thu-nghiem.png" alt="IMAGE">
                                </div>
                                <a href="#" class="sv-context">
                                    <div class="sv-text">
                                        <div class="sv-text-title">
                                            THỬ NGHIỆM CHẤT LƯỢNG VÀ AN TOÀN của sản phẩm hàng hóa
                                        </div>
                                        <div class="sv-text-desc">
                                            QUATEST 3 cung cấp dịch vụ thử nghiệm, phân tích chất lượng và tính an toàn đối với các loại sản phẩm,...
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="services-item">
                                <div class="sv-image">
                                    <img src="https://quatest3.com.vn/Content/UserImages/admin/[thumb]%20kiem-tra-giam-dinh.png" alt="IMAGE">
                                </div>
                                <a href="#" class="sv-context">
                                    <div class="sv-text">
                                        <div class="sv-text-title">
                                            THỬ NGHIỆM CHẤT LƯỢNG VÀ AN TOÀN của sản phẩm hàng hóa
                                        </div>
                                        <div class="sv-text-desc">
                                            QUATEST 3 cung cấp dịch vụ thử nghiệm, phân tích chất lượng và tính an toàn đối với các loại sản phẩm,...
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="services-item">
                                <div class="sv-image">
                                    <img src="https://quatest3.com.vn/Content/UserImages/admin/Cang%20SG.jpg" alt="IMAGE">
                                </div>
                                <a href="#" class="sv-context">
                                    <div class="sv-text">
                                        <div class="sv-text-title">
                                            THỬ NGHIỆM CHẤT LƯỢNG VÀ AN TOÀN của sản phẩm hàng hóa
                                        </div>
                                        <div class="sv-text-desc">
                                            QUATEST 3 cung cấp dịch vụ thử nghiệm, phân tích chất lượng và tính an toàn đối với các loại sản phẩm,...
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="services-item">
                                <div class="sv-image">
                                    <img src="https://quatest3.com.vn/Content/UserImages/admin/[thumb]%20thu-nghiem.png" alt="IMAGE">
                                </div>
                                <a href="#" class="sv-context">
                                    <div class="sv-text">
                                        <div class="sv-text-title">
                                            THỬ NGHIỆM CHẤT LƯỢNG VÀ AN TOÀN của sản phẩm hàng hóa
                                        </div>
                                        <div class="sv-text-desc">
                                            QUATEST 3 cung cấp dịch vụ thử nghiệm, phân tích chất lượng và tính an toàn đối với các loại sản phẩm,...
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="services-item">
                                <div class="sv-image">
                                    <img src="https://quatest3.com.vn/Content/UserImages/admin/[thumb]%20thu-nghiem.png" alt="IMAGE">
                                </div>
                                <a href="#" class="sv-context">
                                    <div class="sv-text">
                                        <div class="sv-text-title">
                                            THỬ NGHIỆM CHẤT LƯỢNG VÀ AN TOÀN của sản phẩm hàng hóa
                                        </div>
                                        <div class="sv-text-desc">
                                            QUATEST 3 cung cấp dịch vụ thử nghiệm, phân tích chất lượng và tính an toàn đối với các loại sản phẩm,...
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="services-item">
                                <div class="sv-image">
                                    <img src="https://quatest3.com.vn/Content/UserImages/admin/[thumb]%20thu-nghiem.png" alt="IMAGE">
                                </div>
                                <a href="#" class="sv-context">
                                    <div class="sv-text">
                                        <div class="sv-text-title">
                                            THỬ NGHIỆM CHẤT LƯỢNG VÀ AN TOÀN của sản phẩm hàng hóa
                                        </div>
                                        <div class="sv-text-desc">
                                            QUATEST 3 cung cấp dịch vụ thử nghiệm, phân tích chất lượng và tính an toàn đối với các loại sản phẩm,...
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section bg-secondary">
                <div class="container">
                    <div class="wrapper-title">
                        <label>
                            <h2 class="title">Tin tức</h2>
                        </label>
                    </div>
                    <div class="news">
                        <div class="news-body">
                            <div class="news-swiper swiper">
                                <div class="swiper-wrapper news-wrapper">
                                    <div class="swiper-slide news-slide">
                                        <div class="news-home">
                                            <div class="news-home-img">
                                                <img src="https://vietq.vn/Images/hongvan/2024/09/17/chinh-sach-moi-thang-11.jpg" alt="image">
                                            </div>
                                            <div class="news-home-time">18 Tháng Chín 2024</div>
                                            <div class="news-home-name">Đánh giá tác động của chính sách - công cụ đo lường tác động tiềm ẩn về thay đổi chính sách</div>
                                            <div class="news-home-desc">
                                                (VietQ.vn) - Báo cáo đánh giá tác động chính sách được xem là một công cụ dùng để phân tích, đo lường các tác động tiềm tàng (lợi, hại) của sự thay đổi về chính sách và đưa ra các phương án nhằm thực hiện sự thay đổi đó.     
                                            </div>
                                            <div class="news-readmore">
                                                <a href="#">Chi tiết</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide news-slide">
                                        <div class="news-home">
                                            <div class="news-home-img">
                                                <img src="https://vietq.vn/Images/hongvan/2024/09/17/chinh-sach-moi-thang-11.jpg" alt="image">
                                            </div>
                                            <div class="news-home-time">18 Tháng Chín 2024</div>
                                            <div class="news-home-name">Đánh giá tác động của chính sách - công cụ đo lường tác động tiềm ẩn về thay đổi chính sách</div>
                                            <div class="news-home-desc">
                                                (VietQ.vn) - Báo cáo đánh giá tác động chính sách được xem là một công cụ dùng để phân tích, đo lường các tác động tiềm tàng (lợi, hại) của sự thay đổi về chính sách và đưa ra các phương án nhằm thực hiện sự thay đổi đó.     
                                            </div>
                                            <div class="news-readmore">
                                                <a href="#">Chi tiết</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide news-slide">
                                        <div class="news-home">
                                            <div class="news-home-img">
                                                <img src="https://vietq.vn/Images/hongvan/2024/09/17/chinh-sach-moi-thang-11.jpg" alt="image">
                                            </div>
                                            <div class="news-home-time">18 Tháng Chín 2024</div>
                                            <div class="news-home-name">Đánh giá tác động của chính sách - công cụ đo lường tác động tiềm ẩn về thay đổi chính sách</div>
                                            <div class="news-home-desc">
                                                (VietQ.vn) - Báo cáo đánh giá tác động chính sách được xem là một công cụ dùng để phân tích, đo lường các tác động tiềm tàng (lợi, hại) của sự thay đổi về chính sách và đưa ra các phương án nhằm thực hiện sự thay đổi đó.     
                                            </div>
                                            <div class="news-readmore">
                                                <a href="#">Chi tiết</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide news-slide">
                                        <div class="news-home">
                                            <div class="news-home-img">
                                                <img src="https://vietq.vn/Images/hongvan/2024/09/17/chinh-sach-moi-thang-11.jpg" alt="image">
                                            </div>
                                            <div class="news-home-time">18 Tháng Chín 2024</div>
                                            <div class="news-home-name">Đánh giá tác động của chính sách - công cụ đo lường tác động tiềm ẩn về thay đổi chính sách</div>
                                            <div class="news-home-desc">
                                                (VietQ.vn) - Báo cáo đánh giá tác động chính sách được xem là một công cụ dùng để phân tích, đo lường các tác động tiềm tàng (lợi, hại) của sự thay đổi về chính sách và đưa ra các phương án nhằm thực hiện sự thay đổi đó.     
                                            </div>
                                            <div class="news-readmore">
                                                <a href="#">Chi tiết</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="news-next-slide"><i class="fa-light fa-chevron-right"></i></div>
                        <div class="news-prev-slide"><i class="fa-light fa-chevron-left"></i></div>
                    </div>
                    <div class="news-featured">
                        <div class="news-featured-title">Tin tức nổi bật khác</div>
                        <div class="news-featured-list">
                            <div class="news-featured-item">
                                <a href="#" class="news-featured-link">TCVN 13762:2023 về phân bón - xác định hàm lượng paclobutrazol</a>
                            </div>
                            <div class="news-featured-item">
                                <a href="#" class="news-featured-link">TCVN 13762:2023 về phân bón - xác định hàm lượng paclobutrazol</a>
                            </div>
                            <div class="news-featured-item">
                                <a href="#" class="news-featured-link">TCVN 13762:2023 về phân bón - xác định hàm lượng paclobutrazol</a>
                            </div>
                            <div class="news-featured-item">
                                <a href="#" class="news-featured-link">TCVN 13762:2023 về phân bón - xác định hàm lượng paclobutrazol</a>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <section class="section">
                <div class="container">
                    <div class="wrapper-title">
                        <label>
                            <h2 class="title">Đối tác</h2>
                        </label>
                    </div>
                    <div class="partners">
                        <div class="partners-swiper swiper">
                            <div class="partners-wrapper swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="partners-item">
                                        <img src="https://quatest3.com.vn/Content/UserImages/Banner/p3.png" alt="image">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="partners-item">
                                        <img src="https://quatest3.com.vn/Content/UserImages/Banner/p2.png" alt="image">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="partners-item">
                                        <img src="https://quatest3.com.vn/Content/UserImages/Banner/Artboard%201.png" alt="image">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="partners-item">
                                        <img src="https://quatest3.com.vn/Content/UserImages/Banner/p9.png" alt="image">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="partners-item">
                                        <img src="https://quatest3.com.vn/Content/UserImages/Banner/p9.png" alt="image">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="partners-item">
                                        <img src="https://quatest3.com.vn/Content/UserImages/Banner/p9.png" alt="image">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="partners-item">
                                        <img src="https://quatest3.com.vn/Content/UserImages/Banner/p9.png" alt="image">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="partners-item">
                                        <img src="https://quatest3.com.vn/Content/UserImages/Banner/p3.png" alt="image">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="partners-item">
                                        <img src="https://quatest3.com.vn/Content/UserImages/Banner/p3.png" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer>
            <div class="footer">
                <div class="ft-head">
                    <div class="container">
                        <div class="ft-head-body">
                            <div class="ft-head-redirect">
                                <a href="#" class="ft-head-link">Giới thiệu</a>
                                <a href="#" class="ft-head-link">Dịch vụ</a>
                                <a href="#" class="ft-head-link">Tin tức</a>
                                <a href="#" class="ft-head-link">Hỏi đáp</a>
                            </div>
                            <div class="ft-head-info">
                                <div class="ft-info-item">
                                    <div class="info-item-icon">
                                        <i class="fa-sharp fa-light fa-phone-volume"></i>
                                    </div>
                                    <div class="info-item-context">
                                        <h3>+84 292 2245 599</h3>
                                    </div>
                                </div>
                                <div class="ft-info-item">
                                    <div class="info-item-icon">
                                        <i class="fa-thin fa-envelope"></i>
                                    </div>
                                    <div class="info-item-context">
                                        <h3>mekongcert.sale@gmail.com</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="ft-body">
                        <div class="ft-left">
                            <div class="ft-logo">
                                <img src="{{asset('front-end/assets/imgs/logo/logo-ft.jpg')}}" alt="logo">
                            </div>
                            <div class="ft-text">
                                Mauris sed molestie sem. Sed vel vestibulum elit, non accumsan risus. In vitae sapien viverra est Duo ei ullum inani senserit.
                            </div>
                            <div class="ft-social">
                                <a href="#" class="ft-social-item">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                                <a href="#" class="ft-social-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/></svg>
                                </a>
                                <a href="#" class="ft-social-item">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                                <a href="#" class="ft-social-item">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                            </div>
                            <div class="ft-form">
                                <form>
                                    @csrf
                                    <label>Đăng ký nhận bản tin điện tử</label>
                                    <div class="group-input">
                                        <input type="text" class="input-email" placeholder="Địa chỉ email">
                                        <button class="register-btn"><i class="fa-light fa-paper-plane-top"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="ft-right">
                            <h2 class="ft-company">
                                Công ty cổ phần chứng nhận và giám định <span>MEKONGCERT</span> 
                            </h2>
                            <div class="ft-context">
                                <div class="ft-group">
                                    <div class="ft-group-col col-1">
                                        <div class="ft-title">Liên kết tới trang</div>
                                        <a href="#" class="ft-link"><i class="fa-solid fa-caret-right"></i> Về Mekongcert</a>
                                        <a href="#" class="ft-link"><i class="fa-solid fa-caret-right"></i> Dịch vụ</a>
                                        <a href="#" class="ft-link"><i class="fa-solid fa-caret-right"></i> Liên hệ</a>
                                        <a href="#" class="ft-link"><i class="fa-solid fa-caret-right"></i> Hỏi đáp</a>
                                    </div>
                                    <div class="ft-group-col col-2">
                                        <div class="ft-title">Thông tin liên hệ</div>
                                        <div class="ft-col-text">
                                            <strong>Điện thoại: </strong>
                                            <span>+84 292 2245 599</span>
                                        </div>
                                        <div class="ft-col-text">
                                            <strong>Email: </strong>
                                            <span>mekongcert.sale@gmail.com</span>
                                        </div>
                                        <div class="ft-col-text">
                                            <strong>Địa chỉ: </strong>
                                            <span>10B đường số 9, KDC Hồng Phát, P. An Bình, Q. Ninh Kiều, Cần Thơ</span>
                                        </div>
                                    </div>
                                    <div class="ft-group-col col-1">
                                        <div class="ft-title">Điều khoản</div>
                                        <a href="#" class="ft-link">Chính sách bảo mật</a>
                                        <a href="#" class="ft-link">Điều khoản sử dụng</a>
                                    </div>
                                </div>
                            </div>
                            <div class="copyright">
                                <p>Copyright © [2023] Little Learners Academy. Mọi quyền được bảo lưu.</p>
                            </div>
                        </div>
                    </div>

                </div>
           
            </div>
        </footer>

        {{-- <div class="search-body">
            <div class="search-body-content">
                <div class="container-search">
                    <div class="search-top">
                        <span>Bạn cần tìm gì?</span>
                        <span class="btn-search-close"><i class="fa-regular fa-xmark"></i></span>
                    </div>
                    <div class="search-bottom">
                        <form action="{{url('search')}}" class="form-search" method="POST">
                        @csrf
                            <input type="search" class="search_input" name="keyword" placeholder="Tên từ khóa...">
                            <button type="submit" class="btn-search-submit"><i class="fa-regular fa-magnifying-glass"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('front-end/assets/js/slider.js')}}"></script>
    <script src="{{asset('front-end/assets/js/main.js')}}"></script>

</body>
</html>