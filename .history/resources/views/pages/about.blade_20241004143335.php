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
    <section class="section bg-secondary" id="section1">
        <div class="container">
            <div class="about-title">
                <h3>Giới thiệu chung</h3>
                <div class="line-title"></div>
            </div>
            <div class="about-wrapper">
                <div class="about-text">
                    MekongCert là một trong hai đơn vị của Việt Nam được Tổ chức công nhận Quốc tế JAS-ANZ (Australia, New Zealand - thành viên sáng lập Diễn đàn Công nhận Quốc tế - IAF) công nhận năng lực cung cấp dịch vụ chứng nhận sự phù hợp đáp ứng tiêu chuẩn: ISO/IEC 17021-1:2015; ISO/IEC 17065:2012; ISO/TS 22003:2013.
                </div>
                <div class="about-text">
                    Chứng chỉ của MekongCert cấp được nhận biết và thừa nhận rộng rãi trên thế giới thông qua dấu hiệu công nhận của JAS-ANZ in trên Giấy chứng nhận.
                </div>
                <div class="about-p">MekongCert cam kết:</div>
                <ul class="about-ul">
                    <li>Mang lại nhiều lợi ích cho khách hàng trong mỗi lần đánh giá:</li>
                    <li>Thủ tục nhanh gọn, giảm bớt các giấy tờ không cần thiết.</li>
                    <li>Đưa ra kiến nghị nhằm cải tiến hệ thống quản lý sau mỗi lần đánh giá.</li>
                </ul>
                <div class="about-image">
                    <img src="{{asset('front-end/assets/imgs/about-1.jpg')}}" alt="about-1">
                    <i>Hình 1. Trụ sở công ty</i>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="section2">
        <div class="container">
            <div class="about-title">
                <h3>Chức năng, phạm vi hoạt động</h3>
                <div class="line-title"></div>
            </div>
            <div class="about-wrapper">
                <div class="about-text">
                    Công ty Cổ phần Chứng nhận và Giám định MekongCert là tổ chức hoạt động độc lập trên toàn lãnh thổ Việt Nam với các lĩnh vực Chứng nhận, Giám định, Thử nghiệm, Quan trắc môi trường, Tư vấn và Đào tạo. Công ty cung cấp cho khách hàng trong và ngoài nước.
                </div>
                <div class="about-text">
                    MekongCert là một trong hai đơn vị của Việt Nam được Tổ chức công nhận Quốc tế JAS-ANZ (Australia, New Zealand - thành viên sáng lập Diễn đàn Công nhận Quốc tế - IAF) công nhận năng lực cung cấp dịch vụ chứng nhận sự phù hợp đáp ứng tiêu chuẩn: ISO/IEC 17021-1:2015; ISO/IEC 17065:2012; ISO/TS 22003:2013.
                </div>
                <div class="about-image">
                    <img src="{{asset('front-end/assets/imgs/about-2.jpg')}}" alt="about-2">
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="section3">
        <div class="container">
            <div class="about-title">
                <h3>Thông tin năng lực</h3>
                <div class="line-title"></div>
            </div>
            <div class="about-wrapper">
                <div class="about-text">
                    MekongCert là một trong hai đơn vị của Việt Nam được Tổ chức công nhận Quốc tế JAS-ANZ (Australia, New Zealand - thành viên sáng lập Diễn đàn Công nhận Quốc tế - IAF) công nhận năng lực cung cấp dịch vụ chứng nhận sự phù hợp đáp ứng tiêu chuẩn: ISO/IEC 17021-1:2015; ISO/IEC 17065:2012; ISO/TS 22003:2013.
                </div>
                <div class="about-image">
                    <img src="{{asset('front-end/assets/imgs/about-3.png')}}" alt="about-3">
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="section4">
        <div class="container">
            <div class="about-title">
                <h3>Chính sách chất lượng</h3>
                <div class="line-title"></div>
            </div>
            <div class="about-wrapper">
                <div class="about-text">
                    MekongCert là một trong hai đơn vị của Việt Nam được Tổ chức công nhận Quốc tế JAS-ANZ (Australia, New Zealand - thành viên sáng lập Diễn đàn Công nhận Quốc tế - IAF) công nhận năng lực cung cấp dịch vụ chứng nhận sự phù hợp đáp ứng tiêu chuẩn: ISO/IEC 17021-1:2015; ISO/IEC 17065:2012; ISO/TS 22003:2013.
                </div>
            </div>

            <div class="about-wrapper">
                <div class="about-tab">
                    <div class="about-tab-ittem" data-title="wrapper-1">Chính sách chất lượng</div>
                    <div class="about-tab-ittem" data-title="wrapper-2">Chính sách bảo mật</div>
                    <div class="about-tab-ittem" data-title="wrapper-3">Chính sách khách quan</div>
                    <div class="about-tab-ittem" data-title="wrapper4">Chính sách an toàn</div>
                </div>
                <div class="about-content">
                    <div class="wrapper-1">
                        <div class="about-content-title">Chính sách chất lượng</div>
                        <div class="about-content-btn">Tải văn bản</div>
                        <div class="about-content-desc">
                            Trung tâm Kỹ thuật Tiêu chuẩn Đo lường Chất lượng 3 (QUATEST 3) là Tổ chức khoa học và công nghệ, có chức năng cung cấp các dịch vụ khoa học, công nghệ phục vụ yêu cầu quản lý nhà nước về Tiêu chuẩn - Đo lường - Chất lượng và yêu cầu khác của Khách hàng và các Bên liên quan/ quan tâm. QUATEST 3 cam kết:
                        </div>

                        <div class="about-content-text">
                            <h3>1. CHÍNH SÁCH CHẤT LƯỢNG:</h3>
                            <p>Nhằm hoàn thành tốt nhất nhiệm vụ được Ủy ban Tiêu chuẩn Đo Lường Chất lượng Quốc gia và Bộ Khoa học và Công nghệ giao, QUATEST 3 công bố Chính sách chất lượng như sau:</p>
                            <ul>
                                <li>Luôn thỏa mãn yêu cầu của Khách hàng và các Bên liên quan/ quan tâm qua việc cung cấp dịch vụ chuyên nghiệp và không thiên vị theo phương châm:</li>
                            </ul>
                            <div class="about-content-slogan">CHÍNH XÁC - KHÁCH QUAN – KỊP THỜI – TIN CẬY</div>
                            <ul>
                                <li>Duy trì, cải thiện thường xuyên môi trường làm việc, chăm lo phát triển đội ngũ người lao động để phát huy tính chủ động, sáng tạo, hợp tác đồng thời đáp ứng tốt các quy định về môi trường, an toàn và sức khỏe nghề nghiệp.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const section = sessionStorage.getItem('scrollToSection');
            if (section) {
                const targetElement = document.getElementById(section);
                if (targetElement) {
                    const headerHeight = 130;
                    const elementPosition = targetElement.getBoundingClientRect().top + window.scrollY;
                    const offsetPosition = elementPosition - headerHeight;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
                sessionStorage.removeItem('scrollToSection');
            }
        });
    </script>
@endsection