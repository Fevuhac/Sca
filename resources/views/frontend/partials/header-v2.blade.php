<header class="kl_header">
        <div class="kl_header_ct">            
            <div class="kl_logo">
                <a href="{{ route('home') }}" title="Home">
                    <img src="{{ URL::asset('assets/images/Logo.png') }}" alt="Klucky" class="kl_logo_desktop">
                    <img src="{{ URL::asset('assets/images/logo_mobile.png') }}" alt="Klucky" class="kl_logo_mobile">
                </a>
                <span class="Lantern">
                    <img src="{{ URL::asset('assets/images/GIF/Lantern.gif') }}" alt="">
                </span>
            </div>
            <div class="kl_menu kl_menu_desktop">
                <ul class="kl_menu_content">
                    <li class="kl_menu_item"><a href="{{ route('home') }}" class="kl_menu_link @if($routeName == "home") kl_menu_active @endif" title="Trang Chủ">Trang Chủ</a></li>
                    <li class="kl_menu_item @if($routeName == "diem-nhan") kl_menu_active @endif">
                        <a href="{{ route('diem-nhan') }}" class="kl_menu_link" title="Điểm Nhấn">Điểm Nhấn</a>
                    </li>
                    <li class="kl_menu_item @if($routeName == "iphone") kl_menu_active @endif">
                        <a href="{{ route('iphone') }}" class="kl_menu_link " title="Sự Kiện Iphone XS Max">Sự Kiện Iphone XS Max</a>
                    </li>
                    <li class="kl_menu_item @if($routeName == "tranh-tai") kl_menu_active @endif">
                        <a href="{{ route('tranh-tai') }}" class="kl_menu_link" title="Tranh Tài 150 Triệu">Tranh Tài 150 Triệu</a>
                    </li>
                    <li class="kl_menu_item @if($routeName == "ban-ca") kl_menu_active @endif">
                        <a href="{{ route('ban-ca') }}" class="kl_menu_link" title="Bắn Cá Cực Vui">Bắn Cá Cực Vui</a>
                    </li>
                    <li class="kl_menu_item @if($routeName == "su-kien-hot") kl_menu_active @endif">
                        <a href="{{ route('su-kien-hot') }}" class="kl_menu_link" title="Sự Kiện Hot">
                            Sự Kiện Hot
                            <span class="kl_menu_item_icon">
                                <img src="{{ URL::asset('assets/images/swallow.png') }}" alt="Sự kiện HOT">
                            </span>
                        </a>
                    </li>
                    <li class="kl_menu_item @if($routeName == "thuong-game-khung") kl_menu_active @endif">
                        <a href="{{ route('thuong-game-khung') }}" class="kl_menu_link" title="Trang Chủ">Thưởng Game Khủng</a>
                    </li>
                </ul>
                @if($routeName == "thuong-game-khung")
                <span class="CauChucBenTrai">
                    <img src="{{ URL::asset('assets/images/GIF/CauChucBenTrai.gif') }}" alt="">
                </span>
                <span class="PhaoNoTungBung">
                    <img src="{{ URL::asset('assets/images/GIF/PhaoNoTungBung.gif') }}" alt="">
                </span>
                <span class="CauChucBenPhai">
                    <img src="{{ URL::asset('assets/images/GIF/CauChucBenPhai.gif') }}" alt="">
                </span>
                @endif
            </div>
            <div class="kl_menu_mobile">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        @if($routeName == "home")
                        Trang Chủ
                        @elseif($routeName == "iphone")
                        Sự Kiện iPhone XS Max
                        @elseif($routeName == "thuong-game-khung")
                        Thưởng Game Khủng
                        @elseif($routeName == "tranh-tai")
                        Tranh Tài 150 Triệu
                        @elseif($routeName == "ban-ca")
                        Bắn Cá Cực Vui
                        @elseif($routeName == "su-kien-hot")
                        Sự Kiện HOT
                        @elseif($routeName == "diem-nhan")
                        Điểm Nhấn
                        @endif
                        <span class="arrow">
                            <img src="{{ URL::asset('assets/images/arrow-down.png') }}" alt="menu">
                        </span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item @if($routeName == "home") dropdown-item-active @endif" href="{{ route('home') }}">Trang Chủ</a>
                        <a class="dropdown-item @if($routeName == "diem-nhan") dropdown-item-active @endif" " href="{{ route('diem-nhan') }}">Điểm Nhấn</a>
                        <a class="dropdown-item @if($routeName == "iphone") dropdown-item-active @endif" " href="{{ route('iphone') }}">Sự Kiện Iphone XS Max</a>
                        <a class="dropdown-item @if($routeName == "tranh-tai") dropdown-item-active @endif" " href="{{ route('tranh-tai') }}">Tranh Tài</a>
                        <a class="dropdown-item @if($routeName == "ban-ca") dropdown-item-active @endif" " href="{{ route('ban-ca') }}">Bắn Cá Cực Vui</a>
                        <a class="dropdown-item @if($routeName == "su-kien-hot") dropdown-item-active @endif" " href="{{ route('su-kien-hot') }}">Sự Kiện Hot</a>
                        <a class="dropdown-item @if($routeName == "thuong-game-khung") dropdown-item-active @endif" " href="{{ route('thuong-game-khung') }}">Thưởng Game Khủng</a>
                    </div>
                </div>
            </div>
        </div>
    </header>