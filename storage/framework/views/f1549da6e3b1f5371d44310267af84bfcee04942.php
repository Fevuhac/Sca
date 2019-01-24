<header class="kl_header">
        <div class="kl_header_ct">            
            <div class="kl_logo">
                <a href="<?php echo e(route('home')); ?>" title="Home">
                    <img src="<?php echo e(URL::asset('assets/images/Logo.png')); ?>" alt="Klucky" class="kl_logo_desktop">
                    <img src="<?php echo e(URL::asset('assets/images/logo_mobile.png')); ?>" alt="Klucky" class="kl_logo_mobile">
                </a>
                <span class="Lantern">
                    <img src="<?php echo e(URL::asset('assets/images/GIF/Lantern.gif')); ?>" alt="">
                </span>
            </div>
            <div class="kl_menu kl_menu_desktop">
                <ul class="kl_menu_content">
                    <li class="kl_menu_item"><a href="<?php echo e(route('home')); ?>" class="kl_menu_link <?php if($routeName == "home"): ?> kl_menu_active <?php endif; ?>" title="Trang Chủ">Trang Chủ</a></li>
                    <li class="kl_menu_item <?php if($routeName == "diem-nhan"): ?> kl_menu_active <?php endif; ?>">
                        <a href="<?php echo e(route('diem-nhan')); ?>" class="kl_menu_link" title="Điểm Nhấn">Điểm Nhấn</a>
                    </li>
                    <li class="kl_menu_item <?php if($routeName == "iphone"): ?> kl_menu_active <?php endif; ?>">
                        <a href="<?php echo e(route('iphone')); ?>" class="kl_menu_link " title="Sự Kiện Iphone XS Max">Sự Kiện Iphone XS Max</a>
                    </li>
                    <li class="kl_menu_item <?php if($routeName == "tranh-tai"): ?> kl_menu_active <?php endif; ?>">
                        <a href="<?php echo e(route('tranh-tai')); ?>" class="kl_menu_link" title="Tranh Tài 150 Triệu">Tranh Tài 150 Triệu</a>
                    </li>
                    <li class="kl_menu_item <?php if($routeName == "ban-ca"): ?> kl_menu_active <?php endif; ?>">
                        <a href="<?php echo e(route('ban-ca')); ?>" class="kl_menu_link" title="Bắn Cá Cực Vui">Bắn Cá Cực Vui</a>
                    </li>
                    <li class="kl_menu_item <?php if($routeName == "su-kien-hot"): ?> kl_menu_active <?php endif; ?>">
                        <a href="<?php echo e(route('su-kien-hot')); ?>" class="kl_menu_link" title="Sự Kiện Hot">
                            Sự Kiện Hot
                            <span class="kl_menu_item_icon">
                                <img src="<?php echo e(URL::asset('assets/images/swallow.png')); ?>" alt="Sự kiện HOT">
                            </span>
                        </a>
                    </li>
                    <li class="kl_menu_item <?php if($routeName == "thuong-game-khung"): ?> kl_menu_active <?php endif; ?>">
                        <a href="<?php echo e(route('thuong-game-khung')); ?>" class="kl_menu_link" title="Trang Chủ">Thưởng Game Khủng</a>
                    </li>
                </ul>
                <?php if($routeName == "thuong-game-khung"): ?>
                <span class="CauChucBenTrai">
                    <img src="<?php echo e(URL::asset('assets/images/GIF/CauChucBenTrai.gif')); ?>" alt="">
                </span>
                <span class="PhaoNoTungBung">
                    <img src="<?php echo e(URL::asset('assets/images/GIF/PhaoNoTungBung.gif')); ?>" alt="">
                </span>
                <span class="CauChucBenPhai">
                    <img src="<?php echo e(URL::asset('assets/images/GIF/CauChucBenPhai.gif')); ?>" alt="">
                </span>
                <?php endif; ?>
            </div>
            <div class="kl_menu_mobile">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <?php if($routeName == "home"): ?>
                        Trang Chủ
                        <?php elseif($routeName == "iphone"): ?>
                        Sự Kiện iPhone XS Max
                        <?php elseif($routeName == "thuong-game-khung"): ?>
                        Thưởng Game Khủng
                        <?php elseif($routeName == "tranh-tai"): ?>
                        Tranh Tài 150 Triệu
                        <?php elseif($routeName == "ban-ca"): ?>
                        Bắn Cá Cực Vui
                        <?php elseif($routeName == "su-kien-hot"): ?>
                        Sự Kiện HOT
                        <?php elseif($routeName == "diem-nhan"): ?>
                        Điểm Nhấn
                        <?php endif; ?>
                        <span class="arrow">
                            <img src="<?php echo e(URL::asset('assets/images/arrow-down.png')); ?>" alt="menu">
                        </span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item <?php if($routeName == "home"): ?> dropdown-item-active <?php endif; ?>" href="<?php echo e(route('home')); ?>">Trang Chủ</a>
                        <a class="dropdown-item <?php if($routeName == "diem-nhan"): ?> dropdown-item-active <?php endif; ?>" " href="<?php echo e(route('diem-nhan')); ?>">Điểm Nhấn</a>
                        <a class="dropdown-item <?php if($routeName == "iphone"): ?> dropdown-item-active <?php endif; ?>" " href="<?php echo e(route('iphone')); ?>">Sự Kiện Iphone XS Max</a>
                        <a class="dropdown-item <?php if($routeName == "tranh-tai"): ?> dropdown-item-active <?php endif; ?>" " href="<?php echo e(route('tranh-tai')); ?>">Tranh Tài</a>
                        <a class="dropdown-item <?php if($routeName == "ban-ca"): ?> dropdown-item-active <?php endif; ?>" " href="<?php echo e(route('ban-ca')); ?>">Bắn Cá Cực Vui</a>
                        <a class="dropdown-item <?php if($routeName == "su-kien-hot"): ?> dropdown-item-active <?php endif; ?>" " href="<?php echo e(route('su-kien-hot')); ?>">Sự Kiện Hot</a>
                        <a class="dropdown-item <?php if($routeName == "thuong-game-khung"): ?> dropdown-item-active <?php endif; ?>" " href="<?php echo e(route('thuong-game-khung')); ?>">Thưởng Game Khủng</a>
                    </div>
                </div>
            </div>
        </div>
    </header>