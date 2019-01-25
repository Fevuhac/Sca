<form method="POST" action="{{ route('send-contact-3') }}" id="getInfomatio" class="getInfoForm">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="username" class="col-form-label kl_form_name">Họ và Tên :</label>
        <div class="kl_form_field">
            <input type="text" class="form-control kl_form_input requireds" id="full_name" name="full_name" placeholder="">
            <label class="required">Vui lòng nhập họ và tên</label>
        </div>
    </div>
    <div class="form-group">
        <label for="phonenumber" class="col-form-label kl_form_name">Số Điện Thoại/ Zalo :</label>
        <div class="kl_form_field">
            <input type="text" class="form-control kl_form_input requireds" id="phone" name="phone" placeholder="">
            <label class="required">Vui lòng nhập số điện thoại</label>
        </div>
    </div>
    <input type="hidden" name="route" value="{{ $routeName }}">
    <div class="form-group">
        <label for="email" class="col-form-label kl_form_name">Email :</label>
        <div class="kl_form_field">
            <input type="Email" class="form-control kl_form_input requireds" id="email" name="email" placeholder="">
            <label class="required">Email không hợp lệ.</label>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 col-form-label kl_form_name"></label>
        <div class="kl_form_field">
            <div class="text-center">
                <button type="button" class="kl_btn btnSend3">
                    <span>Gửi đi</span>
                </button>
            </div>
        </div>
    </div>
</form>