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
        <!-- third party css end -->
        <link href="{{url('assets\libs\footable\footable.core.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{url('assets\libs\jquery-vectormap\jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css">
        
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

                            <li class="menu-title">Ch???c N??ng</li>
                            <li>
                                <a href="{{url('admin/Home')}} " class="waves-effect " aria-expanded="false">
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
                                        <a href="{{url('admin/SanPham')}} ">Danh S??ch S???n Ph???m</a>
                                    </li>
                                    <li>
                                        <a href="{{url('admin/ThemSanPhamr')}} ">Th??m S???n Ph???m</a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li>
                                <a href="{{url('admin/LienHe')}} " class="waves-effect">
                                    <i class="remixicon-mail-open-line"></i>
                                    <span> Li??n H??? </span>
                                    
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="waves-effect" aria-expanded="false">
                                    <i class="remixicon-stack-line"></i>
                                    <span> Lo???i s???n ph???m </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level mm-collapse" aria-expanded="false" style="">
                                    
                                    <li >
                                        <a href="{{url('admin/LoaiSanPham')}} ">C??c lo???i s???n ph???m</a>
                                    </li>
                                    <li>
                                        <a href="{{url('admin/ThemLoaiSanPham')}} ">Th??m lo???i s???n ph???m</a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li>
                                <a href="{{url('admin/DonHang')}} " class="waves-effect" aria-expanded="false">
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
                                        <a href="{{url('admin/BaiViet')}} ">Danh S??ch B??i Vi???t</a>
                                    </li>
                                    <li>
                                        <a href="{{url('admin/ThemBaiViet')}} ">Th??m B??i Vi???t M???i</a>
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
                                        <a href="{{url('admin/TonKho')}} ">T???n Kho</a>
                                    </li>
                                    <li>
                                        <a href="{{url('admin/NhapKho')}} ">Danh s??ch s??? l???n nh???p kho</a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li>
                                <a href="{{url('admin/DangXuat')}} " class="waves-effect">
                                    <i class="remixicon-logout-box-line"></i>
                                    <span>????ng xu???t</span>
                                    
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
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    
                                    <h4 class="page-title">Danh s??ch b??i vi???t</h4>

                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title">Danh s??ch b??i vi???t</h4>
                                    <p class="sub-header">
                                        C??c b??i vi???t ???????c ????ng l??n 
                                    </p>
                                    <div class="mb-2">
                                        <div class="row">
                                            <div class="col-12 text-sm-center form-inline">
                                                <select id="demo-foo-filter-status" class="custom-select custom-select-sm">
                                                        <option value="">Show all</option>
                                                        <option value="active">Active</option>
                                                        <option value="disabled">Disabled</option>
                                                        <option value="suspended">Suspended</option>
                                                    </select>
                                                <div class="form-group">
                                                    <input id="demo-foo-search" type="text" placeholder="T??m ki???m" class="form-control form-control-sm" autocomplete="on">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="table-responsive">
                                        <table id="demo-foo-filtering" class="table table-bordered toggle-circle mb-0" data-page-size="7">
                                            <thead>
                                            <tr>
                                                <th data-toggle="true" >STT </span></th>
                                                <th  >T??n T??c Gi??? </span></th>
                                                <th data-hide="phone"  >Ti??u ????? </span></th>
                                                
                                                <th  >Ng??y ????ng </span></th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $count = 1;
                                                @endphp
                                                @foreach ($baiviet as $item)
                                                <tr >
                                                    <td>{{$count}}</td>
                                                    <td>{{$item->taikhoan->hovaten . ' '. $item->taikhoan->ten}} </td>
                                                    <td class="text-truncate">{{$item->tieude}}</td>
                                                    
                                                    <td>{{$item->ngaydang}}</td>
                                                    <td style="white-space: nowrap; width: 1%;"><a href="SuaBaiViet?id={{$item->id}}" class="tabledit-edit-button btn btn-primary" style="float: none;"><span class="remixicon-edit-2-line"></span></a></td>
                                              </tr>
                                              @php
                                                  $count++
                                              @endphp
                                                @endforeach
                                            
                                            </tbody>
                                            <tfoot>
                                            <tr class="active">
                                                <td colspan="7" class="footable-visible">
                                                    <div class="text-right">
                                                        <ul class="pagination pagination-rounded justify-content-end footable-pagination m-t-10 mb-0"><li class="footable-page-arrow disabled"><a data-page="first" href="#first">??</a></li><li class="footable-page-arrow disabled"><a data-page="prev" href="#prev">???</a></li><li class="footable-page active"><a data-page="0" href="#">1</a></li><li class="footable-page-arrow disabled"><a data-page="next" href="#next">???</a></li><li class="footable-page-arrow disabled"><a data-page="last" href="#last">??</a></li></ul>
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
        <script src="{{url('assets\libs\footable\footable.all.min.js')}}"></script>

        <!-- Init js -->
        <script src="{{url('assets\js\pages\foo-tables.init.js')}}"></script>
        <!-- third party js -->
        <script src="{{url('assets\libs\datatables\dataTables.bootstrap4.js')}}"></script>
        <script src="{{url('assets\libs\datatables\jquery.dataTables.min.js')}}"></script>
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

        <!-- Datatables init -->
        <script src="{{url('assets\js\pages\datatables.init.js')}}"></script>

        <!-- App js -->
        <script src="{{url('assets\js\app.min.js')}}"></script>
        @include('admin/footeradmin')
        @if (session('suathanhcong'))
        <script>Notiflix.Notify.Success("  {{session('suathanhcong')}} ");</script>
        @endif
        @if (session('fail'))
        <script>Notiflix.Notify.Failure("  {{session('fail')}} ");</script>
        @endif
        @if (session('file'))
        <script>Notiflix.Notify.Failure("  {{session('file')}} ");</script>
        @endif
        @if (session('success'))
        <script>Notiflix.Notify.Success("  {{session('success')}} ");</script>
        @endif
        @if (session('sanphamfail'))
        <script>Notiflix.Notify.Failure("  {{session('sanphamfail')}} ");</script>
        @endif
        @if (session('khofail'))
        <script>Notiflix.Notify.Failure("  {{session('khofail')}} ");</script>
        @endif
        
    </body>
</html>