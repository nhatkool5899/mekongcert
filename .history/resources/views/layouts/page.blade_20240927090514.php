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
    <link rel="stylesheet" href="{{asset('front-end/assets/css/animation.css')}}">
    <link rel="stylesheet" href="{{asset('front-end/assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('front-end/assets/css/responsive.css')}}">
    
</head>
<body>
    <div class="app">
        <header>
            <div class="header">
                <div class="header_top">
                    <div class="container">
                        <div class="header_top-main">
                            <div class="header_top-item">
                                <p class="header_top-text">{{$home->text_1}}</p>
                            </div>
                            <div class="header_top-item">
                                <a href="https://design24.edu.vn/" target="_blank" class="header_top-link">Liên kết đào tạo</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header_main">
                    <div class="container">
                        <div class="header_elementor">
                            <div class="nav-mobile">
                                <div class="btn_show-menu">
                                    <div class="nav-mobile-toggle">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>
                                <div class="nav_mobile-menu">
                                    <ul class="nav_mobile-list">
                                        <div class="btn-close-nav">
                                            <i class="fa-light fa-xmark"></i>
                                        </div>
                                        <div class="logo-mobile">
                                            <a href="{{url('/')}}">
                                                <img src="{{asset('front-end/assets/imgs/logo/logo.webp')}}" alt="logo">
                                            </a>
                                        </div>
                                        <li class="nav-item">
                                            <a href="{{ url('gioi-thieu') }}" class="nav_mobile-item">
                                                <span>Giới thiệu</span>
                                            </a>
                                            
                                        </li>
                                        <li class="nav-item slide-drop">
                                            <a class="nav_mobile-item">
                                                <span>Chương trình học</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                                </svg>
                                            </a>
                                            <ul class="nav-submobile submobile">
                                                @foreach ($category as $item)
                                                    
                                                <li class="nav-submobile-item">
                                                    <a class="nav-submobile-link" href="{{url('category/'.$item->slug)}}">
                                                        <span>{{$item->name}}</span>
                                                    </a>
                                                </li>

                                                @endforeach
                                               
                                            </ul>
                                        </li>
                                        <li class="nav-item slide-drop">
                                            <a class="nav_mobile-item" href="{{url('co-so-vat-chat')}}">
                                                <span>Cơ sở vật chất</span>
                                            </a>
                                        </li>
        
                                        <li class="nav-item slide-drop">
                                            <a class="nav_mobile-item" href="{{url('giao-vien')}}">
                                                <span>Giáo viên</span>
                                            </a>
                                        </li>

                                        <li class="nav-item slide-drop">
                                            <a class="nav_mobile-item">
                                                <span>Tin tức</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                                </svg>
                                            </a>
                                            <ul class="nav-submobile submobile">
                                                    
                                                <li class="nav-submobile-item">
                                                    <a class="nav-submobile-link" href="{{url('tin-tuc')}}">
                                                        <span>Tin tức & sự kiện</span>
                                                    </a>
                                                </li>
                                                <li class="nav-submobile-item">
                                                    <a class="nav-submobile-link" href="{{url('tuyen-dung')}}">
                                                        <span>Tuyển dụng</span>
                                                    </a>
                                                </li>
                                               
                                            </ul>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav_mobile-item" href="{{url('lien-he')}}">
                                                <span>Liên hệ</span>
                                            </a>
                                        </li>
        
                                    </ul>
                                
                                </div>
                            </div>
                            <a href="{{url('/')}}" class="logo">
                                <div class="logo-img">
                                    <img src="{{asset('front-end/assets/imgs/logo/logo.webp')}}" alt="logo">
                                </div>
                                <div class="logo-text">
                                    <h4>Trung tâm ngoại ngữ</h4>
                                    <h2>Việt Úc</h2>
                                </div>
                            </a>
                            <div class="header_item header_hide">
                                <div class="header_item-icon">
                                    <i class="fa-sharp fa-solid fa-phone"></i>
                                </div>
                                <div class="header_item-context">
                                    <h4>Liên hệ</h4>
                                    <p>{{$home->phone}}</p>
                                </div>
                            </div>
                            <div class="header_item header_hide">
                                <div class="header_item-icon">
                                 <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div class="header_item-context">
                                    <h4>Email</h4>
                                    <p>{{$home->email}}</p>
                                </div>
                            </div>
                             <div class="header_item">
                                <div class="header_search">
                                    {{-- <input type="search" name="keyword" class="header_hide" placeholder="Nhập từ khóa..."> --}}
                                    <button class="search_keyword"><i class="fa-regular fa-magnifying-glass"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header_fixed">
                    <div class="container">
                        <div class="header_nav">
                            <ul class="navigation">
                                <li class="nav-item">
                                    <a href="{{url('gioi-thieu')}}" class="nav-link">Giới thiệu</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('category/tieng-anh-tieu-hoc')}}" class="nav-link">Chương trình học <i class="fa-regular fa-chevron-down"></i></a>
                                    <ul class="submenu">
                                        @foreach ($category as $item)
                                            
                                        <li class="submenu_item">
                                            <a href="{{url('category/'.$item->slug)}}" class="submenu_link">{{$item->name}}</a>
                                        </li>

                                        @endforeach
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('co-so-vat-chat')}}" class="nav-link">Cơ sở vật chất</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('giao-vien')}}" class="nav-link">Giáo viên</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('tin-tuc')}}" class="nav-link">Tin tức <i class="fa-regular fa-chevron-down"></i></a>
                                    <ul class="submenu">
                                        <li class="submenu_item">
                                            <a href="{{url('tin-tuc')}}" class="submenu_link">Tin tức & Sự kiện</a>
                                        </li>
                                        <li class="submenu_item">
                                            <a href="{{url('tuyen-dung')}}" class="submenu_link">Tuyển dụng</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('lien-he')}}" class="nav-link">Liên hệ</a>
                                </li>
                            </ul>
                            <div class="header_btn">
                                <a href="{{url('lien-he')}}" class="register_button">Đăng ký ngay</a>
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
        <footer>
            <div class="footer">
                <div class="container">
                    <div class="ft_elementor">
                        <div class="ft_info">
                            <div class="ft_logo">
                                <a href="{{url('/')}}" class="logo">
                                    <div class="logo-img">
                                        <img src="{{asset('front-end/assets/imgs/logo/logo.webp')}}" alt="logo">
                                    </div>
                                    <div class="logo-text">
                                        <h4>Trung tâm ngoại ngữ</h4>
                                        <h2>Việt Úc</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="ft_desc">
                                {{$home->text_7}}
                            </div>
                            <div class="ft_contact">
                                <div class="ft_contact-item">
                                    <i class="fa-solid fa-envelope"></i>
                                    <span>{{$home->email}}</span>
                                </div>
                                <div class="ft_contact-item">
                                    <i class="fa-sharp fa-solid fa-phone"></i>
                                    <span>{{$home->phone}}</span>
                                </div>
                                <div class="ft_contact-item">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <span>{{$home->address}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="ft_redirect">
                            <div class="ft_col">
                                <div class="ft_title">Chương trình học</div>
                                <a href="#" class="ft_link">Lớp tiếng Anh tiểu học</a>
                                <a href="#" class="ft_link">Lớp tiếng Anh Trung học cơ sở</a>
                                <a href="#" class="ft_link">Lớp tiếng Anh Trung học phổ thông</a>
                                <a href="#" class="ft_link">Nhóm chứng chỉ VSTEP, IELTS</a>
                                <a href="#" class="ft_link">TIếng Anh giao tiếp</a>
                            </div>
                            <div class="ft_col">
                                <div class="ft_title">Điều hướng</div>
                                <a href="#" class="ft_link">Giới thiệu</a>
                                <a href="#" class="ft_link">Giáo viên</a>
                                <a href="#" class="ft_link">Tin tức</a>
                                <a href="#" class="ft_link">Tuyển dụng</a>
                            </div>
                            <div class="ft_col">
                                <div class="ft_title">Luyện thi và du học</div>
                                <a href="#" class="ft_link">Luyện thi IELTS và SAT</a>
                                <a href="#" class="ft_link">Du học Việt Úc</a>
                                <a href="#" class="ft_link">Du học Nhật Bản</a>
                                <a href="#" class="ft_link">Du học Đức</a>
                            </div>
                        </div>
                    </div>
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
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('front-end/assets/js/main.js')}}"></script>

</body>
</html>