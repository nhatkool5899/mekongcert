@extends('layouts.page')

@section('banner')
<div class="banner">
    <div class="banner-page">
        <img src="https://isocert.org.vn/uploads/files/banner-chat-luong.jpg" alt="banner-about">
        <div class="container">
            <div class="banner-breadcrumbs">
                <h2 class="breadcrumbs-title">Dịch vụ</h2>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
    <section class="section">
        <div class="container">
            <div class="wrapper-services">
                <div class="services-desc">
                    MekongCert thực hiện các hoạt động nhằm cung cấp dịch vụ kỹ thuật theo các lĩnh vực tiêu chuẩn đo lường chất lượng phục vụ yêu cầu quản lý Nhà nước của các Bộ ngành; đáp ứng các yêu cầu kỹ thuật của tổ chức và doanh nghiệp, nâng cao chất lượng, tính an toàn của sản phẩm, hàng hóa và bảo vệ quyền lợi của người tiêu dùng.
                </div>
                <div class="services-sub">Dưới đây là thông tin chi tiết về tất cả các dịch vụ của MekongCert quý khách hàng có thể tham khảo tại đây.</div>
                <div class="sv-elementor">
                    <div class="sv-group">
                        <div class="sv-group-title">Dịch vụ thử nghiệm</div>
                        <div class="sv-group-list">
                            <div class="sv-group-item">
                                <a href="{{route('service_details')}}" class="sv-group-image">
                                    <img src="https://quatest3.com.vn/Content/UserImages/admin/[thumb]%20thu-nghiem.png" alt="image">
                                </a>
                                <div class="sv-group-context">
                                    <a href="{{route('service_details')}}" class="sv-group-name">Thử nghiệm chất lượng và an toàn của sản phẩm, hàng hóa</a>
                                    <div class="sv-group-desc">QUATEST 3 cung cấp dịch vụ thử nghiệm, phân tích chất lượng và tính an toàn đối với các loại sản phẩm, hàng hóa nhằm đáp ứng toàn diện các yêu cầu kỹ thuật đa dạng cho sản phẩm, hàng...</div>
                                </div>
                            </div>
                            <div class="sv-group-item">
                                <div class="sv-group-image">
                                    <img src="https://quatest3.com.vn/Content/UserImages/admin/[thumb]%20thuc-pham.jpg" alt="image">
                                </div>
                                <div class="sv-group-context">
                                    <div class="sv-group-name">Thử nghiệm chất lượng và an toàn của sản phẩm, hàng hóa</div>
                                    <div class="sv-group-desc">QUATEST 3 cung cấp dịch vụ thử nghiệm, phân tích chất lượng và tính an toàn đối với các loại sản phẩm, hàng hóa nhằm đáp ứng toàn diện các yêu cầu kỹ thuật đa dạng cho sản phẩm, hàng...</div>
                                </div>
                            </div>
                            <div class="sv-group-item">
                                <div class="sv-group-image">
                                    <img src="https://quatest3.com.vn/Content/UserImages/admin/[thumb]%20kiem-tra-giam-dinh.png" alt="image">
                                </div>
                                <div class="sv-group-context">
                                    <div class="sv-group-name">Thử nghiệm chất lượng và an toàn của sản phẩm, hàng hóa</div>
                                    <div class="sv-group-desc">QUATEST 3 cung cấp dịch vụ thử nghiệm, phân tích chất lượng và tính an toàn đối với các loại sản phẩm, hàng hóa nhằm đáp ứng toàn diện các yêu cầu kỹ thuật đa dạng cho sản phẩm, hàng...</div>
                                </div>
                            </div>
                            <div class="sv-group-item">
                                <div class="sv-group-image">
                                    <img src="https://quatest3.com.vn/Content/UserImages/admin/[thumb]%20dien-dien-tu.jpg" alt="image">
                                </div>
                                <div class="sv-group-context">
                                    <div class="sv-group-name">Thử nghiệm chất lượng và an toàn của sản phẩm, hàng hóa</div>
                                    <div class="sv-group-desc">QUATEST 3 cung cấp dịch vụ thử nghiệm, phân tích chất lượng và tính an toàn đối với các loại sản phẩm, hàng hóa nhằm đáp ứng toàn diện các yêu cầu kỹ thuật đa dạng cho sản phẩm, hàng...</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sv-group">
                        <div class="sv-group-title">Dịch vụ giám định</div>
                    </div>
                    <div class="sv-group">
                        <div class="sv-group-title">Dịch vụ đào tạo</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection