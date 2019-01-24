@extends('backend.layout')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Khách hàng nhận số    
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="{{ route('customer.index') }}">Khách hàng nhận số</a></li>
      <li class="active">Tạo mới</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <a class="btn btn-default btn-sm" href="{{ route('customer.index') }}?type=1" style="margin-bottom:5px">Quay lại</a>
    <form role="form" method="POST" action="{{ route('customer.store') }}">
    <div class="row">
      <!-- left column -->

      <div class="col-md-8">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Tạo mới</h3>
          </div>
          <!-- /.box-header -->               
            {!! csrf_field() !!}

            <div class="box-body">
              @if (count($errors) > 0)
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif                
                <div class="form-group">
                  <label for="email">Tên truy cập </label>
                  <input type="text" name="username" id="username" value="{{ old('username') }}" class="form-control">
                </div> 
                <div class="form-group">
                  <label for="email">Số điện thoại/Zalo</label>
                  <input type="text" name="phone" id="phone" value="{{ old('phone') }}" class="form-control number" maxlength="20">
                </div> 
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" name="email" id="email" value="{{ old('email') }}" class="form-control">
                </div> 
                <div class="form-group">
                  <label for="email">CMND</label>
                  <input type="text" name="cmnd" id="cmnd" value="{{ old('cmnd') }}" class="form-control">
                </div> 
                <div class="form-group">
                  <label for="email">Cách Quy Đổi </label>
                  <select class="form-control" name="type" id="type">
                    <option value="">-- chọn --</option>
                    <option value="1" {{ old('type') == 1 ? "selected" : "" }}>Quy Đổi Tiền Gửi</option>
                    <option value="2" {{ old('type') == 2 ? "selected" : "" }}>Quy Đổi Tiền Thua Cược</option>
                  </select>
                </div>                     
                <div class="row">
                    <div class="form-group col-md-6">
                      <label for="email">Từ ngày </label>
                      <input type="text" name="date_from" id="date_from" value="{{ old('date_from') }}" class="form-control datepicker">
                    </div> 
                    <div class="form-group col-md-6">
                      <label for="email">Đến ngày </label>
                      <input type="text" name="date_to" id="date_to" value="{{ old('date_to') }}" class="form-control datepicker">
                    </div> 
                </div>                   
                <div class="form-group">
                  <label>Số may mắn</label>
                  <select class="form-control select2" name="so_may_man[]" id="so_may_man" multiple="multiple">                  
                    @if( $codeList->count() > 0)
                      @foreach( $codeList as $value )
                      <option value="{{ $value->id }}" {{ (old('so_may_man') && in_array($value->id, old('so_may_man'))) ? "selected" : "" }}>{{ $value->code }}-{{ $value->gift->name }}</option>
                      @endforeach
                    @endif
                  </select>                 
                </div>
				        <div class="form-group">
                  <label>Nhiều số may mắn ( cách nhau dấu , )</label>
                  <textarea class="form-control" rows="5" name="multi_number"></textarea>        
                </div>
            </div>            
            <div class="box-footer">
              <button type="submit" class="btn btn-primary btn-sm">Lưu</button>
              <a class="btn btn-default btn-sm" class="btn btn-primary btn-sm" href="{{ route('customer.index')}}?type=1">Hủy</a>
            </div>
            
        </div>
        <!-- /.box -->     

      </div>
      <div class="col-md-3">
        
      <!--/.col (left) -->      
    </div>
    </form>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
@stop
@section('javascript_page')
<script type="text/javascript">
$(document).ready(function(){
  $(".select2").select2();
  $('.datepicker').datepicker({     
      dateFormat: 'mm/dd/yy'
    });
  $("textarea.number").keydown(function (e) {
    // Allow: backspace, delete, tab, escape, enter and .
    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110]) !== -1 ||
         // Allow: Ctrl+A, Command+A
        (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
         // Allow: home, end, left, right, down, up
        (e.keyCode >= 35 && e.keyCode <= 40)) {
             // let it happen, don't do anything
             return;
    }
    // Ensure that it is a number and stop the keypress
    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
        e.preventDefault();
    }
});
 
  
});
    
</script>
@stop
