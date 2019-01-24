@extends('frontend.layout')
@include('frontend.partials.meta')
@section('content')
<section class="kl_main2">
    <p class="text-center mb-3 kl_rewards_title">
        <span>Đã có {{ $settingArr['so_nguoi_trung'] }} người may mắn nhận quà</span>
    </p>
    <div class="kl_slider">
        <div class="kl_autoplay kl_autoplay_style">
            @foreach($giftList as $gift)
            @if($gift->top == 1)
            <div class="kl_slide_item">
                <div class="kl_slide_item_ct">
                    <div class="kl_starGift">
                        @for($i = 0; $i<$gift->star; $i++)
                        <span class="fa fa-star"></span>
                        @endfor
                    </div>
                    <img src="{{ Helper::showImage($gift->image_url) }}" class="kl_imgGift" alt="{!! $gift->name !!}">
                    <p class="kl_nameGift">{!! $gift->name !!}</p>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
    <!-- kl_slider -->

    <p class="text-center my-3 kl_rewards_title kl_rewards_title2">
        <span>CHỊU KHÓ QUAY TAY, VẬN MAY SẼ ĐẾN</span>
    </p>
    <div class="kl_listGift">
        <div class="kl_listGift_ct">
        <div class="row">
            @foreach($giftList as $gift)
            <div class="col-md-4 kl_Giftitem">
                <div class="kl_itemGift mb-2">
                    <div class="kl_ctGift">
                        <span class="kl_amountGift">Vẫn còn : {{ number_format($gift->amount) }}</span>
                        <img src="{{ Helper::showImage($gift->image_url) }}" class="kl_imgGift" alt="{!! $gift->name !!}">
                        <p class="kl_nameGift">{!! $gift->name !!}</p>
                    </div>
                    <div class="kl_btn_gr">
                        <div class="kl_table">
                            <div class="kl_tablecell text-center">
                                <a href="javascript:void(0)" class="kl_btn_item btnNhanSo" title="{!! $gift->name !!}">
                                    <span>Nhận ngay!</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        </div>
    </div>
    <!-- kl_listGift -->
</section>
@stop
@section('js')

@stop