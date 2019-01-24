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
    <li><a href="{{ route( 'gift.index' ) }}">Quà</a></li>
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
      <a href="{{ route('gift.create') }}" class="btn btn-info" style="margin-bottom:5px">Tạo mới</a>
      
      <div class="box">

        <div class="box-header with-border">
          <h3 class="box-title">Danh sách ( <span class="value">{{ $items->total() }} quà )</span></h3>
        </div>
        
        <!-- /.box-header -->
        <div class="box-body">
            
          <table class="table table-bordered" id="table-list-data">
            <tr>
              <th style="width: 1%">#</th>  
               <th width="150">Thumbnail</th>                          
              <th>Tên quà</th>
              <th class="text-right">Số lượng</th>              
              <th>Số sao</th>              
              <th width="1%;white-space:nowrap">Thao tác</th>
            </tr>
            <tbody>
            @if( $items->count() > 0 )
              <?php $k = 0; ?>
              @foreach( $items as $item )
                <?php $k ++; ?>
                
              <tr id="row-{{ $item->id }}">
                <td><span class="order">{{ $k }}</span></td>      
                 <td>                  
                  <img class="img-thumbnail" src="{{ Helper::showImage($item->image_url)}}" width="145">
                </td>       
                <td>                  
                  <a href="{{ route( 'gift.edit', [ 'id' => $item->id ]) }}">{{ $item->name }}</a>
                  @if($item->top == 1)
                  <label class="label label-danger">TOP</label>
                  @endif
                </td>                               
                 <td class="text-right">{{ number_format($item->amount) }}</td>
                 <td>{{ number_format($item->star) }}</td>
                <td style="white-space:nowrap">                  
                  <a href="{{ route( 'gift.edit', [ 'id' => $item->id ]) }}" class="btn btn-warning  btn-sm">Chỉnh sửa</a>                 
                  
                  <a onclick="return callDelete('{{ $item->name }}','{{ route( 'gift.destroy', [ 'id' => $item->id ]) }}');" class="btn btn-danger btn-sm">Xóa</a>                
                  
                </td>
              </tr> 
              @endforeach
            @else
            <tr>
              <td colspan="3">Không có dữ liệu.</td>
            </tr>
            @endif

          </tbody>
          </table>
           
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
</script>
@stop