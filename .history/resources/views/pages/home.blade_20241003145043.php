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
<section class="section bg-secondary">
    <div class="container">
        <div class="box-inner">
            <div class="inner-list">
                <div class="inner-item">
                    <div class="inner-head">
                        <div class="inner-icon">
                            <i style="transform: translate(1px,-2px)" class="fa-solid fa-stars"></i>
                        </div>
                        <div class="inner-title">Dịch vụ <br> chất lượng</div>
                    </div>
                    <div class="inner-text">
                        Dịch vụ giám định, thử nghiệm tại MEKONGCERT với các tiêu chí: Chuyên nghiệp, Chất lượng, Kịp thời. IQC cam kết mang lại giá trị giá tăng trong các dịch vụ.
                    </div>
                </div>
                <div class="inner-item">
                    <div class="inner-head">
                        <div class="inner-icon">
                            <i class="fa-sharp fa-regular fa-file-certificate"></i>
                        </div>
                        <div class="inner-title">Chuyên gia <br> kinh nghiệm</div>
                    </div>
                    <div class="inner-text">
                        Các chuyên gia được đào tạo chuẩn quốc tế với trong từng lĩnh vực. Chuyên gia của MEKONGCERT được phê duyệt thỏa đáng và giám sát năng lực định kỳ.
                    </div>
                </div>
                <div class="inner-item">
                    <div class="inner-head">
                        <div class="inner-icon">
                            <i class="fa-sharp fa-solid fa-message-smile"></i>
                        </div>
                        <div class="inner-title">Tư vấn & <br> Hỗ trợ 24/7</div>
                    </div>
                    <div class="inner-text">
                        Tiêu chí hài lòng của khách hàng được chúng tôi đặt lên hàng đầu, thái độ hợp tác và thân thiện là một tiêu chí mà chúng tôi ưu tiên khi làm việc tại MEKONGCERT.
                    </div>
                </div>
                <div class="inner-item">
                    <div class="inner-head">
                        <div class="inner-icon">
                            <i class="fa-regular fa-handshake"></i>
                        </div>
                        <div class="inner-title">Hợp tác <br> phát triển</div>
                    </div>
                    <div class="inner-text">
                        MEKONGCERT hướng tới việc phát triển bền vững và lâu dài trên thị trường chứng nhận, giám định với tiêu chí: Chuyên nghiệp, Chất lượng, Kịp thời. Cam kết mang lại giá trị cho doanh nghiệp.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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
                    <div class="service-body">
                        <div class="sv-image">
                            <img src="{{asset('front-end/assets/imgs/services/1.jpg')}}" alt="IMAGE">
                        </div>
                        <a href="#" class="service-link">
                            <span>
                                <i class="fa-regular fa-arrow-up-right"></i>
                            </span>
                        </a>
                    </div>
                    <duv class="sv-context">
                        <div class="sv-text-type"><i class="fa-solid fa-circle"></i> Dịch vụ giám định</div>
                        <a href="#" class="sv-text-title">
                            Thử nghiệm chất lượng và an toàn của sản phẩm hàng hóa
                        </a>
                        <div class="sv-text-desc">
                            QUATEST 3 cung cấp dịch vụ thử nghiệm, phân tích chất lượng và tính an toàn đối với các loại sản phẩm,...
                        </div>
                    </duv>
                </div>
                <div class="services-item">
                    <div class="service-body">
                        <div class="sv-image">
                            <img src="{{asset('front-end/assets/imgs/services/sv-2.jpg')}}" alt="IMAGE">
                        </div>
                        <a href="#" class="service-link">
                            <span>
                                <i class="fa-regular fa-arrow-up-right"></i>
                            </span>
                        </a>
                    </div>
                    <duv class="sv-context">
                        <div class="sv-text-type"><i class="fa-solid fa-circle"></i> Dịch vụ giám định</div>
                        <a href="#" class="sv-text-title">
                            Thử nghiệm chất lượng và an toàn của sản phẩm hàng hóa
                        </a>
                        <div class="sv-text-desc">
                            QUATEST 3 cung cấp dịch vụ thử nghiệm, phân tích chất lượng và tính an toàn đối với các loại sản phẩm,...
                        </div>
                    </duv>
                </div>
                <div class="services-item">
                    <div class="service-body">
                        <div class="sv-image">
                            <img src="{{asset('front-end/assets/imgs/services/sv-3.jpg')}}" alt="IMAGE">
                        </div>
                        <a href="#" class="service-link">
                            <span>
                                <i class="fa-regular fa-arrow-up-right"></i>
                            </span>
                        </a>
                    </div>
                    <duv class="sv-context">
                        <div class="sv-text-type"><i class="fa-solid fa-circle"></i> Dịch vụ giám định</div>
                        <a href="#" class="sv-text-title">
                            Thử nghiệm chất lượng và an toàn của sản phẩm hàng hóa
                        </a>
                        <div class="sv-text-desc">
                            QUATEST 3 cung cấp dịch vụ thử nghiệm, phân tích chất lượng và tính an toàn đối với các loại sản phẩm,...
                        </div>
                    </duv>
                </div>
                <div class="services-item">
                    <div class="service-body">
                        <div class="sv-image">
                            <img src="{{asset('front-end/assets/imgs/services/sv-4.jpg')}}" alt="IMAGE">
                        </div>
                        <a href="#" class="service-link">
                            <span>
                                <i class="fa-regular fa-arrow-up-right"></i>
                            </span>
                        </a>
                    </div>
                    <duv class="sv-context">
                        <div class="sv-text-type"><i class="fa-solid fa-circle"></i> Dịch vụ giám định</div>
                        <a href="#" class="sv-text-title">
                            Thử nghiệm chất lượng và an toàn của sản phẩm hàng hóa
                        </a>
                        <div class="sv-text-desc">
                            QUATEST 3 cung cấp dịch vụ thử nghiệm, phân tích chất lượng và tính an toàn đối với các loại sản phẩm,...
                        </div>
                    </duv>
                </div>
                <div class="services-item">
                    <div class="service-body">
                        <div class="sv-image">
                            <img src="{{asset('front-end/assets/imgs/services/sv-2.jpg')}}" alt="IMAGE">
                        </div>
                        <a href="#" class="service-link">
                            <span>
                                <i class="fa-regular fa-arrow-up-right"></i>
                            </span>
                        </a>
                    </div>
                    <duv class="sv-context">
                        <div class="sv-text-type"><i class="fa-solid fa-circle"></i> Dịch vụ giám định</div>
                        <a href="#" class="sv-text-title">
                            Thử nghiệm chất lượng và an toàn của sản phẩm hàng hóa
                        </a>
                        <div class="sv-text-desc">
                            QUATEST 3 cung cấp dịch vụ thử nghiệm, phân tích chất lượng và tính an toàn đối với các loại sản phẩm,...
                        </div>
                    </duv>
                </div>
                <div class="services-item">
                    <div class="service-body">
                        <div class="sv-image">
                            <img src="{{asset('front-end/assets/imgs/services/sv-2.jpg')}}" alt="IMAGE">
                        </div>
                        <a href="#" class="service-link">
                            <span>
                                <i class="fa-regular fa-arrow-up-right"></i>
                            </span>
                        </a>
                    </div>
                    <duv class="sv-context">
                        <div class="sv-text-type"><i class="fa-solid fa-circle"></i> Dịch vụ giám định</div>
                        <a href="#" class="sv-text-title">
                            Thử nghiệm chất lượng và an toàn của sản phẩm hàng hóa
                        </a>
                        <div class="sv-text-desc">
                            QUATEST 3 cung cấp dịch vụ thử nghiệm, phân tích chất lượng và tính an toàn đối với các loại sản phẩm,...
                        </div>
                    </duv>
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
<section class="section section-partners">
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
            <div class="partners-next-slide"><i class="fa-light fa-chevron-right"></i></div>
            <div class="partners-prev-slide"><i class="fa-light fa-chevron-left"></i></div>
        </div>
    </div>
</section>
@endsection