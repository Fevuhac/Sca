@extends('frontend.layout')
@include('frontend.partials.meta')
@section('content')
<div class="main">
    <div class="kl_bonus_game clearfix">
        <div class="kl_slide">
            <h2 class="kl_title">
                <img src="{{ URL::asset('assets/images/thuong_game_tet.png') }}" alt="">
            </h2>
            <div class="kl_desktop">
                <div class="kl_content">
                    <div class="owl-carousel" data-dots="false" data-nav="true" data-margin="0" data-items='1'
                        data-autoplayTimeout="700" data-autoplay="true" data-loop="true">
                        <div class="item">
                            <a href="#" data-toggle="modal" data-target="#btnNhanSo">
                                <img src="{{ URL::asset('assets/images/slider/1.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="{{ URL::asset('assets/images/slider/2.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="{{ URL::asset('assets/images/slider/3.jpg') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="kl_mobile">
                <ul class="list_gift">
                    <li class="item">
                        <a href="#">
                            <img src="{{ URL::asset('assets/images/slider/1.jpg') }}" alt="">
                        </a>
                    </li>
                    <li class="item">
                        <a href="#">
                            <img src="{{ URL::asset('assets/images/slider/2.jpg') }}" alt="">
                        </a>
                    </li>
                    <li class="item">
                        <a href="#">
                            <img src="{{ URL::asset('assets/images/slider/3.jpg') }}" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="kl_slide">
            <h2 class="kl_title">
                <img src="{{ URL::asset('assets/images/thuong_game_tet2.png') }}" alt="">
            </h2>
            <div class="kl_desktop">
                <div class="kl_content">
                    <div class="owl-carousel" data-dots="false" data-nav="true" data-margin="0" data-items='1'
                        data-autoplayTimeout="700" data-autoplay="true" data-loop="true">
                        <div class="item">
                            <img src="{{ URL::asset('assets/images/slider/4.jpg') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ URL::asset('assets/images/slider/5.jpg') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ URL::asset('assets/images/slider/6.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="kl_mobile">
                <ul class="list_gift">
                    <li class="item">
                        <a href="#">
                            <img src="{{ URL::asset('assets/images/slider/4.jpg') }}" alt="">
                        </a>
                    </li>
                    <li class="item">
                        <a href="#">
                            <img src="{{ URL::asset('assets/images/slider/5.jpg') }}" alt="">
                        </a>
                    </li>
                    <li class="item">
                        <a href="#">
                            <img src="{{ URL::asset('assets/images/slider/6.jpg') }}" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@stop