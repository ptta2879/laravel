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

        <!-- App css -->
        <link href="{{url('assets\css\bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{url('assets\css\icons.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{url('assets\css\app.min.css')}}" rel="stylesheet" type="text/css">

    </head>

    <body>

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card">

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <a href="{{url('admin/Home')}}">
                                        <span><img src="{{url('assets\images\logo-dark.png')}}" alt="" height="22"></span>
                                    </a>
                                    <p class="text-muted mb-4 mt-3">Nhập thông tin đăng nhập của bạn để vào trang admin</p>
                                </div>

                                <form action="{{url('/admin/login')}}" method="POST"  >
                                    {{ csrf_field() }}
                                    <div class="form-group mb-3">
                                        <label for="username">Tài khoản</label>
                                        <input name="username" class="form-control" type="email" id="emailaddress" required="" placeholder="Nhập tài khoản của bạn">
                                        @if ($errors->has('username'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                            </span>
                                @endif
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="password">Mật Khẩu</label>
                                        <input name="password" class="form-control" type="password" required="" id="password" placeholder="Nhập mật khẩu">
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                @endif
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary btn-block" type="submit"> Đăng nhập </button>
                                    </div>

                                </form>
                                @if (session('faillogin'))
                                <div class="alert alert-danger mt-2" role="alert">
                                    {{session('faillogin')}}
                                  </div>
                                @endif
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->


        <footer class="footer footer-alt">
            2021 &copy; Bachacha 
        </footer>

        <!-- Vendor js -->
        <script src="{{url('assets\js\vendor.min.js')}}"></script>

        <!-- App js -->
        <script src="{{url('assets\js\app.min.js')}}"></script>
        
    </body>
</html>