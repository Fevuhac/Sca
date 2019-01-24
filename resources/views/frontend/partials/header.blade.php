<header class="kl_header">
    <div class="kl_header_ct">
        <div class="kl_logo">
            <a href="{{ route('home') }}" title="Home">
                <img src="{{ URL::asset('assets/images/Logo.png') }}" alt="Klucky" class="kl_logo_desktop">
                <img src="{{ URL::asset('assets/images/logo_mobile.png') }}" alt="Klucky" class="kl_logo_mobile">
            </a>
        </div>
        <div class="kl_menu kl_menu_desktop">
            <ul class="kl_menu_content">
                <li class="kl_menu_item"><a href="{{ route('home') }}" class="kl_menu_link @if($routeName == "home") kl_menu_active @endif" title="Trang Chủ">Trang Chủ</a></li>
                <li class="kl_menu_item"><a href="{{ route('co-cau-giai') }}" class="kl_menu_link @if($routeName == "co-cau-giai") kl_menu_active @endif" title="Cơ Cấu Giải">Cơ Cấu Giải</a></li>
                <li class="kl_menu_item"><a href="{{ route('the-le') }}" class="kl_menu_link @if($routeName == "the-le") kl_menu_active @endif" title="Thể Lệ">Thể Lệ</a></li>
                <li class="kl_menu_item"><a href="{{ route('huong-dan') }}" class="kl_menu_link @if($routeName == "huong-dan") kl_menu_active @endif" title="Hướng Dẫn">Hướng Dẫn</a></li>
                <li class="kl_menu_item"><a href="{{ route('contact') }}" class="kl_menu_link @if($routeName == "contact") kl_menu_active @endif" title="Liên Hệ">Liên Hệ</a></li>
            </ul>
        </div>
        <div class="kl_menu_mobile">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @if($routeName == "home")
                    Trang Chủ
                    @elseif($routeName == "co-cau-giai")
                    Cơ Cấu Giải                    
                    @elseif($routeName == "the-le")
                    Thể Lệ
                    @elseif($routeName == "huong-dan")
                    Hướng Dẫn
                    @elseif($routeName == "contact")
                    Liên Hệ
                    @endif
                    <span class="arrow">
                        <img src="{{ URL::asset('assets/images/arrow-down.png') }}" alt="">
                    </span>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item @if($routeName == "home") dropdown-item-active @endif" href="{{ route('home') }}">Trang Chủ</a>
                    <a class="dropdown-item @if($routeName == "co-cau-giai") dropdown-item-active @endif" href="{{ route('co-cau-giai') }}">Cơ Cấu Giải</a>
                    <a class="dropdown-item @if($routeName == "the-le") dropdown-item-active @endif" href="{{ route('the-le') }}">Thể Lệ</a>
                    <a class="dropdown-item @if($routeName == "huong-dan") dropdown-item-active @endif" href="{{ route('huong-dan') }}">Hướng Dẫn</a>
                    <a class="dropdown-item @if($routeName == "contact") dropdown-item-active @endif" href="{{ route('contact') }}">Liên Hệ</a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header -->