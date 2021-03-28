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

        <!-- third party css -->
        <link href="{{url('assets\libs\datatables\dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css">
        <link href="{{url('assets\libs\datatables\responsive.bootstrap4.css')}}" rel="stylesheet" type="text/css">
        <link href="{{url('assets\libs\datatables\buttons.bootstrap4.css')}}" rel="stylesheet" type="text/css">
        <link href="{{url('assets\libs\datatables\select.bootstrap4.css')}}" rel="stylesheet" type="text/css">
        <!-- third party css end -->
        <link href="{{url('assets\libs\custombox\custombox.min.css')}}" rel="stylesheet">
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
                            <img src="{{url('assets\images\logo-light.png')}}" alt="" height="20">
                            <!-- <span class="logo-lg-text-light">Xeria</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-sm-text-dark">X</span> -->
                            <img src="{{url('assets\images\logo-sm.png')}}" alt="" height="24">
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
                                <a href="javascript: void(0);" class="waves-effect" aria-expanded="false">
                                    <i class=" remixicon-product-hunt-line"></i>
                                    <span> Sản Phẩm </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level mm-collapse" aria-expanded="false" style="">
                                    
                                    <li >
                                        <a href="{{url('admin/SanPham')}} ">Danh Sách Sản Phẩm</a>
                                    </li>
                                    <li>
                                        <a href="{{url('admin/ThemSanPham')}} ">Thêm Sản Phẩm</a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li>
                                <a href=" {{url('admin/LienHe')}}" class="waves-effect">
                                    <i class="remixicon-mail-open-line"></i>
                                    <span> Liên Hệ </span>
                                    
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="waves-effect active" aria-expanded="true">
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
                                        <a href="{{url('admin/ThemBaiViet')}} ">Thêm Bài Viết Mới</a>
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
                                        <a href="{{url('admin/NhapKho')}} ">Danh sách số lần nhập kho</a>
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
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    
                                    <h4 class="page-title">Loại sản phẩm</h4>

                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title">Danh sách Các Loại Sản Phẩm</h4>
                                    <p class="sub-header">
                                        Danh sách những loại sản phẩm có trong hệ thống 
                                    </p>
                                    <div class="mb-2">
                                        <div class="row">
                                            <div class="col-12 text-sm-center form-inline">
                                                <select id="demo-foo-filter-status" class="custom-select custom-select-sm">
                                                        <option value="">Show all</option>
                                                        <option value="active">Active</option>
                                                        <option value="disabled">Disabled</option>
                                                    </select>
                                                <div class="form-group">
                                                    <input id="demo-foo-search" type="text" placeholder="Tìm kiếm" class="form-control form-control-sm" autocomplete="on">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="table-responsive">
                                        <table id="demo-foo-filtering" class="table table-bordered toggle-circle mb-0 no-paging footable-loaded footable tablet breakpoint" data-page-size="7">
                                            <thead>
                                            <tr>
                                                
                                                <th data-toggle="true" class="footable-visible footable-sortable footable-first-column">STT<span class="footable-sort-indicator"></span></th>
                                                <th class="footable-visible footable-sortable">Loại sản phẩm<span class="footable-sort-indicator"></span></th>
                                                
                                                <th class="footable-visible footable-sortable footable-last-column"><span class="footable-sort-indicator"></span></th>
                                                <th class="footable-visible footable-sortable footable-last-column"></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $count =1;
                                                @endphp
                                                @foreach ($loaisanpham as $item)
                                                <tr style="" class="footable-even">
                                                    
                                                    <td class="footable-visible footable-first-column"><span class="footable-toggle">{{ $count }}</span></td>
                                                    <td class="footable-visible">{{$item->tenloai}}</td>
                                                    <td style="white-space: nowrap; width: 1%;" class="footable-visible footable-last-column">
                                                        <button type="button"  id="nutloaisanpham" class="btn btn-primary waves-effect waves-light btn-icon" data-value="{{$item}}" data-toggle="modal" data-target="#con-close-modal"><span class="remixicon-edit-2-line"></button>
                                                        </td>
                                                        <td style="white-space: nowrap; width: 1%;" class="footable-visible footable-last-column"><button onclick="App.xoaLoaiSanPham({{$item->id}})" class="btn  btn-danger waves-effect waves-light btn-icon "><i class="fa fa-times"></i></button></td>
                                                @php
                                                    $count++;
                                                @endphp
                                                @endforeach
                                            
                                            </tbody>
                                            <tfoot>
                                            <tr class="active">
                                                <td colspan="4" class="footable-visible">
                                                    <div class="text-right">
                                                        <ul class="pagination pagination-rounded justify-content-end footable-pagination m-t-10 mb-0"><li class="footable-page-arrow disabled"><a data-page="first" href="#first">«</a></li><li class="footable-page-arrow disabled"><a data-page="prev" href="#prev">‹</a></li><li class="footable-page active"><a data-page="0" href="#">1</a></li><li class="footable-page-arrow disabled"><a data-page="next" href="#next">›</a></li><li class="footable-page-arrow disabled"><a data-page="last" href="#last">»</a></li></ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div> <!-- end .table-responsive-->
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->
                        </div>
                        
                        <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Loại Sản Phẩm</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body p-4">
                                        <form action="{{url('admin/LoaiSanPham')}}" method="POST" class="parsley-form">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <label>Id</label>
                                                <div>
                                                    <input name="idloai" id="idloai" type="number" readonly class="form-control" required="" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Tên Loại Sản Phẩm</label>
                                                <div>
                                                    <input name="tenloai" id="tenloai" type="text" class="form-control" required="" data-parsley-maxlength="8" placeholder="Tối đa 250 ký tự">
                                                </div>
                                            </div>
                                            
                                           
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                            Lưu Thay Đổi
                                        </button>
                                       
                                        <button data-dismiss="modal"  class="btn btn-secondary waves-effect waves-light">
                                            Hủy
                                        </button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        
                        <!-- end row -->
                        
                    </div>
                    <!-- Start Content-->
                    <!-- container -->
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
        
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="{{url('assets\rightbar-overlay')}}"></div>

        <!-- Vendor js -->
        <script src="{{url('assets\js\vendor.min.js')}}"></script>

        <!-- third party js -->
        <script src="{{url('assets\libs\datatables\jquery.dataTables.min.js')}}"></script>
        <script src="{{url('assets\libs\datatables\dataTables.bootstrap4.js')}}"></script>
        <script src="{{url('assets\libs\datatables\dataTables.responsive.min.js')}}"></script>
        <script src="{{url('assets\libs\datatables\responsive.bootstrap4.min.js')}}"></script>
        <script src="{{url('assets\libs\datatables\dataTables.buttons.min.js')}}"></script>
        <script src="{{url('assets\libs\datatables\buttons.bootstrap4.min.js')}}"></script>
        <script src="{{url('assets\libs\datatables\buttons.html5.min.js')}}"></script>
        <script src="{{url('assets\libs\datatables\buttons.flash.min.js')}}"></script>
        <script src="{{url('assets\libs\datatables\buttons.print.min.js')}}"></script>
        <script src="{{url('assets\libs\datatables\dataTables.keyTable.min.js')}}"></script>
        <script src="{{url('assets\libs\datatables\dataTables.select.min.js')}}"></script>
        <script src="{{url('assets\libs\pdfmake\pdfmake.min.js')}}"></script>
        <script src="{{url('assets\libs\pdfmake\vfs_fonts.js')}}"></script>
        <!-- third party js ends -->
        <script src="{{url('assets\libs\custombox\custombox.min.js')}}"></script>
        <!-- Datatables init -->
        <script src="{{url('assets\js\pages\datatables.init.js')}}"></script>

        <!-- App js -->
        <script src="{{url('assets\js\app.min.js')}}"></script>
        @include('admin/footeradmin')
        @if (session('suathanhcong'))
        <script>Notiflix.Notify.Success("  {{session('suathanhcong')}} ");</script>
        @endif
        @if (session('themthanhcong'))
        <script>Notiflix.Notify.Success("  {{session('themthanhcong')}} ");</script>
        @endif
        @if (session('suafail'))
        <script>Notiflix.Notify.Failure("  {{session('suafail')}} ");</script>
        @endif
        @if (session('themfail'))
        <script>Notiflix.Notify.Failure("  {{session('themfail')}} ");</script>
        @endif
    </body>
</html>