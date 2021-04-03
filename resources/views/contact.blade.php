<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Liên Hệ BaChaCha</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon"  href="favicon.ico"/>
    

	@include('wrap')  
    @include('mess')
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">bachacha <span>store</span></a>
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
          <li class="nav-item active"><a href="LienHe" class="nav-link">Liên Hệ</a></li>
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
          	<p class="breadcrumbs mb-0"><span class="mr-2"><a href="Home">Trang Chủ <i class="fa fa-chevron-right"></i></a></span> <span>Liên Hệ <i class="fa fa-chevron-right"></i></span></p>
            <h2 class="mb-0 bread">Liên Hệ</h2>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-12">
						<div class="wrapper px-md-4">
							<div class="row mb-5">
								<div class="col-md-3">
									<div class="dbox w-100 text-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-map-marker"></span>
				        		</div>
				        		<div class="text">
					            <p><span>Địa Chỉ</span> 12 Nguyễn Văn Bảo, Phường 5, Gò Vấp</p>
					          </div>
				          </div>
								</div>
								<div class="col-md-3">
									<div class="dbox w-100 text-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-phone"></span>
				        		</div>
				        		<div class="text">
					            <p><span>Số Điện Thoại</span> <a href="tel:0388823807">0388823807</a></p>
					          </div>
				          </div>
								</div>
								<div class="col-md-3">
									<div class="dbox w-100 text-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-paper-plane"></span>
				        		</div>
				        		<div class="text">
					            <p><span>Email:</span> <a href="mailto:bachachavn@gmail.com">bachachavn@gmail.com</a></p>
					          </div>
				          </div>
								</div>
								<div class="col-md-3">
									<div class="dbox w-100 text-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-globe"></span>
				        		</div>
				        		<div class="text">
					            <p><span>Website</span> <a href="#">bachacha.com</a></p>
					          </div>
				          </div>
								</div>
							</div>
							<div class="row no-gutters">
								<div class="col-md-7">
									<div class="contact-wrap w-100 p-md-5 p-4">
										<h3 class="mb-4">Liên Hệ Với Chúng Tôi</h3>
										<form method="POST" action="{{url('NhanLienHe')}}" id="contactForm" name="contactForm" class="contactForm">
											{{ csrf_field() }}
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label class="label" for="name">Tên Đầy Đủ</label>
														<input type="text" required="" class="form-control" name="fullname" id="fullname" placeholder="Tên">
														@if ($errors->has('fullname'))
                                   							<span class="help-block">
                                        						<strong>{{ $errors->first('fullname') }}</strong>
                                    						</span>
                               							 @endif
													</div>
												</div>
												<div class="col-md-6"> 
													<div class="form-group">
														<label class="label" for="email">Địa Chỉ Email</label>
														<input type="email" required="" class="form-control" name="email" id="email" placeholder="Email">
														@if ($errors->has('email'))
                                   							<span class="help-block">
                                        						<strong>{{ $errors->first('email') }}</strong>
                                    						</span>
                               							 @endif
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label class="label" for="subject">Tiêu Đề</label>
														<input type="text" required="" class="form-control" name="tieude" id="tieude" placeholder="Tiêu Đề">
														@if ($errors->has('tieude'))
                                   							<span class="help-block">
                                        						<strong>{{ $errors->first('tieude') }}</strong>
                                    						</span>
                               							 @endif
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label class="label" for="#">Lời Nhắn</label>
														<textarea name="message" required="" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
														@if ($errors->has('message'))
                                   							<span class="help-block">
                                        						<strong>{{ $errors->first('message') }}</strong>
                                    						</span>
                               							 @endif
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<button type="submit" class="btn btn-primary">Gửi</button>
														<div class="submitting"></div>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
								<div class="col-md-5 order-md-first d-flex align-items-stretch">
									<div id="map" class="map"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

   @include('footer')
   @if (session('success'))
   	<script>Notiflix.Notify.Success("  {{session('success')}} ");</script>
   @endif
   @if (session('fail'))
   <script>Notiflix.Notify.Failure("  {{session('fail')}} ");</script>
   @endif
  </body>
</html>