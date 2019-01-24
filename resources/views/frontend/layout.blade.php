<!DOCTYPE html>
<html lang="vi">

<head>
    <title>@yield('title')</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index,follow" />
    <meta http-equiv="content-language" content="vi" />
	<meta name="google-site-verification" content="BXVRZ2u5FO_AXbwc143C2O6nbM5pQZO8r8FdGAHGbgU" />
    <meta name="description" content="@yield('site_description')" />        
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('site_description')" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:site_name" content="quaysodoithuong.com" />    
    <meta property="og:image" content="https://quaysodoithuong.com/assets/images/Logo.png" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="@yield('site_description')" />
    <meta name="twitter:title" content="@yield('title')" />
    <meta name="twitter:image" content="https://quaysodoithuong.com/assets/images/Logo.png" />
    <meta name="robots" content="index,follow" />
    <link rel="icon" href="{{ URL::asset('assets/favicon.ico') }}" type="image/x-icon">  
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/run_css.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/lib/jquery-ui/jquery-ui.min.css') }}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <link href='css/animations-ie-fix.css' rel='stylesheet'>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    {!! $settingArr['google_analystic'] !!}
</head>
<body @if($routeName != 'home') class="kl_child" @else id="kl_home" @endif @if($routeName == "thuong-game-khung") id="kl_bonus_game" @endif>
    @include('frontend.partials.header-v2') 
    <div id="Zoom">
        @if($routeName == "home")
        <div class="kl_background_home">            
            <div class="wrapper">                       
                @yield('content') 
            </div>
        </div>
        @else
            @yield('content')
        @endif
    </div>
    @include('frontend.modal.modal-'.$routeName)
    @if($routeName == "home")
    <section class="kl_fixed">
        <div class="kl_item">
            <span class="kl_btnclose">X</span>
            <a href="{{ route('tranh-tai') }}">
                <img src="{{ URL::asset('assets/images/GIF/KM-casino.gif') }}" alt="">
            </a>
        </div>
        <div class="kl_item">
            <span class="kl_btnclose">X</span>
            <a href="{{ route('iphone') }}" title="Sự kiện iPhone XS Max">
                <img src="{{ URL::asset('assets/images/GIF/KM-iphoneXSMAX.gif') }}" alt="">
            </a>
        </div>
    </section>
    <!-- kl_fixed -->
    <section class="kl_Cherry-MaiVang">
        <img src="{{ URL::asset('assets/images/GIF/Cherry-MaiVang.png') }}" alt="Mai vàng">
    </section>
    @endif
    
    @if($routeName == "ban-ca")
    <section class="kl_Cherry-MaiVang2 kl_desktop">
        <img src="{{ URL::asset('assets/images/Cherry-MaiVang.png') }}" alt="Mai vàng">
    </section>
    <section class="kl_Cherry-MaiVang2 kl_mobile">
        <img src="{{ URL::asset('assets/images/maivang2.gif') }}" alt="Hoa mai">
    </section>
    <!-- kl_Cherry-MaiVang -->
    <section class="kl_Gril kl_desktop">
        <img src="{{ URL::asset('assets/images/Girl_highlight.png') }}" alt="Hot girl">
    </section>
    @endif
    @if($routeName == "thuong-game-khung")
    <section class="kl_Cherry-MaiVang2 kl_desktop">
        <img src="{{ URL::asset('assets/images/Cherry-MaiVang.png') }}" alt="">
    </section>
    @endif
    <!-- Facebook -->
    <!-- Modal -->
    <div class="modal fade" id="sendSuccessModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog modal-dialog-centered kl_modal" role="document">
            <div class="modal-content kl_modal_content kl_modal_betterlucknexttime kl_modal_submit">
                <div class="kl_btn_close_modal">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img src="{{ URL::asset('assets/images/kl_close_modal.png') }}" alt="close">
                    </button>
                </div>
                <div class="modal-body">
                    <p class="kl_modal_title text-center kl_modal_title_size">
                        Chúng tôi nhận được thông tin thành công<br>Ban Tổ Chức sẽ liên hệ lại Quý Khách<br>Trong thời gian không quá 24 giờ.
                    </p>
                    <div class="kl_modal_video">
                        <iframe id="success_video" width="550" height="350" src="https://www.youtube.com/embed/{{ $settingArr['youtube_id'] }}?rel=0" frameborder="0" allowfullscreen id="load_video" allow=""></iframe>
                    </div>
                    <p class="text-center kl_text_while">ĐỪNG BỎ QUA ĐẠI HỘI QUAY SỐ CÙNG 500 ANH EM NGÀY 28/12! <br>THAM GIA NGAY! </p>
                     <div class="line">
                        <img src="{{ URL::asset('assets/images/line.png') }}" alt="Line">
                    </div>
                    <p class="text-center">
                        <a href="{!! $settingArr['zalo_group'] !!}" target="_blank" class="kl_btn mt-5">
                            <span>LIÊN HỆ LILY</span>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
	@if($routeName != 'dang-ky')
    <div class="modal fade show" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog modal-dialog-centered kl_modal" role="document">
            <div class="modal-content kl_modal_content kl_modal_information kl_modal_information_home">
                <div class="kl_btn_close_modal">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img src="{{ URL::asset('assets/images/kl_close_modal.png') }}">
                    </button>
                </div>
                <div class="modal-body">
                    <p class="kl_modal_title text-center kl_modal_title_size">
                        Nhập đầy đủ thông tin để nhận số
                    </p>
                    <div class="kl_formInformation">
                        <form method="POST" action="{{ route('send-contact') }}" id="contactForm">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <label for="fullname" class="col-sm-4 col-form-label kl_form_name">Họ và Tên :</label>
                                <div class="col-sm-8 kl_form_field">  
                                    <input type="text" class="form-control kl_form_input requireds" id="fullname" placeholder="Vui lòng nhập họ và tên..." name="fullname" autocomplete="off">
                                    <label class="required">Vui lòng nhập họ và tên</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phonenumber" class="col-sm-4 col-form-label kl_form_name">Số Điện Thoại / Zalo :</label>
                                <div class="col-sm-8 kl_form_field"> 
                                    <input type="text" class="form-control kl_form_input requireds number" id="phone" maxlength="10" placeholder="Vui lòng nhập số điện thoại..." name="phone" autocomplete="off"><label class="required">Vui lòng nhập số điện thoại</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-4 col-form-label kl_form_name">Email :</label>
                                <div class="col-sm-8 kl_form_field">
                                    
                                    <input type="email" class="form-control kl_form_input requireds" id="email" placeholder="Vui lòng nhập địa chỉ email" name="email" autocomplete="off">
                                    <label class="required">Email không hợp lệ.</label>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label kl_form_name"></label>
                                <div class="col-sm-8 kl_form_field">
                                    <div class="text-center">
                                        <button type="button" id="btnSend" class="kl_btn">
                                            <span>GỬI ĐI</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="line">
                            <img src="{{ URL::asset('assets/images/line.png') }}" alt="line">
                        </div>
                        <div class="kl_register">
                            <p class="text-center kl_text_while">Bạn chưa có tên truy cập hoặc mã giao dịch ?</p>
                            <div class="btn-group">
                                <a href="{!! $settingArr['facebook_messenger'] !!}" class="kl_btn mr-3" target="_blank">
                                    <span>CLICK NGAY</span>
                                </a>
                                <a href="{!! $settingArr['zalo_group'] !!}" class="kl_btn" target="_blank">
                                    <span>LIÊN HỆ LILY</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	@endif
    <div class="modal fade" id="loseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered kl_modal" role="document">
            <div class="modal-content kl_modal_content kl_modal_betterlucknexttime">
                <div class="kl_btn_close_modal">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img src="{{ URL::asset('assets/images/kl_close_modal.png') }}">
                    </button>
                </div>
                <div class="modal-body">
                    <p class="kl_modal_title text-center kl_modal_title_size">
                        Cơ Hội Vẫn Còn !
                    </p>
                    <div class="kl_modal_video">
                        <iframe width="550" id="losing_video" height="350" src="https://www.youtube.com/embed/{{ $settingArr['youtube_id_losing'] }}?rel=0&loop=1" frameborder="0" allowfullscreen id="load_video" allow=""></iframe>
                    </div>
                    <p class="text-center kl_text_while">Hãy Giữ Số May Mắn Này Cho Đại Hội Quay Số Ngày 28/12</p>
                    <p class="text-center">
                        <a href="{!! $settingArr['facebook_messenger'] !!}" target="_blank" class="kl_btn">
                            <span>Nhận Thêm Số </span>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog modal-dialog-centered kl_modal" role="document">
            <div class="modal-content kl_modal_content kl_modal_prizes">
                <div class="kl_btn_close_modal">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img src="{{ URL::asset('assets/images/kl_close_modal.png') }}">
                    </button>
                </div>
                <div class="modal-body">
                    <p class="kl_modal_title text-center kl_modal_title_size">
                        Xin chúc mừng !
                    </p>
                    <p class="kl_modal_title text-center">
                        <img src="" alt="" id="success_image">
                    </p>
                    <p class="kl_numberGift">
                        <span class="kl_text_yellow" id="success_code"></span>
                    </p>
                    <p class="text-center">
                        <a href="{!! $settingArr['zalo_group'] !!}" target="_blank" class="kl_btn">
                            <span>Nhận thưởng</span>
                        </a>
                    </p>
                    <p class="text-center kl_text_while">ĐỪNG BỎ QUA ĐẠI HỘI QUAY SỐ CÙNG 500 ANH EM NGÀY 28/12! <br>THAM GIA NGAY!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog modal-dialog-centered kl_modal" role="document">
            <div class="modal-content kl_modal_content kl_modal_getNumber">
                <div class="kl_btn_close_modal">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img src="{{ URL::asset('assets/images/kl_close_modal.png') }}">
                    </button>
                </div>
                <div class="modal-body">
                    <p class="kl_modal_title text-center kl_modal_title_size mb-4">Quý Khách đã có số may mắn</p>
                    <p class="text-center">
                        <a href="{{ route('home') }}" title="Quay ngay" class="kl_btn">
                            <span>Quay ngay</span>
                        </a>
                    </p>
                    <p class="line mt-4 mb-5">
                        <img src="{{ URL::asset('assets/images/line.png') }}" alt="line">
                    </p>
                    <p class="kl_modal_title text-center kl_modal_title_size mb-4">Hoặc nhận số may mắn tại đây</p>
                    <p class="text-center">
                        <a href="javascript:void(0)" title="Nhận ngay" class="kl_btn btnNhanSo">
                            <span>Nhận ngay</span>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="wrongModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog modal-dialog-centered kl_modal" role="document">
            <div class="modal-content kl_modal_content kl_modal_getNumber">
                <div class="kl_btn_close_modal">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img src="{{ URL::asset('assets/images/kl_close_modal.png') }}">
                    </button>
                </div>
                <div class="modal-body">
                    <p class="kl_modal_title text-center kl_modal_title_size mb-4">Số Quý Khách đã nhập không đúng <br>Vui lòng kiểm tra tại đây</p>
                    <p class="text-center">
                        <a href="{{ route('huong-dan') }}" title="Kiểm tra ngay" class="kl_btn">
                            <span>Kiểm tra ngay</span>
                        </a>
                    </p>
                    <p class="line mt-4 mb-5">
                        <img src="{{ URL::asset('assets/images/line.png') }}" alt="line">
                    </p>
                    <p class="kl_modal_title text-center kl_modal_title_size mb-4">Hoặc liên hệ với Lily Nguyen</p>
                    <p class="text-center">
                        <a href="{!! $settingArr['zalo_group'] !!}" title="Hỗ trợ nhanh" target="_blank" class="kl_btn">
                            <span>Hỗ Trợ Nhanh</span>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- ===== JS ===== -->
    <script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
    <!-- Js Bootstrap -->
    <script src="{{ URL::asset('assets/lib/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ URL::asset('assets/lib/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- Js Slick -->
    <script src="{{ URL::asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('assets/lib/slick/slick.min.js') }}"></script>    
    <script src="{{ URL::asset('assets/lib/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ URL::asset('assets/lib/jquery-ui/jquery.ui.datepicker-vi-VN.js') }}"></script>    
    <!-- Js Common -->
    <script src="{{ URL::asset('assets/js/main.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.number.min.js') }}"></script>  
    <!-- ===== JS ===== -->
    
    <input type="hidden" value="{{ route('get-content') }}" id="route_get_content">
    <input type="hidden" value="{{ route('check-no') }}" id="route_check_no">
    @yield('js')
   <!--  <a title="Facebook Chat" class="fb-chat" target="_blank" href="http://bit.ly/quaysodoithuongCHAT">
    <span class="txt">HỖ TRỢ NHANH</span>
    <span class="img"><img src="https://cdn.worldvectorlogo.com/logos/facebook-messenger-white.svg" alt="Facebook Chat"></span>
</a> -->
<style>
.fb-chat {
    position: fixed;
    right: 20px;
    bottom: 20px;
    display: block;
    transition: box-shadow 150ms linear;
    text-align: center;
    color: #fff;
}
.fb-chat .txt {
    display: block;
    margin-bottom: 10px;
}
.fb-chat .img {
    width: 100px;
    height: 100px;
    display: flex;
    align-items: center;
    padding: 7px;
    text-align: center;
    margin: 0 auto;
    background: #0083ff;
}
.fb-chat:hover .img {
    box-shadow: 0 5px 24px rgb(217, 198, 191);
    transition: box-shadow 150ms linear;
}
</style>
</body>

</html>