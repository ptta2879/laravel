<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Minton - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
        <meta content="Coderthemes" name="author">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{url('images\favicon.ico')}}">

        <!-- Footable css -->
        <link href="{{url('assets\libs\footable\footable.core.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{url('assets\assets\libs\jquery-vectormap\jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css">
<link href="{{url('assets\libs\bootstrap-tagsinput\bootstrap-tagsinput.css')}}" rel="stylesheet">
        <link href="{{url('assets\libs\switchery\switchery.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{url('assets\libs\multiselect\multi-select.css')}}" rel="stylesheet" type="text/css">
        <link href="{{url('assets\libs\select2\select2.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{url('assets\libs\bootstrap-select\bootstrap-select.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{url('assets\libs\bootstrap-touchspin\jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet">
        <!-- App css -->
        <link href="{{url('assets\css\bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{url('assets\css\icons.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{url('assets\css\app.min.css')}}" rel="stylesheet" type="text/css">

    </head>

    <body>
        <div id="preloader">
            <div id="status">
                <div class="bouncingLoader"><div></div><div></div><div></div></div>
            </div>
        </div>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">

                    <li class="d-none d-sm-block">
                        <form class="app-search">
                            <div class="app-search-box">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <div class="input-group-append">
                                        <button class="btn" type="submit">
                                            <i class="fe-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </li>
                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="index.html" class="logo text-center">
                        <span class="logo-lg">
                            <img src="{{url('images\logo-light.png')}}" alt="" height="20">
                            <!-- <span class="logo-lg-text-light">Xeria</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-sm-text-dark">X</span> -->
                            <img src="{{url('images\logo-sm.png')}}" alt="" height="24">
                        </span>
                    </a>
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="button-menu-mobile waves-effect waves-light">
                            <i class="fe-menu"></i>
                        </button>
                    </li>
        
                    
                </ul>
            </div>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <li class="menu-title">Chức Năng</li>
                            <li>
                                <a href=" {{url('admin/Home')}}" class="waves-effect" aria-expanded="false">
                                    <i class=" remixicon-dashboard-line"></i>
                                    <span> Trang Chủ </span>
                                </a>
                                
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class=" remixicon-product-hunt-line"></i>
                                    <span> Sản Phẩm </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level mm-collapse" aria-expanded="false" style="">
                                    
                                    <li >
                                        <a href=" {{url('admin/SanPham')}} ">Danh Sách Sản Phẩm</a>
                                    </li>
                                    <li>
                                        <a href=" {{url('admin/ThemSanPham')}}">Thêm Sản Phẩm</a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li>
                                <a href="{{url('admin/LienHe')}} " class="waves-effect active" aria-expanded="true">
                                    <i class="remixicon-mail-open-line"></i>
                                    <span> Liên Hệ </span>
                                    
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="waves-effect" aria-expanded="false">
                                    <i class="remixicon-stack-line"></i>
                                    <span> Loại sản phẩm </span>
                                <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level mm-collapse" aria-expanded="false" style="">
                                    
                                    <li >
                                        <a href="{{url('admin/LoaiSanPham')}} ">Các loại sản phẩm</a>
                                    </li>
                                    <li>
                                        <a href="{{url('admin/ThemLoaiSanPham')}} ">Thêm loại sản phẩm</a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li>
                                <a href="{{url('admin/DonHang')}} " class="waves-effect">
                                    <i class=" remixicon-shopping-cart-line"></i>
                                    <span> Đơn Hàng</span>
                                    
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class=" remixicon-slideshow-line"></i>
                                    <span> Bài Viết </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level mm-collapse" aria-expanded="false" style="">
                                    
                                    <li >
                                        <a href="{{url('admin/BaiViet')}} ">Danh Sách Bài Viết</a>
                                    </li>
                                    <li>
                                        <a href=" {{url('admin/ThemBaiViet')}}">Thêm Bài Viết Mới</a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class=" remixicon-home-6-line"></i>
                                    <span> Kho Hàng </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level mm-collapse" aria-expanded="false" style="">
                                    
                                    <li >
                                        <a href="{{url('admin/TonKho')}} ">Tồn Kho</a>
                                    </li>
                                    <li>
                                        <a href="{{url('admin/NhapKho')}}">Danh sách số lần nhập kho</a>
                                    </li>
                                    <li>
                                        <a href="{{url('admin/DangXuat')}} " class="waves-effect">
                                            <i class="remixicon-logout-box-line"></i>
                                            <span>Đăng xuất</span>
                                            
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    
                                    <h4 class="page-title">Liên Hệ</h4>

                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title">Thông Tin Liên Hệ Của Khác Hàng</h4>
                                    <p class="sub-header">
                                        Danh sách thông tin của khách hàng cần.
                                    </p>
                                    <div class="mb-2">
                                        <div class="row">
                                            <div class="col-12 text-sm-center form-inline">
                                                <select id="demo-foo-filter-status" class="custom-select custom-select-sm">
                                                        <option value="">Show all</option>
                                                        <option value="Chưa hồi đáp">Chưa hồi đáp</option>
                                                        <option value="Đã phản hồi">Đã phản hồi</option>
                                                        
                                                    </select>
                                                <div class="form-group">
                                                    <input id="demo-foo-search" type="text" placeholder="Tìm kiếm" class="form-control form-control-sm" autocomplete="on">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="table-responsive">
                                        <table id="demo-foo-filtering" class="table table-bordered toggle-circle mb-0" data-page-size="7">
                                            <thead>
                                            <tr>
                                                <th data-toggle="true">STT</th>
                                                <th>Tên</th>
                                                <th data-hide="phone">Email</th>
                                                <th data-hide="phone, tablet">Tiêu Đề</th>
                                                <th data-hide="phone, tablet">Tin nhắn</th>
                                                <th data-hide="phone, tablet">Trạng Thái</th>
                                                
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $count =1;
                                                @endphp
                                                @foreach ($lienhe as $item)
                                                   
                                                <tr>
                                                    <td>{{$count}}</td>
                                                    <td>{{$item->tendaydu}}</td>
                                                    <td><a href="mailto:{{$item->email}}">{{$item->email}}</a> </td>
                                                    <td>{{$item->tieude}}</td>
                                                    <td>{{$item->tinnhan}}</td>
                                                    <td>
                                                        <select id="trangthai{{$item->id}}" onchange="App.lienHe({{$item->id}})" name="trangthai" class="selectpicker" data-style="btn-outline-primary">
                                                            <option @if ($item->trangthai == 0)
                                                                {{'selected'}}
                                                            @endif  value="0">Chưa hồi đáp</option>
                                                            <option @if ($item->trangthai == 1)
                                                                {{'selected'}}
                                                            @endif value="1">Đã phản hồi</option>
                                                        </select>
                                                    </td>
                                                    
                                                </tr>
                                                @php
                                                    $count++
                                                @endphp
                                                @endforeach
                                            
                                            </tbody>
                                            <tfoot>
                                            <tr class="active">
                                                <td colspan="6">
                                                    <div class="text-right">
                                                        <ul class="pagination pagination-rounded justify-content-end footable-pagination m-t-10 mb-0"></ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div> <!-- end .table-responsive-->
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->


                        
                        <!-- end row -->
                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                2021 &copy; BaChaCha    
                            </div>
                            
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        
        <!-- Vendor js -->
        <script src="{{url('assets\js\vendor.min.js')}}"></script>
        <script src="{{url('assets\libs\bootstrap-tagsinput\bootstrap-tagsinput.min.js')}}"></script>
        <script src="{{url('assets\libs\switchery\switchery.min.js')}}"></script>
        <script src="{{url('assets\libs\multiselect\jquery.multi-select.js')}}"></script>
        <script src="{{url('assets\libs\jquery-quicksearch\jquery.quicksearch.min.js')}}"></script>
        <script src="{{url('assets\libs\select2\select2.min.js')}}"></script>
        <script src="{{url('assets\libs\bootstrap-select\bootstrap-select.min.js')}}"></script>
        <script src="{{url('assets\libs\bootstrap-touchspin\jquery.bootstrap-touchspin.min.js')}}"></script>
        <script src="{{url('assets\libs\jquery-mask-plugin\jquery.mask.min.js')}}"></script>
        <!-- Footable js -->
        <script src="{{url('assets\libs\footable\footable.all.min.js')}}"></script>

        <!-- Init js -->
        <script src="{{url('assets\js\pages\foo-tables.init.js')}}"></script>

        <!-- App js -->
        <script src="{{url('assets\js\app.min.js')}}"></script>
        @include('admin/footeradmin')
    </body>
</html>