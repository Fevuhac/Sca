<?php echo $__env->make('frontend.partials.meta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
<div class="main">
    <div class="kl_events_hot clearfix">
        <div class="kl_box">
            <a href="#" title="">
                <img src="<?php echo e(URL::asset('assets/images/GIF/Cao3La-ChoiNgay.gif')); ?>" alt="">
            </a>
            <a href="#" title="">
                <img src="<?php echo e(URL::asset('assets/images/GIF/Cao3La-NhanVeThamGia.gif')); ?>" alt="">
            </a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>