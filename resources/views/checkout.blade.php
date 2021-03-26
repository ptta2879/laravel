<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Liquor Store - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    

	@include('wrap')  
    
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="Home">bachacha <span>store</span></a>
      @include('navcart')

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item "><a href="Home" class="nav-link">Trang Chủ</a></li>
          <li class="nav-item"><a href="GioiThieu" class="nav-link">Giới Thiệu</a></li>
		  @if (Auth::check())
          <li class="nav-item "><a href="HangDaMua" class="nav-link">Đơn Hàng</a></li>
          @endif
          <li class="nav-item"><a href="BaiViet" class="nav-link">Bài Viết</a></li>
          <li class="nav-item"><a href="LienHe" class="nav-link">Liên Hệ</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/newbg.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate mb-5 text-center">
          	<p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Trang Chủ <i class="fa fa-chevron-right"></i></a></span> <span>Thanh Toán <i class="fa fa-chevron-right"></i></span></p>
            <h2 class="mb-0 bread">Thanh Toán</h2>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center">
          		<div class="col-xl-10 ftco-animate">
						<form action="{{url('HoaDon')}}" method="POST" class="billing-form">
							{{ csrf_field() }}
							<h3 class="mb-4 billing-heading">Chi Tiết Hóa Đơn</h3>
	          	<div class="row align-items-end">
	          		<div class="col-md-6">
	                <div class="form-group">
	                	<label for="fullname">Họ Và Tên Đệm</label>
	                  <input type="text" name="fullname" id="fullname" required="" value="{{$datauser->hovaten}}"  class="form-control" placeholder="Họ của bạn">
					 		 @if ($errors->has('fullname'))
                                   							<span class="help-block">
                                        						<strong>{{ $errors->first('fullname') }}</strong>
                                    						</span>
                               							 @endif
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="name">Tên</label>
	                  <input type="text" name="name" id="name" value="{{$datauser->ten}}" required="" class="form-control" placeholder="Tên của bạn">
					  @if ($errors->has('name'))
                                   							<span class="help-block">
                                        						<strong>{{ $errors->first('name') }}</strong>
                                    						</span>
                               							 @endif
	                </div>
                </div>
                
		            <div class="w-100"></div>
		            <div class="col-md-12">
	                <div class="form-group">
	                	<label for="phone">Số Điện Thoại</label>
	                  <input type="tel" name="phone" id="phone" value="{{$datauser->sdt}}" required="" class="form-control" placeholder="">
					  @if ($errors->has('phone'))
                                   							<span class="help-block">
                                        						<strong>{{ $errors->first('phone') }}</strong>
                                    						</span>
                               							 @endif
	                </div>
	              </div>
	              <div class="col-md-12">
	                <div class="form-group">
	                	<label for="emailaddress">Địa Chỉ Email</label>
	                  <input type="email" name="email" id="email" required="" value="{{$datauser->email}}"class="form-control" placeholder="Địa Chỉ Email">
					  @if ($errors->has('email'))
                                   							<span class="help-block">
                                        						<strong>{{ $errors->first('email') }}</strong>
                                    						</span>
                               							 @endif
	                </div>
                </div>
				<div class="col-md-12">
	                <div class="form-group">
	                	<label for="diachi">Địa Chỉ</label>
	                  <input type="text" id="diachi" name="diachi" value="{{$datauser->diachi}}" required="" class="form-control" placeholder="Địa Chỉ Nhận Hàng">
					  @if ($errors->has('diachi'))
                                   							<span class="help-block">
                                        						<strong>{{ $errors->first('diachi') }}</strong>
                                    						</span>
                               							 @endif
	                </div>
                </div>
                <div class="w-100"></div>
                <div class="form-group mt-4">
					<div class="radio">
					  <label class="mr-3"><input id="nhanhang" type="radio" value="1" name="kieuthanhtoan"> Thanh Toán Khi Nhận Hàng </label>
					  <label><input type="radio" id="chuyenkhoan" value="2" name="kieuthanhtoan"> Chuyển Khoản</label>
					  @if ($errors->has('kieuthanhtoan'))
                                   							<span class="help-block">
                                        						<strong>{{ $errors->first('kieuthanhtoan') }}</strong>
                                    						</span>
                               							 @endif
					</div>
				</div>
				<div class="w-100"></div>
				<div id="thongtinchuyenkhoan" class="cart-detail cart-total p-3 p-md-4 mb-2 alert alert-warning">
					<h3 class="billing-heading mb-4">Thông Tin Về Tài Khoản Ngân Hàng</h3>
					<p class="d-flex">
							  <span>Tên Chủ Tài Khoản</span>
							  <span>TRAN ANH THI</span>
						  </p>
						  
						  <p class="d-flex">
							  <span>Số Tài Khoản</span>
							  <span>$3.00</span>
						  </p>
						  <hr>
						  <p class="d-flex total-price">
							  <span>Nội Dung Chuyển Khoản</span>
							  <span>'Thanh Toán hóa đơn BaChaCha' kèm theo địa chỉ Email của bạn khi đăng nhập hệ thống và số điện thoại</span>
						  </p>
				</div>
				<div class="w-100"></div>
				
						<div class="cart-detail cart-total p-3 p-md-4">
							<h3 class="billing-heading mb-4">Tổng Giá Trị Của Hóa Đơn</h3>
							<p class="d-flex">
									  <span>Tổng tiền</span>
									  <span>{{$tonggia}} VND</span>
								  </p>
								  
								  <p class="d-flex">
									  <span>Giảm Giá</span>
									  <span>0.00</span>
								  </p>
								  <hr>
								  <p class="d-flex total-price">
									  <span>Total</span>
									  <span>{{$tonggia}} VND</span>
								  </p>
						</div>
								
				<div class="w-100"></div>
				<div class="col-md-12 ">
				<div class="form-group mt-5">
					
				  <button type="submit" class="btn btn-primary py-3 px-4" placeholder="">Xác Nhận</button>
				</div>
			  </div>
	            </div>
	          </form><!-- END -->



	          
	          	
	          </div>
          </div> <!-- .col-md-8 -->
        </div>
    	</div>
    </section>

    @include('footer')
  </body>
</html>