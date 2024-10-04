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
                            <div class="header-menu">
                                <ul class="navigation">
                                    <li class="nav-item">
                                        <a href="{{route('home')}}" class="nav-link">Trang chủ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('home')}}" class="nav-link">Trang chủ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('home')}}" class="nav-link">Trang chủ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('home')}}" class="nav-link">Trang chủ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('home')}}" class="nav-link">Trang chủ</a>
                                    </li>
                                </ul>
                                <div class="header-action">
                                    <div class="header-search">
                                        <button class="header-search-btn">
                                            <i class="fa-regular fa-magnifying-glass"></i>
                                        </button>
                                    </div>
                                    <div class="header-button">
                                        <a href="#" class="header-redirect">Đăng ký ngay</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="wrapper-banner">
            @yield('banner')
        </section>
        
        <main>
            @yield('content')
        </main>
        {{-- <footer>
            <div class="footer">
                <div class="container">
                </div>
                <div class="ft_middle">
                    <div class="container">
                        <div class="ft_middle-inner">
                            <div class="ft_policy">
                                <a href="#" class="ft_policy-link">Điều khoản dịch vụ</a>
                                <a href="#" class="ft_policy-link">Chính sách sử dụng</a>
                                <a href="#" class="ft_policy-link">Chính sách bảo mật</a>
                            </div>
                            <div class="ft_social">
                                <div class="ft_social-item">
                                    <a href="https://www.facebook.com/trungtamngoainguVietUc" target="_blank" class="ft_social-link">
                                        <i class="fa-brands fa-facebook"></i>
                                    </a>
                                    <a href="#" class="ft_social-link">
                                        <i class="fa-brands fa-tiktok"></i>
                                    </a>
                                    <a href="#" class="ft_social-link">
                                        <i class="fa-brands fa-youtube"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <p>Copyright © [2023] Little Learners Academy. Mọi quyền được bảo lưu.</p>
                </div>
            </div>
        </footer>

        <div class="search-body">
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
    <script src="{{asset('front-end/assets/js/main.js')}}"></script>

</body>
</html>