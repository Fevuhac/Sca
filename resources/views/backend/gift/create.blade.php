@extends('backend.layout')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Quà
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="{{ route('gift.index') }}">Quà</a></li>
      <li class="active">Tạo mới</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <a class="btn btn-default" href="{{ route('gift.index') }}" style="margin-bottom:5px">Quay lại</a>
    <form role="form" method="POST" action="{{ route('gift.store') }}">
    <div class="row">
      <!-- left column -->

      <div class="col-md-12">
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
                <div class="form-group" >
                  
                  <label>Tên quà<span class="red-star">*</span></label>
                  <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
                </div>
                <div class="form-group" >
                  
                  <label>Số lượng còn lại<span class="red-star">*</span></label>
                  <input type="text" class="form-control" name="amount" id="amount" value="{{ old('amount') }}">
                </div>
                <div class="form-group">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="top" value="1" {{ old('top') == 1 ? "checked" : "" }}>
                      TOP Quà
                    </label>
                  </div>               
                </div>
                <div class="form-group" >
                  
                  <label>Số sao</label>
                  <select class="form-control" name="star" id="star">
                    <option value="0">-- chọn --</option>
                    @for($i = 1; $i<=5; $i++)
                    <option value="{{ $i }}" {{ old('star') == $i ? "selected" : "" }}>{{ $i }}</option>
                    @endfor
                  </select>
                  
                </div>
                <div class="form-group" style="margin-top:10px;margin-bottom:10px">  
                  <label class="col-md-3 row">Hình </label>    
                  <div class="col-md-9">
                    <img id="thumbnail_image" src="{{ old('image_url') ? Helper::showImage(old('image_url')) : URL::asset('admin/dist/img/img.png') }}" class="img-thumbnail" width="145" height="85">                 
                    <button class="btn btn-default btn-sm btnSingleUpload" data-set="image_url" data-image="thumbnail_image" type="button"><span class="glyphicon glyphicon-upload" aria-hidden="true"></span> Upload</button>
                  </div>
                  <input type="hidden" name="image_url" id="image_url" value="{{ old('image_url') }}"/>
                  <div style="clear:both"></div>
              </div>  <!--image-->
                  <div class="form-group" style="margin-top:10px;margin-bottom:10px">  
                  <label class="col-md-3 row">Hình POPUP WIN </label>    
                  <div class="col-md-9">
                    <img id="thumbnail_image_popup" src="{{ old('popup_image_url') ? Helper::showImage(old('popup_image_url')) : URL::asset('admin/dist/img/img.png') }}" class="img-thumbnail" width="145" height="85">                 
                    <button class="btn btn-default btn-sm btnSingleUpload" data-set="popup_image_url" data-image="thumbnail_image_popup" type="button"><span class="glyphicon glyphicon-upload" aria-hidden="true"></span> Upload</button>
                  </div>
                  <input type="hidden" name="popup_image_url" id="popup_image_url" value="{{ old('popup_image_url') }}"/>
                  <div style="clear:both"></div>
              </div>  <!--image-->
            </div>              
            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Lưu</button>
              <a class="btn btn-default" class="btn btn-primary" href="{{ route('gift.index')}}">Hủy</a>
            </div>
            
        </div>
        <!-- /.box -->     

      </div>
    
      <!--/.col (left) -->      
    </div>
    </form>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<style type="text/css">
  .food-type{
        
        font-size: 18px;
        text-align: center;
        padding: 10px;
        font-weight: bold;
        margin-top: 20px;
         background-color: red;
    color:#FFF;
  }
  .food-group{
        color: blue;
        font-size: 15px;
        text-align: center;
        padding: 10px;
        font-weight: bold;
  }
  tr:hover{
    background-color: #f5f5f5;
  }
  .mon_chinh {
    height: 600px;
    overflow-y: scroll;
    margin-bottom: 15px;

  }
  .food_checkbox{
    display: none;
  }
  td.choose{
    width: 1%;
  }
</style>
@stop
@section('javascript_page')
<script type="text/javascript">
 
  $(document).on('click', '.noselect', function(){
      $(this).parents('td').find('.food_checkbox').prop('checked', 'checked');
      $(this).removeClass('btn-info noselect').addClass('btn-danger selected').html('Bỏ chọn');
      
      var price = $('#price').val() == '' ? 0 :parseInt($('#price').val()); 
      price = price + parseInt($(this).data('value'));
      $('#price').val(price);
    });
  $(document).on('click', '.selected', function(){
      $(this).parents('td').find('.food_checkbox').removeAttr('checked');
      $(this).removeClass('btn-danger selected').addClass('btn-info noselect').html('Chọn');

      var price = $('#price').val() == '' ? 0 :parseInt($('#price').val()); 
      price = price - parseInt($(this).data('value'));
      $('#price').val(price);      
    });
</script>
@stop