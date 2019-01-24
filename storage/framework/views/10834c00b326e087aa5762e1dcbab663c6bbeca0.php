<div class="modal fade kl_activeLoad" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered kl_modal" role="document">
        <div class="modal-content">
            <div class="kl_modal_bg">
                <div class="kl_btn_close_modal2">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img src="<?php echo e(URL::asset('assets/images/btn_close.png')); ?>">
                    </button>
                </div>
                <p class="txt_modal_home kl_mobile"><img src="<?php echo e(URL::asset('assets/images/KLUCKY-homepage-popUp_mb.png')); ?>" alt=""></p>
                <div class="content">
                    <?php echo $__env->make('frontend.partials.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
            </div>
        </div>
    </div>
</div>