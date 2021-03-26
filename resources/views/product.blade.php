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
          	<p class="breadcrumbs mb-0"><span class="mr-2"><a href="Home">Trang Chủ <i class="fa fa-chevron-right"></i></a></span> <span>Sản Phẩm <i class="fa fa-chevron-right"></i></span></p>
            <h2 class="mb-0 bread">Sản Phẩm</h2>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="row mb-4">
							<div class="col-md-12 d-flex justify-content-between align-items-center">
								<h4 class="product-select">Các Sản Phẩm Của BaChaCha</h4>
							</div>
						</div>
						<div class="row">
							@foreach ($sanpham as $item)
							<div class="col-md-4 d-flex">
								<div class="product ftco-animate">
									<div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/prod-{{$item->id}}.jpg);">
										<div class="desc">
											<p class="meta-prod d-flex">
												
												<a href="javascript:void(0);" class=" d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
												<a href="ChiTietSanPham?id={{$item->id}}" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
											</p>
										</div>
									</div>
									<div class="text text-center">
										<span class="category">{{$item->loaisanpham->tenloai}}</span>
										<h2>{{$item->tensp}}</h2>
										<p class="mb-0"> <span class="price">{{$item->gia}} VND</span></p>
									</div>
								</div>
							</div>
								@endforeach
							
								
							
							
							
						</div>
						<div class="row mt-5">
							<div class="col-6"></div>
		          <div class="col-6 text-center">
		            <div class="block-27">
		              <ul>
		                {{$sanpham->links()}}
		              </ul>
		            </div>
		          </div>
		        </div>
					</div>

					<div class="col-md-3">
						<div class="sidebar-box ftco-animate">
              
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Bài Viết Đề Xuất</h3>
			  @foreach ($baiviet as $item)
			  <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_{{$item->id}}.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="NoiDungBaiViet?id={{$item->id}}">{{$item->tieude}}</a></h3>
                  <div class="meta">
                    <div><span class="fa fa-calendar"></span> {{$item->ngaydang}} </div>
                    
                  </div>
                </div>
			</div>
			  @endforeach
              
              
              
              
            </div>
					</div>
				</div>
			</div>
		</section>

   @include('footer')
  </body>
</html>