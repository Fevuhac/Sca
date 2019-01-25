@extends('backend.layout')
@section('content')
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Liên hệ
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="{{ route( 'customer.index') }}">Khách hàng nhận số</a></li>
    <li class="active">Danh sách</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      @if(Session::has('message'))
      <p class="alert alert-info" >{{ Session::get('message') }}</p>
      @endif           
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Bộ lọc</h3>
        </div>
        <div class="panel-body">
          <form class="form-inline" role="form" method="GET" action="{{ route('contact.index') }}" id="frmContact">                
       
            <div class="form-group">
              <label for="name">Email :</label>
              <input type="text" class="form-control" name="email" value="{{ $email }}">
            </div>
            <div class="form-group">
              <label for="name">&nbsp;&nbsp;Phone :</label>
              <input type="text" class="form-control" name="phone" value="{{ $phone }}">
            </div>
            
            <div class="form-group">
              <label for="name">&nbsp;&nbsp;Trang :</label>
              <select class="form-control" name="route" id="route">
                <option value="">--Tất cả--</option>
                <option value="home" {{ $route == 'home'  ? "selected" : "" }}>Trang chủ</option>
                <option value="diem-nhan" {{ $route == 'diem-nhan'  ? "selected" : "" }}>Điểm nhấn</option>
                <option value="iphone" {{ $route == 'iphone'  ? "selected" : "" }}>Sự kiện iPhone XS Max</option>
                <option value="tranh-tai" {{ $route == 'tranh-tai'  ? "selected" : "" }}>Tranh tài 150 triệu</option>
                <option value="ban-ca" {{ $route == 'ban-ca'  ? "selected" : "" }}>Bắn cá cực vui</option>
              </select>
            </div>			     
            <button type="submit" class="btn btn-default">Lọc</button>
          </form>         
        </div>
      </div>
      <div class="box">

        <div class="box-header with-border">
          <h3 class="box-title">Danh sách ( <span class="value">{{ $items->total() }} liên hệ )</span></h3>
        </div>
        
        <!-- /.box-header -->
        <div class="box-body">
        <!-- <a href="{{ route('customer.export') }}" class="btn btn-info btn-sm" style="margin-bottom:5px;float:right" target="_blank">Export</a> -->
          <div style="text-align:center">
            {{ $items->appends( ['email' => $email, 'phone' => $phone, 'route' => $route] )->links() }}
          </div>
          <table class="table table-bordered" id="table-list-data">
            <tr>
              <th style="width: 1%">#</th>                           
           
              <th width="250">Họ tên</th>              
              <th>Email</th>
              <th>Số điện thoại</th>              
              <th width="10%">Thời gian gửi</th>
             
              <th width="1%;" style="white-space:nowrap">Thao tác</th>
            </tr>
            <tbody>
            @if( $items->count() > 0 )
              <?php $i = 0; ?>
              @foreach( $items as $item )
                <?php $i ++; ?>
              <tr id="row-{{ $item->id }}">
                <td><span class="order">{{ $i }}</span></td>                   
                <td>                  
                  
                  @if($item->full_name)
                  {{ $item->full_name }}</br>
                  @endif
                </td>          
                
                <td>
                  @if($item->email)
                  <a href="{{ route( 'customer.edit', [ 'id' => $item->id ]) }}">{{ $item->email }}</a>
                  @endif
                </td>
                
                <td>
                  @if($item->phone)
                  {{ $item->phone }}</br>
                  @endif
                </td>
                
                <td style="white-space:nowrap">{{ date('d-m-Y H:i', strtotime($item->created_at)) }}</td>
               
                <td style="white-space:nowrap;text-align: right;">                  
                  <!-- <a href="{{ route( 'customer.edit', [ 'id' => $item->id ]) }}" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil"></span></a> -->
                  <a onclick="return callDelete('{{ $item->phone }}','{{ route( 'customer.destroy', [ 'id' => $item->id ]) }}');" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
                  
                </td>
              </tr> 
              @endforeach
            @else
            <tr>
              <td colspan="9">Không có dữ liệu.</td>
            </tr>
            @endif

          </tbody>
          </table>
          <div style="text-align:center">
            {{ $items->appends( ['email' => $email, 'phone' => $phone, 'route' => $route] )->links() }}
          </div>  
        </div>        
      </div>
      <!-- /.box -->     
    </div>
    <!-- /.col -->  
  </div> 
</section>
<!-- /.content -->
</div>
@stop
@section('javascript_page')
<script type="text/javascript">
function callDelete(name, url){  
  swal({
    title: 'Bạn muốn xóa "' + name +'"?',
    text: "Dữ liệu sẽ không thể phục hồi.",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes'
  }).then(function() {
    location.href= url;
  })
  return flag;
}
$(document).ready(function(){
  $('#status, #type').change(function(){
    $('#frmContact').submit();
  });
  
});
</script>
@stop