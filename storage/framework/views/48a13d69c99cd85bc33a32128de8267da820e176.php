<div class="modal fade kl_activeLoad" tabindex="-1" role="dialog" aria-labelledby="">
    <div class="modal-dialog modal-dialog-centered kl_modal" role="document">
        <div class="modal-content">
            <div class="kl_modal_events kl_modal_artist">
                <div class="kl_btn_close_modal2">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img src="<?php echo e(URL::asset('assets/images/btn_close.png')); ?>">
                    </button>
                </div>
                <div class="content">
                    <?php echo $__env->make('frontend.partials.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
                <p class="kl_itemGif">
                    <img src="<?php echo e(URL::asset('assets/images/GIF/KM-iphoneXSMAX.gif')); ?>" alt="">
                </p>
            </div>
        </div>
    </div>
</div>