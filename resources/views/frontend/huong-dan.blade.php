@extends('frontend.layout')
@include('frontend.partials.meta')
@section('content')
<section class="kl_main2">
    <div class="kl_content clearfix">
        <div class="kl_content_left">
            <ul class="kl_site_menu_desktop">
                <?php $i = 0; ?>
                @foreach($contentList as $content)
                <?php $i++; ?>
                <li class="kl_content_item @if($i == 1) kl_content_item_active @endif">
                    <a data-id="{{ $content->id }}" href="javascript:void(0)" title="{!! $content->title !!}" class="kl_content_link load-content">{!! $content->title !!}</a>
                </li>
                @endforeach                
            </ul>
            <div class="kl_site_menu_mobile">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="title-page">{!! ($contentList->first()->title) !!}</span>
                        <span class="arrow">
                            <img src="{{ URL::asset('assets/images/arrow-down.png') }}" alt="">
                        </span>
                    </button>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        @foreach($contentList as $content)                        
                        <a class="dropdown-item load-content" href="javascript:void(0)"  data-id="{{ $content->id }}">{!! $content->title !!}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- kl_content_left -->
        <div class="kl_content_right">
            <div class="kl_content_ct">
                <h2 class="kl_content_ct_head text-center mb-3">
                    <span class="title-page">{!! strip_tags($contentList->first()->title) !!}</span>
                    <span class="line">
                        <img src="{{ URL::asset('assets/images/line.png') }}" height="1" width="840" alt="">
                    </span>
                </h2>
                <div id="content-page">
                {!! $contentList->first()->content !!}
                </div>
            </div>
        </div>
        <!-- kl_content_right -->
    </div>
</section>
@stop
@section('js')

@stop