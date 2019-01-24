@extends('frontend.layout')
@include('frontend.partials.meta')
@section('content')
<section class="kl_main2 kl_main2_contact">
    <div class="kl_main_contact">
        <div class="kl_main_contact_ct">
            <h2 class="kl_text_contact">MỌI THẮC MẮC SẼ ĐƯỢC GIẢI ĐÁP QUA CÁC KÊNH SAU</h2>
            <div class="kl_qrCode">
                <a href="{{ $settingArr['zalo_group'] }}" target="_blank" title="QR Code"><img src="{{ URL::asset('assets/images/qrCode.png') }}" alt="QR Code"></a>
            </div>
            <a href="{{ $settingArr['zalo_group'] }}" class="kl_btn" target="_blank">
                <span>Nhấp Vào Đây</span>
            </a>

            <div class="kl_contactNow">
                <p><a href="{{ $settingArr['zalo_group'] }}" target="_blank" title="hỗ trợ trực tuyến"><span>Hoặc liên hệ ngay hỗ trợ trực tuyến tại đây.</span></a></p>
                 <div class="kl_contactNow_ct">
                    <ul>
                       <li>
                            <img src="{{ URL::asset('assets/images/ct_zalo.png') }}" alt="Zalo">
                            <span>{!! $settingArr['zalo'] !!}</span>
                        </li>
                       
                    </ul>                    
                </div>
            </div>
        </div>
        <a href="{!! $settingArr['zalo_group'] !!}" title="Zalo Lily Nguyễn" class="kl_girl" target="_blank">
            <img src="{{ URL::asset('assets/images/lily.png') }}" alt="Zalo Lily Nguyễn">
        </a>
    </div>
</section>
<!-- Main -->
@stop