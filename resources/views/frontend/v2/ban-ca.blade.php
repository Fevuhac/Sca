@extends('frontend.layout')
@include('frontend.partials.meta')
@section('content')
<div class="main">
    <div class="kl_shoot_fish clearfix">
        <h2 class="kl_title kl_desktop"><img src="{{ URL::asset('assets/images/title_shoot-fish.png') }}" alt=""></h2>
        <div class="kl_content kl_desktop">
            <div class="kl_wrap_content">
                <iframe src="https://cache.download.banner.greatfortune88.com/flash/110/launchcasino.html?language=en&nolobby=1&game=cashfi&mode=offline&fbclid=IwAR0TSZwu6LDWVjS48b90RU7vcDYyfJ7AUiNSE0MgdMHkveXlOaQT9o38res#cashfi" frameborder='0' allowfullscreen></iframe>
            </div>
            <div id="kl_closeshot">
                <img src="{{ URL::asset('assets/images/kl_close_modal.png') }}" alt="">
            </div>
            <!-- kl_closeshot -->
        </div>
        <div class="kl_gif_shoot">
            <div class="kl_banner kl_mobile">
                <div class="kl_item">
                    <span class="kl_btnclose">X</span>
                    <a href="#" title="">
                        <img src="{{ URL::asset('assets/images/GIF/zKLUCKY-MOBILE-BANCAMUAXUAN-popUpGAME.gif') }}" alt="">
                    </a>
                </div>
            </div>
            <section class="kl_fixed kl_bcRutGon kl_mobile">
                <div class="kl_item">
                    <span class="kl_btnclose">X</span>
                    <a href="javascript(0)" title="Show Form" data-toggle="modal" data-target="#showForm">
                        <img src="{{ URL::asset('assets/images/GIF/KLUCKY-BANCAMUAXUAN-popUp-RutGon.gif') }}" alt="">
                    </a>
                </div>
            </section>
            <!-- kl_fixed -->
            <div class="kl_thantai kl_mobile">
                <img src="{{ URL::asset('assets/images/GIF/ThanTaiNhayNhay.gif') }}" alt="">
            </div>
        </div>
    </div>
</div>
@stop