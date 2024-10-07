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

            <div class="about-wrapper about-box">
                <div class="about-tab">
                    <div class="about-tab-item" data-title="wrapper-1">Chính sách chất lượng</div>
                    <div class="about-tab-item" data-title="wrapper-2">Chính sách bảo mật</div>
                    <div class="about-tab-item" data-title="wrapper-3">Chính sách khách quan</div>
                    <div class="about-tab-item" data-title="wrapper4">Chính sách an toàn</div>
                </div>
                <div class="about-content">
                    <div class="wraptext wrapper-1 active">
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
                            <h3>2. CAM KẾT CỦA LÃNH ĐẠO TRUNG TÂM KỸ THUẬT 3</h3>
                            <p>Để Chính sách chất lượng nêu trên được thực hiện, Lãnh đạo QUATEST 3 cam kết:</p>
                            <ul>
                                <li>Thiết lập, áp dụng và duy trì có hiệu lực và hiệu quả Hệ thống quản lý năng lực/ chất lượng phù hợp với các tiêu chuẩn về hệ thống (ISO 9001, ISO/IEC 17020, ISO/IEC 17021, ISO/IEC 17025, ISO 17034, ISO/IEC 17043, ISO/IEC 17065,...) cho từng lĩnh vực hoạt động của QUATEST 3;</li>
                                <li>Xây dựng cho mỗi thành viên trong QUATEST 3 có ý thức sâu sắc rằng uy tín và sự phát triển của QUATEST 3 gắn liền với chất lượng, tiến độ thực hiện công việc và xem đó là trách nhiệm, đạo đức nghề nghiệp của  mình;</li>
                                <li>Nâng cao năng lực và tính chuyên nghiệp của các thành viên theo từng lĩnh vực hoạt động thông qua đào tạo;</li>
                                <li>Cung cấp các nguồn lực cần thiết để thực hiện dịch vụ theo đúng các yêu cầu xác định đã cam kết với Khách hàng và các Bên liên quan/ quan tâm.</li>
                            </ul>
                            <p>Đại diện lãnh đạo có trách nhiệm phối hợp với Phụ trách các đơn vị phổ biến Chính sách này đến từng thành viên trong đơn vị, xác định Mục tiêu chất lượng và an toàn - sức khỏe nghề nghiệp nhất quán với Chính sách chất lượng, tổ chức thực hiện, duy trì và cải tiến thường xuyên các hệ thống quản lý được áp dụng, các quá trình và dịch vụ, sản phẩm theo phương thức PDCA (Hoạch định - Thực hiện - Kiểm tra - Hành động).</p>
                        </div>
                    </div>
                    <div class="wraptext wrapper-2">
                        <div class="about-content-title">Chính sách bảo mật</div>
                        <div class="about-content-btn">Tải văn bản</div>
                        <div class="about-content-desc">
                            QUATEST 3 cam kết đảm bảo rằng tính bảo mật của tất cả thông tin liên quan đến khách hàng và nhân viên của mình được bảo vệ trong các hoạt động, bao gồm chứng nhận, giám định, thí nghiệm, thử nghiệm thành thạo, sản xuất mẫu chuẩn, tư vấn và các hoạt động khác của mình. Điều này áp dụng cho tất cả các cấp của tổ chức, bao gồm Ban giám đốc, các thành viên trực tiếp tham gia các hoạt động (như Chuyên gia đánh giá chứng nhận, Giám định viên, Thí nghiệm viên, Kiểm định viên, Hiệu chuẩn viên, Chuyên gia tư vấn, Giảng viên), các thành viên tham gia gián tiếp (như tiếp nhận đăng ký, xem xét yêu cầu, thẩm xét, đảm bảo chất lượng) và Hội đồng chứng nhận.
                        </div>

                        <div class="about-content-text">
                            <p>Thông tin thu được từ các nguồn khác ngoài khách hàng, ví dụ, một khiếu nại liên quan đến khách hàng, sẽ được coi là bí mật.</p>
                            <p>Để duy trì tính bảo mật, QUATEST 3 có các biện pháp sau:</p>
                            <ul>
                                <li>Tất cả các cấp của tổ chức gồm các thành viên tham gia trực tiếp và gián tiếp đều ký cam kết bảo mật (bao gồm Hội đồng chứng nhận) và các thỏa thuận có hiệu lực pháp lý khác có liên quan.</li>
                                <li>Quá trình chuyển giao thông tin đều đảm bảo yêu cầu bảo mật</li>
                                <li>Quy trình phân loại tài liệu, yêu cầu ghi nhãn tất cả các thông tin bí mật.</li>
                                <li>Quyền kiểm soát truy cập chặt chẽ trên tất cả hồ sơ nhân sự và khách hàng.</li>
                            </ul>
                            <p>Trong trường hợp QUATEST 3 được yêu cầu công bố thông tin công khai, những điều sau đây sẽ được áp dụng:</p>
                            <ul>
                                <li>Nếu bất kỳ thông tin nào liên quan đến khách hàng được đưa vào nội dung công khai, khách hàng sẽ được thông báo bằng văn bản..</li>
                                <li>Không được tiết lộ thông tin cho bên thứ 3, trừ trường hợp được yêu cầu bởi các tiêu chuẩn (như TCVN ISO/IEC 17020, TCVN ISO 17021-1, TCVN ISO/IEC 17025, TCVN ISO 17043, TCVN ISO 17034, TCVN ISO/IEC 17065).</li>
                            </ul>
                            <p>Nếu luật pháp yêu cầu chúng tôi tiết lộ thông tin, chúng tôi sẽ thông báo cho khách hàng hoặc cá nhân có liên quan, trừ trường hợp điều này bị cấm bởi luật pháp.</p>
                        </div>
                    </div>
                    <div class="wraptext wrapper-3">
                        <div class="about-content-title">Chính sách khách quan</div>
                        <div class="about-content-btn">Tải văn bản</div>
                        <div class="about-content-desc">
                            QUATEST 3 đảm bảo tính khách quan và độc lập đối với quá trình cung cấp dịch vụ (bao gồm nhưng không giới hạn ở chứng nhận, giám định, thí nghiệm, thử nghiệm thành thạo, sản xuất mẫu chuẩn, đào tạo, tư vấn, cung cấp giải pháp năng suất chất lượng) để tìm cách đạt được mức tin cậy cao nhất và sự tin tưởng của tất cả các bên liên quan trong các hoạt động của chúng tôi.
                        </div>
                    </div>
                    <div class="wraptext wrapper-4">
                        <div class="about-content-title">Chính sách an toàn</div>
                        <div class="about-content-btn">Tải văn bản</div>
                        <div class="about-content-desc">
                            QUATEST 3 cam kết cung cấp dịch vụ trong phạm vi trách nhiệm tuân thủ các điều kiện làm việc an toàn, ngăn ngừa chấn thương và bệnh tật liên quan đến công việc của người lao động nhằm đảm bảo phù hợp với mục đích và bối cảnh của QUATEST 3. Cụ thể:
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