<div class="modal fade" id="showForm" tabindex="-1" role="dialog" aria-labelledby="showForm">
    <div class="modal-dialog modal-dialog-centered kl_modal" role="document">
        <div class="modal-content">
            <div class="kl_modal_shoot-fish">
                <div class="kl_btn_close_modal2">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img src="<?php echo e(URL::asset('assets/images/btn_close.png')); ?>">
                    </button>
                </div>
                <div class="content">
                    <?php echo $__env->make('frontend.partials.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>                    
                    <p class="text-gift-code">**Nhập thông tin nhận VIP CODE</p>
                </div>
            </div>
        </div>
    </div>
</div>