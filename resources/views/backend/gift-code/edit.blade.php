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
      <li class="active">Cập nhật</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <a class="btn btn-default btn-sm" href="{{ route('gift-code.index', ['type' => $detail->type, 'gift_id' => $detail->gift_id]) }}" style="margin-bottom:5px">Quay lại</a> 
    <form role="form" method="POST" action="{{ route('gift-code.update') }}">
    <div class="row">
      <!-- left column -->
      <input name="id" value="{{ $detail->id }}" type="hidden">
      <div class="col-md-9">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            Chỉnh sửa
          </div>
          <!-- /.box-header -->               
            {!! csrf_field() !!}

            <div class="box-body">
              @if(Session::has('message'))
              <p class="alert alert-info" >{{ Session::get('message') }}</p>
              @endif
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
                    <option value="1" {{ old('type', $detail->type) == 1 ? "selected" : "" }}>CMC</option>
                    <option value="2" {{ old('type', $detail->type) == 2 ? "selected" : "" }}>PRE-SU</option>
                    <option value="3" {{ old('type', $detail->type) == 3 ? "selected" : "" }}>SU</option>
                    <option value="4" {{ old('type', $detail->type) == 4 ? "selected" : "" }}>DP</option>
                  </select>
                </div>            
                <div class="form-group">
                  <label for="email">Quà <span class="red-star">*</span></label>
                  <select class="form-control" name="gift_id" id="gift_id">
                    <option value="">-- chọn --</option>
                    @if( $giftList->count() > 0)
                      @foreach( $giftList as $value )
                      <option value="{{ $value->id }}" {{ $value->id == $detail->gift_id ? "selected" : "" }}>{{ $value->name }}</option>
                      @endforeach
                    @endif
                  </select>
                </div>                           
                
                <div class="form-group" >
                  
                  <label>Số may mắn <span class="red-star">*</span></label>
                  <input type="text" class="form-control number" maxlength="5" name="code" id="code" value="{{ old('code', $detail->code) }}" readonly="readonly">
                </div>
                
                <input type="hidden" id="editor" value="content">
                  
            </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-primary btn-sm">Lưu</button>
              <a class="btn btn-default btn-sm" class="btn btn-primary btn-sm" href="{{ route('gift-code.index',['type' => $detail->type, 'gift_id' => $detail->gift_id])}}">Hủy</a>
            </div>
            
        </div>
        <!-- /.box -->     

      </div>
      <div class="col-md-3">       

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
<script type="text/javascript">
  $(document).ready(function(){
      $(".select2").select2();
     
      
    });
    
</script>
@stop
