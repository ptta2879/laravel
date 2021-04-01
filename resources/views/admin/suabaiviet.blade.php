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
        <link rel="shortcut icon" href="{{url('assets\images\favicon.ico')}}">

        <!-- third party css -->
        <link href="{{url('assets\libs\datatables\dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css">
        <link href="{{url('assets\libs\datatables\responsive.bootstrap4.css')}}" rel="stylesheet" type="text/css">
        <link href="{{url('assets\libs\datatables\buttons.bootstrap4.css')}}" rel="stylesheet" type="text/css">
        <link href="{{url('assets\libs\datatables\select.bootstrap4.css')}}" rel="stylesheet" type="text/css">
        <link href="{{url('assets\libs\bootstrap-tagsinput\bootstrap-tagsinput.css')}}" rel="stylesheet">
        <!-- third party css end -->
        <link href="{{url('assets\libs\summernote\summernote-bs4.css')}}" rel="stylesheet" type="text/css">
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
                    <a href="{{url('admin/Home')}}" class="logo text-center">
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
                                <a href="{{url('admin/LienHe')}}" class="waves-effect">
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
                                        <a href=" {{url('admin/LoaiSanPham')}}">Các loại sản phẩm</a>
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
                                <a href="javascript: void(0);" class="waves-effect" aria-expanded="true">
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

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                   
                                    <h4 class="page-title">Thay đổi thông tin của bài viế</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

            
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title">Thay đổi thông tin của bài viết</h4>
                                    <p id="desctable" class="sub-header">
                                        Sửa nội dung dưới và bấm vào nút Save để lưu thay đổi
                                    </p> 
                                    
                                    <form action="{{url('admin/SuaBaiViet')}}" method="POST" enctype="multipart/form-data" class="parsley-form" novalidate="">
                                        <!-- Start fields -->
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label>Id Bài Viết</label>
                                            <div>
                                                <input name="id" type="number" class="form-control" readonly value="{{$thongtinbaiviet->id}}" required="" data-parsley-maxlength="8" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Tiêu Đề</label>
                                            <div>
                                                <textarea name="tieude" class="form-control" id="example-textarea" rows="5">{{$thongtinbaiviet->tieude}}</textarea>
                                                
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Mô tả tóm tắt nội dung bài viết</label>
                                            <div>
                                                <textarea name="tomtat" id="" class="form-control"  id="example-textarea" rows="5">{{$thongtinbaiviet->tomtat}}</textarea>
                                                
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Nội Dung</label>
                                            <div>
                                                <textarea name="noidung" id="summernote-editor">{!!$thongtinbaiviet->noidung!!}</textarea>
                                                
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Tags bài viết</label>
                                            <div class="tags-default">
                                                <input type="text" name="tags" value="{{$thongtinbaiviet->tags}}" data-role="tagsinput" placeholder="add tags">
                                            </div>
                                        <div class="form-group">
                                            <label>Hình Đại Diện</label>
                                            <div>@php
                                                $linkimg = 'images\baivietnew-'.$thongtinbaiviet->id.'.jpg'
                                            @endphp
                                                    <img src="{{url(''.$linkimg.'')}}" width="200px" height="300px" alt="">
                                                 <input name="hinhbaiviet" type="file" class="form-control" required="" >
                                            </div>
                                        </div>

                                        <div class="form-group mb-0">
                                            <div>
                                                <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                                    Save
                                                </button>
                                               
                                                <button type="reset" class="btn btn-secondary waves-effect waves-light">
                                                    Cancel
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row-->                                                
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
        <script src="{{url('assets\libs\bootstrap-tagsinput\bootstrap-tagsinput.min.js')}}"></script>
        <!-- Datatables init -->
        <script src="{{url('assets\js\pages\datatables.init.js')}}"></script>
        <script src="{{url('assets\libs\summernote\summernote-bs4.min.js')}}"></script>

        <!-- Init js -->
        <script src="{{url('assets\js\pages\form-summernote.init.js')}}"></script>

        <!-- App js -->
        <script src="{{url('assets\js\app.min.js')}}"></script>
        
        @include('admin/footeradmin')
    </body>
</html>