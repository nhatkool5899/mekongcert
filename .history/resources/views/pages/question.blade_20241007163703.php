@extends('layouts.page')

@section('banner')
<div class="banner">
    <div class="banner-page">
        <img src="https://www.quatest3.com.vn/Content/UserImages/admin/Q-A.png" alt="banner-question">
        <div class="container">
            <div class="banner-breadcrumbs">
                <h2 class="breadcrumbs-title">Hỏi đáp</h2>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="details-head">
    <div class="container">
        <div class="details-title">
            <h2>Các câu hỏi thường gặp</h2>
        </div>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="box-question">
            <ul class="list-question">
                    
                <li class="item-question">
                    <span class="stt-icon">1.</span>
                    <div class="item-question-body">
                        <div class="item-question-title">
                            <span class="title">Thí nghiệm và thử nghiệm</span>
                            <span class="show-answer active"><i class="fa-solid fa-plus"></i></span>
                            <span class="hide-answer"><i class="fa-solid fa-minus"></i></span>
                        </div>

                        <div class="item-answer">
                            Thí nghiệm, hay thực nghiệm, là một bước trong phương pháp khoa học dùng để phân minh giữa mô hình khoa học hay giả thuyết. Một thí nghiệm thường có mục đích chính là kiểm tra giả thuyết. Tuy nhiên, thí nghiệm cũng được dùng để kiểm chứng câu hỏi hoặc kiểm tra kết quả trước đó. 

                            (Theo Wikipedia Tiếng Việt)<br>
                            
                            Thử nghiệm là thao tác kỹ thuật nhằm xác định một hay nhiều đặc tính của đối tượng cụ thể (sản phẩm, hàng hóa, thiết bị....) theo một quy trình nhất định.
                            
                            (Theo Luật Chất lượng Sản phẩm hàng hóa số 05/2007/QH12 ngày 21 tháng 11 năm 2007)<br>
                            
        
                            Thử nghiệm là việc xác định một hoặc một số đặc tính kỹ thuật đo lường của phương tiện đo, chuẩn đo lường.
                            
                            (Theo Luật Đo lường số 04/2011/QH13 ngày 11 tháng 11 năm 2011)<br>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</section>

@endsection
