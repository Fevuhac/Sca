@extends('backend.layout')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Cài đặt site
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="{{ route('settings.index') }}">Cài đặt</a></li>
      <li class="active">Cập nhật</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">   
    <form role="form" method="POST" action="{{ route('settings.update') }}">
    <div class="row">
      <!-- left column -->

      <div class="col-md-7">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Cập nhật</h3>
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
              @if(Session::has('message'))
              <p class="alert alert-info" >{{ Session::get('message') }}</p>
              @endif
                 <!-- text input -->
                <div class="form-group">
                  <label>Tên site <span class="red-star">*</span></label>
                  <input type="text" class="form-control" name="site_name" id="site_name" value="{{ $settingArr['site_name'] }}">
                </div>
                
                <div class="form-group">
                  <label>Facebook group</label>
                  <input type="text" class="form-control" name="facebook_group" id="facebook_group" value="{{ $settingArr['facebook_group'] }}">
                </div>
                <div class="form-group">
                  <label>Facebook messenger</label>
                  <input type="text" class="form-control" name="facebook_messenger" id="facebook_messenger" value="{{ $settingArr['facebook_messenger'] }}">
                </div>
                <div class="form-group">
                  <label>Zalo group</label>
                  <input type="text" class="form-control" name="zalo_group" id="zalo_group" value="{{ $settingArr['zalo_group'] }}">
                </div>
                <div class="form-group">
                  <label>Youtube video ID</label>
                  <input type="text" class="form-control" name="youtube_id" id="youtube_id" value="{{ $settingArr['youtube_id'] }}">
                </div>
                <div class="form-group">
                  <label>LINE ID</label>
                  <input type="text" class="form-control" name="line" id="line" value="{{ $settingArr['line'] }}">
                </div>
                <div class="form-group">
                  <label>Wechat</label>
                  <input type="text" class="form-control" name="wechat" id="wechat" value="{{ $settingArr['wechat'] }}">
                </div>
                <div class="form-group">
                  <label>Zalo</label>
                  <input type="text" class="form-control" name="zalo" id="zalo" value="{{ $settingArr['zalo'] }}">
                </div>
                <div class="form-group">
                  <label>Viber</label>
                  <input type="text" class="form-control" name="viber" id="viber" value="{{ $settingArr['viber'] }}">
                </div>
                <div class="form-group">
                  <label>Whatsapp</label>
                  <input type="text" class="form-control" name="whatsapp" id="whatsapp" value="{{ $settingArr['whatsapp'] }}">
                </div>
                <div class="form-group">
                  <label>LIÊN HỆ NGAY HỖ TRỢ TRỰC TUYẾN</label>
                  <input type="text" class="form-control" name="link_register" id="link_register" value="{{ $settingArr['link_register'] }}">
                </div>
                <div class="form-group">
                  <label>Số người đã nhận quà</label>
                  <input type="text" class="form-control" name="so_nguoi_trung" id="so_nguoi_trung" value="{{ $settingArr['so_nguoi_trung'] }}">
                </div>
                <div class="form-group">
                  <label>Code google analystic </label>
                  <textarea class="form-control" name="google_analystic" id="google_analystic"  rows="6">{!! $settingArr['google_analystic'] !!}</textarea>
                </div>   
            </div>                        
            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Lưu</button>         
            </div>
            
        </div>
        <!-- /.box -->     

      </div>
      <div class="col-md-5">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Thông tin SEO</h3>
          </div>
          <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
                <label>Meta title <span class="red-star">*</span></label>
                <input type="text" class="form-control" name="site_title" id="site_title" value="{{ $settingArr['site_title'] }}">
              </div>
              <!-- textarea -->
              <div class="form-group">
                <label>Meta desciption <span class="red-star">*</span></label>
                <textarea class="form-control" rows="4" name="site_description" id="site_description">{{ $settingArr['site_description'] }}</textarea>
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

@stop
@section('javascript_page')
@stop
