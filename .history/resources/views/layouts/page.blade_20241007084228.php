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
                                    <a href="{{route('about')}}" class="nav-link">Giới thiệu</a>
                                    <div class="submenu">
                                        <ul class="submenu-list">
                                            <li class="submenu-item">
                                                <a href="{{ route('about') }}" class="submenu-link about-redirect" data-section="section1">
                                                    <div class="icon">
                                                        <i class="fa-solid fa-info"></i>
                                                    </div>
                                                    <span>Giới thiệu chung</span>
                                                </a>
                                            </li>
                                            <li class="submenu-item">
                                                <a href="{{ route('about') }}" class="submenu-link about-redirect" data-section="section2">
                                                    <div class="icon">
                                                        <i class="fa-solid fa-layer-group"></i>
                                                    </div>
                                                    <span>Chức năng, <br> phạm vi hoạt động</span>
                                                </a>
                                            </li>
                                            <li class="submenu-item">
                                                <a href="{{ route('about') }}" class="submenu-link about-redirect" data-section="section3">
                                                    <div class="icon">
                                                        <i class="fa-solid fa-award"></i>
                                                    </div>
                                                    <span>Thông tin <br> năng lực</span>
                                                </a>
                                            </li>
                                            <li class="submenu-item">
                                                <a href="{{ route('about') }}" class="submenu-link about-redirect" data-section="section4">
                                                    <div class="icon">
                                                        <i class="fa-solid fa-shield-check"></i>
                                                    </div>
                                                    <span>Chính sách  <br> chất lượng</span>
                                                </a>
                                            </li>
                                            <li class="submenu-item">
                                                <a href="{{ route('about') }}" class="submenu-link about-redirect" data-section="section5">
                                                    <div class="icon">
                                                        <i class="fa-solid fa-user-nurse"></i>
                                                    </div>
                                                    <span>Ban lãnh đạo</span>
                                                </a>
                                            </li>
                                            <li class="submenu-item">
                                                <a href="{{ route('about') }}" class="submenu-link about-redirect" data-section="section6">
                                                    <div class="icon">
                                                        <i class="fa-solid fa-diagram-project"></i>
                                                    </div>
                                                    <span>Sơ đồ tổ chức</span>    
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('services')}}" class="nav-link">Dịch vụ</a>
                                    <div class="submenu">
                                        <div class="container">
                                            <ul class="submenu-service">
                                                <li class="submenu-item">
                                                    <span class="submenu-link">
                                                        <div class="icon">
                                                            <i class="fa-solid fa-info"></i>
                                                        </div>
                                                        <span>Thử nghiệm</span>
                                                    </span>
                                                    <ul class="menu-service">
                                                        <li>
                                                            <a href="#" class="menu-sv-link">Thử nghiệm hóa sinh</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="menu-sv-link">Thử nghiệm môi trường</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="menu-sv-link">Thử nghiệm thực phẩm</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="submenu-item">
                                                    <span class="submenu-link">
                                                        <div class="icon">
                                                            <i class="fa-solid fa-layer-group"></i>
                                                        </div>
                                                        <span>Giám định</span>
                                                    </span>
                                                </li>
                                                <li class="submenu-item">
                                                    <span class="submenu-link">
                                                        <div class="icon">
                                                            <i class="fa-solid fa-award"></i>
                                                        </div>
                                                        <span>Đào tạo</span>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('news')}}" class="nav-link">Tin tức</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('home')}}" class="nav-link">Hỏi đáp</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('contact')}}" class="nav-link">Liên hệ</a>
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
        <div class="clear-header"></div>
        <section class="wrapper-banner">
            @yield('banner')
        </section>
        
        <main>
            @yield('content')
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
                                    <div class="ft-group-col col-1">
                                        <div class="ft-title">Điều khoản</div>
                                        <a href="#" class="ft-link">Chính sách bảo mật</a>
                                        <a href="#" class="ft-link">Điều khoản sử dụng</a>
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
                                        <div class="ft-col-text">
                                            <strong>Mã số thuế: </strong>
                                            <span>1801752042</span>
                                        </div>
                                        <div class="ft-title">Fanpage</div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="ft-bot">
                                <div class="ft-certify">
                                    <img src="{{asset('front-end/assets/imgs/chung-nhan-iaf.jpg')}}" alt="chung-nhan-iaf">
                                    <img src="{{asset('front-end/assets/imgs/chung-nhan-ilac.jpg')}}" style="width:100px" alt="chung-nhan-ilac-mra">
                                </div>
                                <div class="copyright">
                                    <p>Copyright © [2023] Little Learners Academy.</p>
                                </div>
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