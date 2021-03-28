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
        <link rel="shortcut icon" href="assets\images\favicon.ico">

        <!-- Footable css -->
        <link href="{{url('assets\libs\footable\footable.core.min.css" rel="stylesheet')}}" type="text/css">
        <link href="{{url('assets\libs\jquery-vectormap\jquery-jvectormap-1.2.2.css')}} rel="stylesheet" type="text/css">

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
                    <a href="Home.html" class="logo text-center">
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
                            <li class="mm-active">
                                <a href="{{url('admin/Home')}}" class="waves-effect active" aria-expanded="true">
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
                                        <a href="{{url('admin/SanPham')}}">Danh Sách Sản Phẩm</a>
                                    </li>
                                    <li>
                                        <a href="{{url('admin/ThemSanPham')}} ">Thêm Sản Phẩm</a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li>
                                <a href="{{url('admin/LienHe')}} " class="waves-effect">
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
                                        <a href=" {{url('admin/ThemLoaiSanPham')}}">Thêm loại sản phẩm</a>
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
                                    
                                </ul>
                            </li>
                            <li>
                                <a href="{{url('admin/DangXuat')}} " class="waves-effect">
                                    <i class="remixicon-logout-box-line"></i>
                                    <span>Đăng xuất</span>
                                    
                                </a>
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
                                    
                                    <h4 class="page-title">Trang chủ</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                               2016 - 2019 © Minton theme by <a href="">Coderthemes</a> 
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-right footer-links d-none d-sm-block">
                                    <a href="javascript:void(0);">About Us</a>
                                    <a href="javascript:void(0);">Help</a>
                                    <a href="javascript:void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

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

        <!-- Footable js -->
        <script src="{{url('assets\libs\footable\footable.all.min.js')}}"></script>

        <!-- Init js -->
        <script src="{{url('assets\js\pages\foo-tables.init.js')}}"></script>

        <!-- App js -->
        <script src="{{url('assets\js\app.min.js')}}"></script>
        @include('admin/footeradmin')
    </body>
</html>