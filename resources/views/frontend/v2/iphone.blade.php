@extends('frontend.layout')
@include('frontend.partials.meta')
@section('content')
<div class="main">
    <div class="kl_event kl_page-text clearfix">
        <p class="kl_banner">
            <span class="kl_desktop"><img src="{{ URL::asset('assets/images/banner_events.png') }}" alt="Đua nước rút, nhận iPhone"></span>
            <span class="kl_mobile"><img src="{{ URL::asset('assets/images/banner_events_mobile.png') }}" alt="Đua nước rút, nhận iPhone"></span>
        </p>
        <div class="kl_content">
            <span class="kl_gif"><img src="{{ URL::asset('assets/images/iphone.png') }}" alt="Quà tặng iPhone"></span>
            <div class="kl_main_text">
                <p class="kl_event_tittle_mb kl_mobile">
                    <img src="{{ URL::asset('assets/images/iphone_mobile.png') }}" alt="Iphone XS Max ">
                </p>
                <p class="kl_sty_description">
                    <img src="{{ URL::asset('assets/images/sukien.jpg') }}" alt="Iphone XS Max ">
                </p>
            </div>
            <span class="kl_scroll"><img src="{{ URL::asset('assets/images/scroll.png') }}" alt="Scroll"></span>
        </div>
    </div>
</div>
@stop