<!DOCTYPE html>
<html lang="en">
  <head>
    <title>BaChaCha - Trang Chủ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="shortcut icon"  href="favicon.ico"/>

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
          <li class="nav-item active "><a href="Home" class="nav-link">Trang Chủ</a></li>
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
    
    <div class="hero-wrap" style="background-image: url('images/newbg.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-8 ftco-animate d-flex align-items-end">
          	<div class="text w-100 text-center">
	            <h1 class="mb-4"><span>BaChaCha</span> Thơm Ngon <span>Bá Cháy.</span></h1>
	            <p><a href="SanPham" class="btn btn-primary py-2 px-4">Cửa Hàng</a> <a href="GioiThieu" class="btn btn-white btn-outline-white py-2 px-4">Tìm Hiểu Thêm</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
	
    <section class="ftco-intro">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md-4 d-flex">
    				<div class="intro d-lg-flex w-100 ftco-animate">
    					<div class="icon">
    						<span class="flaticon-support"></span>
    					</div>
    					<div class="text">
    						<h2>Hỗ trợ trực tuyến 24/7</h2>
    						<p>Cửa hàng BaChaCha sẽ hỗ trợ bạn khi bạn cần thông tin chi tiết về sản phẩm và giải đáp các thắc mắc của khác hàng.</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-4 d-flex">
    				<div class="intro color-1 d-lg-flex w-100 ftco-animate">
    					<div class="icon">
    						<span class="flaticon-cashback"></span>
    					</div>
    					<div class="text">
    						<h2>Hỗ trợ hoàn tiền</h2>
    						<p>Hỗ trợ hoàn tiền khi nhận sản phẩm không đúng mô tả.</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-4 d-flex">
    				<div class="intro color-2 d-lg-flex w-100 ftco-animate">
    					<div class="icon">
    						<span class="flaticon-free-delivery"></span>
    					</div>
    					<div class="text">
    						<h2>Miễn Phí Vận Chuyển</h2>
    						<p>Hỗ trợ miễn phí vận chuyển trong khu vực phường 5, Gò Vấp</p>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section ftco-no-pb">
			<div class="container">
				<div class="row">
					<div class="col-md-6 img img-3 d-flex justify-content-center align-items-center" style="background-image: url(images/gioithieu.jpg);">
					</div>
					<div class="col-md-6 wrap-about pl-md-5 ftco-animate py-5">
	          <div class="heading-section">
	          	<span class="subheading">Since 2020</span>
	            <h2 class="mb-4">Bánh Tráng BaChaCha - Thương Hiệu Ăn Vặt Mới Của Team Sài Thành</h2>

	            <p>Bán tráng là món ăn vặt quốc dân là sản phẩm cải biến cực kỳ nhiều và đa dạng. Thú vị là BaChaCha sẽ đem đến hương vị, sự độc đáo và bất ngờ riêng</p>
	            <p>Điểm nhấn tạo nên sự đặc sắc của thương hiệu chính là những phiên bản bánh tráng lạ kích thích vị giác người dùng thích hợp với hầu hết các bạn trẻ</p>
	            <p class="year">
	            	<strong class="number" data-number="3">0</strong>
		            <span>Đời Nhà Tui Làm Bánh Tráng</span>
	            </p>
	          </div>

					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section ftco-no-pb">
			
		</section>

		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center pb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Dịch vụ thú vị của chúng tôi</span>
            <h2>Sản Phẩm Của Chúng Tôi</h2>
          </div>
        </div>
		{{-- Vieww sp --}}
				<div class="row">
					@foreach ($sanpham as $valsp)
					<div class="col-md-3 d-flex">
						<div class="product ftco-animate">
							<div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/sanphamnew-{{$valsp->id}}.jpg);">
								<div class="desc">
									<p class="meta-prod d-flex">
										@if (Auth::check())
										<a href="javascript:void(0);" onclick="App.addCart({{$valsp->id}});" class=" d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
										@else 

										@endif
										
										<a href="ChiTietSanPham?id={{$valsp->id}}" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
									</p>
								</div>
							</div>
							
							<div class="text text-center">
								
								<span class="category">{{$valsp->loaisanpham->tenloai}}</span>
								<h2>{{$valsp->tensp}}</h2>
								<p class="mb-0"> <span class="price">{{$valsp->gia}} VND</span></p>
							</div>
						</div>
					</div>
					@endforeach
					
					
					
				</div>
				<div class="row justify-content-center">
					<div class="col-md-4">
						<a href="SanPham" class="btn btn-primary d-block">Xem Tất Cả Sản Phẩm <span class="fa fa-long-arrow-right"></span></a>
					</div>
				</div>
			</div>
		</section>
  
		<section class="ftco-section testimony-section img" style="background-image: url(images/newbg.jpg);">
			<div class="overlay"></div>
		  <div class="container">
			<div class="row justify-content-center mb-5">
			  <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
				  <span class="subheading">Nhà Sáng Lập</span>
				<h2 class="mb-3">BaChaCha</h2>
			  </div>
			</div>
			<div class="row ftco-animate">
			  <div class="col-md-12">
				<div class="carousel-testimony owl-carousel ftco-owl">
				  <div class="item">
					<div class="testimony-wrap py-4">
						<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
					  <div class="text">
						<p class="mb-4">On The Way To Success, There Is No Trace Of Lazy Men.</p>
						<div class="d-flex align-items-center">
							<div class="user-img" style="background-image: url(images/nv1.jpg)"></div>
							<div class="pl-3">
								<p class="name">Phan Anh Thảo Nhi</p>
								<span class="position">Marketing Manager</span>
							  </div>
						  </div>
					  </div>
					</div>
				  </div>
				  <div class="item">
					<div class="testimony-wrap py-4">
						<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
					  <div class="text">
						<p class="mb-4">When You Think It’s Too late, The Truth Is, It’s Still Early</p>
						<div class="d-flex align-items-center">
							<div class="user-img" style="background-image: url(images/nv2.jpg)"></div>
							<div class="pl-3">
								<p class="name">Trần Nguyễn Lan Anh</p>
								<span class="position">Marketing Manager</span>
							  </div>
						  </div>
					  </div>
					</div>
				  </div>
				  <div class="item">
					<div class="testimony-wrap py-4">
						<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
					  <div class="text">
						<p class="mb-4">Genius Is One Percent Inspiration And Ninety-nine Percent Perspiration.</p>
						<div class="d-flex align-items-center">
							<div class="user-img" style="background-image: url(images/nv3.jpg)"></div>
							<div class="pl-3">
								<p class="name">Trần Anh Thi</p>
								<span class="position">Marketing Manager</span>
							  </div>
						  </div>
					  </div>
					</div>
				  </div>
				  <div class="item">
					<div class="testimony-wrap py-4">
						<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
					  <div class="text">
						<p class="mb-4">If You Don’t Walk Today, You’ll Have To Run Tomorrow.</p>
						<div class="d-flex align-items-center">
							<div class="user-img" style="background-image: url(images/nv4.jpg)"></div>
							<div class="pl-3">
								<p class="name">Nguyễn Hữu Lộc</p>
								<span class="position">Marketing Manager</span>
							  </div>
						  </div>
					  </div>
					</div>
				  </div>
				  <div class="item">
					<div class="testimony-wrap py-4">
						<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
					  <div class="text">
						<p class="mb-4">Where There Is A Will, There Is A Way. Life is trying things to see if they work</p>
						<div class="d-flex align-items-center">
							<div class="user-img" style="background-image: url(images/nv5.jpg)"></div>
							<div class="pl-3">
								<p class="name">Võ Gia Hân</p>
								<span class="position">Marketing Manager</span>
							  </div>
						  </div>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		</section>


		
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Bài Viết</span>
            <h2>Bài Viết Mới</h2>
          </div>
        </div>
        <div class="row d-flex">
			@foreach ($baiviet as $val)
			<div class="col-lg-6 d-flex align-items-stretch ftco-animate">
				<div class="blog-entry d-flex">
					  <a href="NoiDungBaiViet?id={{$val->id}}" class="block-20 img" style="background-image: url('images/baivietnew-{{$val->id}}.jpg');">
				  </a>
				  <div class="text p-4 bg-light">
					  <div class="meta">
						  <p><span class="fa fa-calendar"></span> {{$val->ngaydang}}</p>
					  </div>
					<h3 class="heading mb-3"><a href="NoiDungBaiViet?id={{$val->id}}">{{$val->tieude}}</a></h3>
					<p>{{$val->tomtat}}</p>
					<a href="NoiDungBaiViet?id={{$val->id}}" class="btn-custom">Tiếp tục <span class="fa fa-long-arrow-right"></span></a>
	
				  </div>
				</div>
			  </div>
			  @endforeach
          
          
        </div>
      </div>
    </section>	

    @include('footer');
    
	
@if (session('thanhconghoadon'))
<script>Notiflix.Notify.Success("  {{session('thanhconghoadon')}} ");</script>
@endif
  <!-- loader -->
  
  </body>
</html>