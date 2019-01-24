@extends('frontend.layout')
@include('frontend.partials.meta')
@section('content')  
<div class="lucky-wrap">
    <div class="randomizer-wrap">
        <div class="random-input">
            <span><input type="text" autocomplete="off" id="code" maxlength="5" class="number" placeholder="Nhập số ở đây"></span>
        </div>
        <div class="number-run-wrap">
            <div class="number-box">
                <div class="number-list">
                    <span class="number">0</span>
                    <span class="number">0</span>
                    <span class="number">0</span>
                    <span class="number">0</span>
                    <span class="number">0</span>
                </div>
            </div>
        </div>
        <div class="run-btn-wrap">
            <div class="run-box">
                <span><button id="btnQuayNgay">QUAY NGAY</button></span>
            </div>
        </div>

        <div class="get-number-wrap">
            <p class="get-number-wrap_title">
                <img src="{{ URL::asset('assets/images/ban-chua-co-so.png') }}" alt="">
            </p>
            <a href="javascript:void(0)" id="btnNhanSo" class="kl_btn_home">
                <span>NHẬN TẠI ĐÂY</span>
            </a>
            <p class="get-number-wrap_text">CHỊU KHÓ QUAY TAY VẬN MAY SẼ ĐẾN</p>
        </div>
    </div>
</div> 
@stop