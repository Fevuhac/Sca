@extends('backend.layout')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Số may mắn   
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="{{ route('gift-code.index') }}">Số may mắn</a></li>
      <li class="active">Tạo mới</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <a class="btn btn-default btn-sm" href="{{ route('gift-code.index') }}" style="margin-bottom:5px">Quay lại</a>
    <form role="form" method="POST" action="{{ route('gift-code.store') }}">
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
                  <label for="email">Loại <span class="red-star">*</span></label>
                  <select class="form-control" name="type" id="type">
                    <option value="">-- chọn --</option>
                    <option value="1" {{ old('type') == 1 ? "selected" : "" }}>CMC</option>
                    <option value="2" {{ old('type') == 2 ? "selected" : "" }}>PRE-SU</option>
                    <option value="3" {{ old('type') == 3 ? "selected" : "" }}>SU</option>
                    <option value="4" {{ old('type') == 4 ? "selected" : "" }}>DP</option>
                  </select>
                </div> 
                <div class="form-group">
                  <label for="email">Quà <span class="red-star">*</span></label>
                  <select class="form-control" name="gift_id" id="gift_id">
                    <option value="">-- chọn --</option>
                    @if( $giftList->count() > 0)
                      @foreach( $giftList as $value )
                      <option value="{{ $value->id }}" {{ $value->id == old('gift_id', $gift_id) ? "selected" : "" }}>{{ $value->name }}</option>
                      @endforeach
                    @endif
                  </select>
                </div>                           
                
                <div class="form-group" >
                  
                  <label>Số may mắn ( cách nhau bằng dấu "," )<span class="red-star">*</span></label>
                  <textarea class="form-control" rows="6" name="code_str" id="code_str" value="{{ old('code_str') }}"></textarea>
                </div>
               
                  
            </div>            
            <div class="box-footer">
              <button type="submit" class="btn btn-primary btn-sm">Lưu</button>
              <a class="btn btn-default btn-sm" class="btn btn-primary btn-sm" href="{{ route('gift-code.index')}}">Hủy</a>
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
