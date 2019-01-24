<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ URL::asset('admin/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{ Auth::user()->full_name }}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>   
      <li class="treeview {{ in_array(\Request::route()->getName(), ['gift-code.index', 'gift-code.create', 'gift-code.edit']) ? 'active' : '' }}">
        <a href="#">
          <i class="fa fa-pencil-square-o"></i> 
          <span>Số may mắn</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li {{ in_array(\Request::route()->getName(), ['gift-code.edit', 'gift-code.index']) ? "class=active" : "" }}><a href="{{ route('gift-code.index') }}"><i class="fa fa-circle-o"></i> Danh sách số</a></li>
          <li {{ in_array(\Request::route()->getName(), ['gift-code.create']) ? "class=active" : "" }} ><a href="{{ route('gift-code.create') }}"><i class="fa fa-circle-o"></i> Thêm số</a></li>        
        </ul>
       
      </li>   
      <li class="treeview {{ in_array(\Request::route()->getName(), ['gift.index', 'gift.create', 'gift.edit']) ? 'active' : '' }}">
        <a href="#">
          <i class="fa fa-pencil-square-o"></i> 
          <span>Giải thưởng</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li {{ in_array(\Request::route()->getName(), ['gift.edit', 'gift.index']) ? "class=active" : "" }}><a href="{{ route('gift.index') }}"><i class="fa fa-circle-o"></i> Danh sách quà</a></li>
          <li {{ in_array(\Request::route()->getName(), ['gift.create']) ? "class=active" : "" }} ><a href="{{ route('gift.create') }}"><i class="fa fa-circle-o"></i> Thêm quà</a></li>        
        </ul>
       
      </li>
      <li class="treeview {{ in_array(\Request::route()->getName(), ['articles.index', 'articles.create', 'articles.edit','articles-cate.create', 'articles-cate.index', 'articles-cate.edit']) ? 'active' : '' }}">
        <a href="#">
          <i class="fa fa-pencil-square-o"></i> 
          <span>Nội dung</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li {{ in_array(\Request::route()->getName(), ['articles.edit', 'articles.index']) ? "class=active" : "" }}><a href="{{ route('articles.index') }}"><i class="fa fa-circle-o"></i> Nội dung</a></li>
          <li {{ in_array(\Request::route()->getName(), ['articles.create']) ? "class=active" : "" }} ><a href="{{ route('articles.create', ['cate_id' => 1]) }}"><i class="fa fa-circle-o"></i> Thêm nội dung</a></li>
          <li {{ in_array(\Request::route()->getName(), ['articles-cate.create', 'articles-cate.index', 'articles-cate.edit']) ? "class=active" : "" }} ><a href="{{ route('articles-cate.index') }}"><i class="fa fa-circle-o"></i> Danh mục</a></li>          
        </ul>
       
      </li>
      <li class="treeview {{ in_array(\Request::route()->getName(), ['customer.index', 'customer.create', 'customer.edit']) ? 'active' : '' }}">
        <a href="#">
          <i class="fa fa-pencil-square-o"></i> 
          <span>Danh sách nhận số</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li {{ in_array(\Request::route()->getName(), ['customer.edit', 'customer.index']) && isset($type) && $type == 1 ? "class=active" : "" }}><a href="{{ route('customer.index') }}?type=1"><i class="fa fa-circle-o"></i> KHÁCH</a></li>
          <li {{ in_array(\Request::route()->getName(), ['customer.edit', 'customer.index'])&& isset($type) && $type == 2 ? "class=active" : "" }}><a href="{{ route('customer.index') }}?type=2"><i class="fa fa-circle-o"></i> MEMBER</a></li>
          <li {{ in_array(\Request::route()->getName(), ['customer.create']) ? "class=active" : "" }} ><a href="{{ route('customer.create') }}"><i class="fa fa-circle-o"></i> Thêm khách hàng</a></li>     
        </ul>
       
      </li> 
        
      
     <li class="{{ in_array(\Request::route()->getName(), ['settings.index']) ? 'active' : '' }}">
        <a href="{{ route('settings.index') }}">
          <i class="fa  fa-gears"></i>
          <span>Cài đặt</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
<style type="text/css">
  .skin-blue .sidebar-menu>li>.treeview-menu{
    padding-left: 15px !important;
  }
</style>