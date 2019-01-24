@extends('frontend.layout')
@include('frontend.partials.meta')
@section('content')
<section class="kl_main2 kl_main2_contact">
    <div class="kl_main_contact" style="min-height:400px;">
   
            <h2 class="kl_text_contact">Nhập đầy đủ thông tin để nhận số</h2>
            
			
				<div class="kl_formInformation kl_modal_information_home">
					<form method="POST" action="{{ route('send-contact-2') }}" id="contactForm">
						{{ csrf_field() }}						
						<div class="form-group row">
							<label for="username" class="col-sm-4 col-form-label kl_form_name">Tên Truy Cập K8:</label>
							<div class="col-sm-8 kl_form_field">  
								<input type="text" class="form-control kl_form_input requireds" id="username" placeholder="Vui lòng nhập tên truy cập K8 nếu có..." name="username" autocomplete="off">
								<label class="required">Vui lòng nhập tên truy cập</label>
							</div>
						</div>
						
					   <!--  <div class="form-group row">
							<label for="inputPassword" class="col-sm-4 col-form-label"></label>
							<div class="col-sm-8 kl_form_field">
								<div class="form-inline">
									<div class="kl_form_name form-inline_col px-4 text-right">Từ  Ngày</div>
									<div class="kl_form_name form-inline_col px-4 text-right">Đến Ngày</div>
								</div>
							</div>
						</div> -->						
						<div class="form-group row">
							<label class="col-sm-4 col-form-label kl_form_name"></label>
							<div class="col-sm-8 kl_form_field">
								<div class="text-center">
									<button type="button" id="btnSend2" class="kl_btn">
										<span>GỬI ĐI</span>
									</button>
								</div>
							</div>
						</div>
					</form>
					<div class="line">
						<img src="{{ URL::asset('assets/images/line.png') }}" alt="line">
					</div>
					<div class="kl_register">
						<p class="text-center kl_text_while">Bạn chưa có tên truy cập hoặc mã giao dịch ?</p>
						<div class="btn-group">
							<a href="{!! $settingArr['facebook_messenger'] !!}" class="kl_btn mr-3" target="_blank">
								<span>CLICK NGAY</span>
							</a>
							<a href="{!! $settingArr['zalo_group'] !!}" class="kl_btn" target="_blank">
								<span>LIÊN HỆ LILY</span>
							</a>
						</div>
					</div>
				</div>
		
   
      
    </div>
</section>
<!-- Main -->
@stop