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
        
        <!-- App css -->
        <link href="{{url('assets\css\bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{url('assets\css\icons.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{url('assets\css\app.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{url('assets\libs\summernote\summernote-bs4.css')}}" rel="stylesheet" type="text/css">
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

                            <li class="menu-title">Ch???c N??ng</li>
                            <li>
                                <a href="{{url('admin/Home')}} " class="waves-effect" aria-expanded="false">
                                    <i class=" remixicon-dashboard-line"></i>
                                    <span> Trang Ch??? </span>
                                </a>
                                
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="waves-effect" aria-expanded="false">
                                    <i class=" remixicon-product-hunt-line"></i>
                                    <span> S???n Ph???m </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level mm-collapse" aria-expanded="false" style="">
                                    
                                    <li >
                                        <a href=" {{url('admin/SanPham')}}">Danh S??ch S???n Ph???m</a>
                                    </li>
                                    <li>
                                        <a href=" {{url('admin/ThemSanPham')}}">Th??m S???n Ph???m</a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li>
                                <a href=" {{url('admin/Home')}}LienHe" class="waves-effect">
                                    <i class="remixicon-mail-open-line"></i>
                                    <span> Li??n H??? </span>
                                    
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="waves-effect " aria-expanded="false">
                                    <i class="remixicon-stack-line"></i>
                                    <span> Lo???i s???n ph???m </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level mm-collapse" aria-expanded="false" style="">
                                    
                                    <li >
                                        <a href=" {{url('admin/LoaiSanPham')}}">C??c lo???i s???n ph???m</a>
                                    </li>
                                    <li>
                                        <a href=" {{url('admin/ThemLoaiSanPham')}}">Th??m lo???i s???n ph???m</a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li>
                                <a href=" {{url('admin/DonHang')}}" class="waves-effect">
                                    <i class=" remixicon-shopping-cart-line"></i>
                                    <span> ????n H??ng</span>
                                    
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="waves-effect active">
                                    <i class=" remixicon-slideshow-line"></i>
                                    <span> B??i Vi???t </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level mm-collapse" aria-expanded="false" style="">
                                    
                                    <li >
                                        <a href=" {{url('admin/BaiViet')}}">Danh S??ch B??i Vi???t</a>
                                    </li>
                                    <li>
                                        <a href=" {{url('admin/ThemBaiViet')}}">Th??m B??i Vi???t M???i</a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class=" remixicon-home-6-line"></i>
                                    <span> Kho H??ng </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level mm-collapse" aria-expanded="false" style="">
                                    
                                    <li >
                                        <a href=" {{url('admin/TonKho')}}">T???n Kho</a>
                                    </li>
                                    <li>
                                        <a href=" {{url('admin/NhapKho')}}">Danh s??ch s??? l???n nh???p kho</a>
                                    </li>
                                    
                                </ul>
                                <li>
                                    <a href=" {{url('admin/DangXuat')}}" class="waves-effect">
                                        <i class="remixicon-logout-box-line"></i>
                                        <span>????ng xu???t</span>
                                        
                                    </a>
                                </li>
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
                                   
                                    <h4 class="page-title">Th??m B??i Vi???t</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

            
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title">Th??m B??i Vi???t</h4>
                                    <p id="desctable" class="sub-header">
                                        Nh???p ?????y ????? c??c th??ng tin sau ????y
                                    </p>
                                    <form action="{{url('admin/ThemBaiViet')}}" method="POST" enctype="multipart/form-data" class="parsley-form" novalidate="">
                                        <!-- Start fields -->
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label>Ti??u ?????</label>
                                            <div>
                                                <textarea name="tieude" id="" class="form-control"  id="example-textarea" rows="5"></textarea>
                                                
                                            </div>
                                            @if ($errors->has('tieude'))
                                   							<span class="help-block">
                                        						<strong>{{ $errors->first('tieude') }}</strong>
                                    						</span>
                               							 @endif
                                        </div>
                                        <div class="form-group">
                                            <label>M?? t??? t??m t???t n???i dung b??i vi???t</label>
                                            <div>
                                                <textarea name="tomtat" id="" class="form-control"  id="example-textarea" rows="5"></textarea>
                                                
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>N???i Dung</label>
                                            <div>
                                                <textarea name="noidung" id="summernote-editor"></textarea>
                                            </div>
                                            @if ($errors->has('noidung'))
                                   							<span class="help-block">
                                        						<strong>{{ $errors->first('noidung') }}</strong>
                                    						</span>
                               							 @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Tags b??i vi???t</label>
                                            <div class="tags-default">
                                                <input type="text" name="tags" value="" data-role="tagsinput" placeholder="add tags">
                                            </div>
                                        <div class="form-group">
                                            <label>H??nh ?????i Di???n Cho B??i Vi???t</label>
                                            <div>
                                                 <input name="hinhbaiviet" type="file" class="form-control" required="" >
                                            </div>
                                            @if ($errors->has('hinhbaiviet'))
                                   							<span class="help-block">
                                        						<strong>{{ $errors->first('hinhbaiviet') }}</strong>
                                    						</span>
                               							 @endif
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
        <div class="right-bar">
            <div class="rightbar-title">
                <a href="javascript:void(0);" class="right-bar-toggle float-right">
                    <i class="fe-x noti-icon"></i>
                </a>
                <h4 class="m-0 text-white">Settings</h4>
            </div>
            <div class="slimscroll-menu">
                <!-- User box -->
                <div class="user-box">
                    <div class="user-img">
                        <img src="images\users\avatar-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                        <a href="javascript:void(0);" class="user-edit"><i class="mdi mdi-pencil"></i></a>
                    </div>
            
                    <h5><a href="javascript: void(0);">Nik G. Patel</a> </h5>
                    <p class="text-muted mb-0"><small>Admin Head</small></p>
                </div>

                <ul class="nav nav-pills bg-light nav-justified">
                    <li class="nav-item">
                        <a href="#home1" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                            General
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#messages1" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0 active">
                            Chat
                        </a>
                    </li>
                </ul>
                <div class="tab-content pl-3 pr-3">
                    <div class="tab-pane" id="home1">
                        <div class="row mb-2">
                            <div class="col">
                                <h5 class="m-0 font-15">Notifications</h5>
                                <p class="text-muted"><small>Do you need them?</small></p>
                            </div> <!-- end col-->
                            <div class="col-auto">
                                <div class="custom-control custom-switch mb-2">
                                    <input type="checkbox" class="custom-control-input" id="tabswitch1">
                                    <label class="custom-control-label" for="tabswitch1"></label>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row-->

                        <div class="row mb-2">
                            <div class="col">
                                <h5 class="m-0 font-15">API Access</h5>
                                <p class="text-muted"><small>Enable/Disable access</small></p>
                            </div> <!-- end col-->
                            <div class="col-auto">
                                <div class="custom-control custom-switch mb-2">
                                    <input type="checkbox" class="custom-control-input" checked="" id="tabswitch2">
                                    <label class="custom-control-label" for="tabswitch2"></label>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row-->

                        <div class="row mb-2">
                            <div class="col">
                                <h5 class="m-0 font-15">Auto Updates</h5>
                                <p class="text-muted"><small>Keep up to date</small></p>
                            </div> <!-- end col-->
                            <div class="col-auto">
                                <div class="custom-control custom-switch mb-2">
                                    <input type="checkbox" class="custom-control-input" id="tabswitch3">
                                    <label class="custom-control-label" for="tabswitch3"></label>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row-->

                        <div class="row mb-2">
                            <div class="col">
                                <h5 class="m-0 font-15">Online Status</h5>
                                <p class="text-muted"><small>Show your status to all</small></p>
                            </div> <!-- end col-->
                            <div class="col-auto">
                                <div class="custom-control custom-switch mb-2">
                                    <input type="checkbox" class="custom-control-input" checked="" id="tabswitch4">
                                    <label class="custom-control-label" for="tabswitch4"></label>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row-->

                        <div class="alert alert-success alert-dismissible fade mt-3 show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">??</span>
                            </button>
                            <h5>Unlimited Access</h5>
                            Upgrade to plan to get access to unlimited reports
                            <br>
                            <a href="javascript: void(0);" class="btn btn-outline-success mt-3 btn-sm">Upgrade<i class="ml-1 mdi mdi-arrow-right"></i></a>
                        </div>
                
                    </div>
                    

            </div> <!-- end slimscroll-menu-->
        </div>
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
        <script src="{{url('assets\js\pages\form-advanced.init.js')}}"></script>

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