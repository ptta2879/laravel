<link href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,700;0,800;1,200;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="css/animate.css">

<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="css/flaticon.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body >

 
    
<div class="wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center">
                <p class="mb-0 phone pl-md-2">
                    <a href="tel:0388823807" class="mr-2"><span class="fa fa-phone mr-1"></span> 0388823807</a> 
                    <a href="mailto:bachacha@gmail.com"><span class="fa fa-paper-plane mr-1"></span> bachachavn@gmail.com</a>
                </p>
            </div>
            <div class="col-md-6 d-flex justify-content-md-end">
                <div class="social-media mr-4">
                <p class="mb-0 d-flex">
                    <a href="https://www.facebook.com/B%C3%A1nh-Tr%C3%A1ng-Bachacha-108555174656092" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                
                </p>
        </div>
        <div class="reg">
            @if (Auth::check())
                @if (Auth::user()->phanquyen == 1)
                <p class="mb-0"><a href="javascript:void(0);" class="mr-2">Xin Chào {{Auth::user()->ten}}</a> <a class="mr-2" href="{{url('/logout')}}">Đăng Xuất</a> <a href="admin">Trang admin</a> </p>
                @else
                
                <p class="mb-0"><a href="javascript:void(0);" class="mr-2">Xin Chào {{Auth::user()->ten}}</a> <a href="{{url('/logout')}}">Đăng Xuất</a> </p>
                @endif
            @else
            <p class="mb-0"><a href="register" class="mr-2">Đăng Ký</a> <a href="login">Đăng Nhập</a></p>
            @endif
            
        </div>
            </div>
        </div>
    </div>
</div>