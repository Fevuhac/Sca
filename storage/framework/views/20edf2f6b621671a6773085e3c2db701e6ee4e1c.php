<?php echo $__env->make('frontend.partials.meta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
<div class="main">
    <div class="kl_artist kl_page-text clearfix">
        <p class="kl_banner">
            <span class="kl_desktop"><img src="<?php echo e(URL::asset('assets/images/banner_artist.png')); ?>" alt="Banner tranh tài"></span>
            <span class="kl_mobile"><img src="<?php echo e(URL::asset('assets/images/banner_artist_mobile.png')); ?>" alt="Banner tranh tài"></span>
        </p>
        <div class="kl_content">
            <span class="kl_gif"><img src="<?php echo e(URL::asset('assets/images/GIF/ThanTaiNhayNhay.gif')); ?>" alt="Thần tài may mắn"></span>
            <div class="kl_main_text">
                <p class="kl_artist_tittle_mb kl_mobile">
                    <img src="<?php echo e(URL::asset('assets/images/artist_mobile.png')); ?>" alt="Tranh tài">
                    <img class="kl_artist_tittle_mb_gif" src="<?php echo e(URL::asset('assets/images/GIF/ThanTaiNhayNhay.gif')); ?>" alt="Thần tài">
                </p>
                <p class="kl_sty_description">
                    <img src="<?php echo e(URL::asset('assets/images/tranhtai.jpg')); ?>" alt="Nội dung chương trình">
                </p>
            </div>
            <span class="kl_scroll"><img src="<?php echo e(URL::asset('assets/images/scroll.png')); ?>" alt="Thanh scroll"></span>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>