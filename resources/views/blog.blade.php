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
        <li class="nav-item active"><a href="BaiViet" class="nav-link">Bài Viết</a></li>
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
          	<p class="breadcrumbs mb-0"><span class="mr-2"><a href="Home">Trang Chủ <i class="fa fa-chevron-right"></i></a></span> <span>Bài Viết <i class="fa fa-chevron-right"></i></span></p>
            <h2 class="mb-0 bread">Các Bài Viết</h2>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row d-flex">
          @foreach ($baiviet as $item)
          <div class="col-lg-6 d-flex align-items-stretch ftco-animate">
          	<div class="blog-entry d-md-flex">
          		<a href="NoiDungBaiViet?id={{$item->id}}" class="block-20 img" style="background-image: url('images/baiviet-{{$item->id}}.jpg');">
              </a>
              <div class="text p-4 bg-light">
              	<div class="meta">
              		<p><span class="fa fa-calendar"></span>{{$item->ngaydang}}</p>
              	</div>
                <h3 class="heading mb-3"><a href="NoiDungBaiViet?id={{$item->id}}">{{$item->tieude}}</a></h3>
                
                <a href="NoiDungBaiViet?id={{$item->id}}" class="btn-custom">Tiếp Tục <span class="fa fa-long-arrow-right"></span></a>

              </div>
            </div>
          </div>
          @endforeach
          
          
        </div>
        <div class="row mt-5">
          <div class="col-6"></div>
          <div class="col-6 text-center">
            <div class="block-27 ">
              {{$baiviet->links()}}
            </div>
          </div>
        </div>
      </div>
    </section>	

    @include('footer')
    
  </body>
</html>