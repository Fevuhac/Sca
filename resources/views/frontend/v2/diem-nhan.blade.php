@extends('frontend.layout')
@include('frontend.partials.meta')
@section('content')
<div class="main">
    <div class="kl_highlight clearfix">
        <div class="kl_highlight-left">
            <div class="highlight-left-content">
                <h2 class="title">
                    <span class="kl_desktop"><img src="{{ URL::asset('assets/images/title_highlight.png') }}" alt="Về chương trình KLUCKY - sự kiện đặc biệt"></span>
                    <span class="kl_mobile"><img src="{{ URL::asset('assets/images/title_highlight_mb.png') }}" alt="Về chương trình KLUCKY - sự kiện đặc biệt"></span>
                </h2>
                <div class="kl_sty_description">
                    <p>
                        {!! $content1['content'] !!}
                    </p>
                </div>
                <div class="kl_btn2 kl_btn_bird text-right">
                    <a href="{{ route('su-kien-hot') }}" title="SỰ KIỆN HOT">
                        <img src="{{ URL::asset('assets/images/btn_event_hot.png') }}" alt="Sự Kiện Hot">
                    </a>
                </div>
            </div>
        </div>
        <div class="kl_highlight-center">
            <div class="highlight-center-content">
                <div class="kl_clip_frame">
                    <div class="box">
                        <iframe src="https://www.youtube.com/embed/ytgGnSH8gkw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="kl_content">
                    <div class="kl_clip_frame_text">
                        <div class="kl_sty_description">                              
                            {!! $content2['content'] !!}
                        </div>                        
                    </div>
                    <span class="kl_scroll"><img src="{{ URL::asset('assets/images/scroll.png') }}" alt="Scroll nội dung"></span>
                </div>
            </div>
        </div>
        <div class="kl_highlight-right">
            <div class="highlight-center-content">
                <img src="{{ URL::asset('assets/images/Model.png') }}" alt="Người mẫu">
            </div>
        </div>
    </div>
</div>
@stop