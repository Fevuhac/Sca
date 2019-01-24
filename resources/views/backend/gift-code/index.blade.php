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
    <li><a href="{{ route( 'gift-code.index' ) }}">Số may mắn</a></li>
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
      <a href="{{ route('gift-code.create', ['gift_id' => $gift_id]) }}" class="btn btn-info btn-sm" style="margin-bottom:5px">Tạo mới</a>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Bộ lọc</h3>
        </div>
        <div class="panel-body">
          <form class="form-inline" role="form" method="GET" action="{{ route('gift-code.index') }}">  
            <div class="form-group">
                  <label for="email">Loại</label>
                  <select class="form-control" name="type" id="type">
                    <option value="">-- Tất cả --</option>
                    <option value="1" {{ $type == 1 ? "selected" : "" }}>CMC</option>
                    <option value="2" {{ $type == 2 ? "selected" : "" }}>PRE-SU</option>
                    <option value="3" {{ $type == 3 ? "selected" : "" }}>SU</option>
                    <option value="4" {{ $type == 4 ? "selected" : "" }}>DP</option>
                  </select>
                </div>
                        
            <div class="form-group">
              <label for="email">&nbsp;&nbsp;&nbsp;Quà</label>
              <select class="form-control" name="gift_id" id="gift_id">
                <option value="">--Tất cả--</option>
                @if( $giftList->count() > 0)
                  @foreach( $giftList as $value )
                  <option value="{{ $value->id }}" {{ $value->id == $gift_id ? "selected" : "" }}>{{ $value->name }}</option>
                  @endforeach
                @endif
                <option value="999" {{ 999 == $gift_id ? "selected" : "" }}>LOSING</option>
              </select>
            </div>    
            <div class="form-group">
                  <label for="email">Trạng thái</label>
                  <select class="form-control" name="status" id="status">
                    <option value="">-- Tất cả --</option>
                    <option value="1" {{ $status == 1 ? "selected" : "" }}>Chưa gán</option>
                    <option value="2" {{ $status == 2 ? "selected" : "" }}>Đã gán</option>
                    <option value="3" {{ $status == 3 ? "selected" : "" }}>Đã nhận quà</option>                    
                  </select>
                </div>           
            <div class="form-group">
              <label for="email">&nbsp;&nbsp;&nbsp;Số :</label>
              <input type="text" class="form-control" name="code" value="{{ $code }}">
            </div>
            <button type="submit" class="btn btn-default btn-sm">Lọc</button>
          </form>         
        </div>
      </div>
      <div class="box">

        <div class="box-header with-border">
          <h3 class="box-title">Danh sách ( <span class="value">{{ $items->total() }} số )</span></h3>
        </div>
        
        <!-- /.box-header -->
        <div class="box-body">
          <div style="text-align:center">
            {{ $items->appends( ['gift_id' => $gift_id, 'code' => $code, 'type' => $type] )->links() }}
          </div>  
          <table class="table table-bordered" id="table-list-data">
            <tr>
              <th style="width: 1%">#</th>              
              <th>Số may mắn</th>
              <th>Quà</th>
              <th>Trạng thái</th>
              <th width="1%;white-space:nowrap">Thao tác</th>
            </tr>
            <tbody>
            @if( $items->count() > 0 )
              <?php $i = 0; ?>
              @foreach( $items as $item )
                <?php $i ++; ?>
              <tr id="row-{{ $item->id }}">
                <td><span class="order">{{ $i }}</span></td>                             
                <td>                  
                  <a style="font-size:18px;color:" href="{{ route( 'gift-code.edit', [ 'id' => $item->id ]) }}">{{ $item->code }}</a>
                </td>
                <td>
                  @if($item->gift_id != 999)
                  {{ $item->gift->name }}
                  @else
                  LOSING
                  @endif
                  </td>
                  <td style="font-size: 18px">
                    @if($item->status == 1)
                      <label class="label label-default">Chưa gán</label>
                    @elseif($item->status == 2)
                      <label class="label label-info">Đã gán</label>
                    @elseif($item->status == 3)
                    <label class="label label-success">Đã nhận quà</label>
                    @endif
                  </td>
                <td style="white-space:nowrap"> 
                              
                  <a href="{{ route( 'gift-code.edit', [ 'id' => $item->id ]) }}" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil"></span></a>                 
                  
                  <a onclick="return callDelete('{{ $item->code }}','{{ route( 'gift-code.destroy', [ 'id' => $item->id ]) }}');" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
                  
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
            {{ $items->appends( ['gift_id' => $gift_id, 'code' => $code, 'type'=> $type] )->links() }}
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
  
  $('.select2').select2();
$('#gift_id, #type, #status').change(function(){
  $(this).parents('form').submit();
});

});

</script>
@stop