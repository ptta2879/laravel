<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Chi Tiết Bài Viết BaChaCha</title>
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
          	<p class="breadcrumbs mb-0"><span class="mr-2"><a href="Home">Trang Chủ <i class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a href="BaiViet">Bài Viết <i class="fa fa-chevron-right"></i></a></span> <span>Nội Dung Bài Viết <i class="fa fa-chevron-right"></i></span></p>
            <h2 class="mb-0 bread">Nội Dung Bài Viết</h2>
          </div>
        </div>
      </div>
      
    </section>

    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">

           
          <div class="col-lg-8 ftco-animate m-auto">
            <h1> {{$baiviet->tieude}} </h1>
          	 <div class="overflow-auto">{!!$baiviet->noidung!!}</div> 
            <div class="tag-widget post-tag-container mb-5 mt-5">
              <div class="tag-widget post-tag-container mb-5 mt-5">
                <div class="tagcloud">
                 @php
                     $arrTag = explode(",",$baiviet->tags); ;
                 @endphp
                 @foreach ($arrTag as $tag)
 
                     <a href="BaiViet/{{$tag}}" class="tag-cloud-link">{{$tag}}</a>
                 @endforeach
                  
                  
                </div>
              </div>
            </div>
            @foreach ($thanhvien as $item)
            
            <div class="about-author d-flex p-4 bg-light">
              <div class="bio mr-5">
                <img src="images/nv{{$item->idtk}}.jpg" alt="Image placeholder" class="img-fluid mb-4">
              </div>
              <div class="desc">
                @foreach ($taikhoan as $val)
                  <h3>{{$val->hovaten . ' '. $val->ten}}</h3>
                @endforeach
                
                <p> {{$item->caunoi}} </p>
              </div>
            </div>
            @endforeach
            
          </div> <!-- .col-md-8 -->
          
          <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">

            <div class="sidebar-box ftco-animate">
              <h3>Bài Viết Mới</h3>
              @foreach ($baivietmoi as $item)
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/baivietnew-{{$item->id}}.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="NoiDungBaiViet?id={{$item->id}}">{{$item->tieude}}</a></h3>
                  <div class="meta">
                    <div><span class="fa fa-calendar"></span> {{$item->ngaydang}}</div>
                    
                  </div>
                </div>
              </div>
              
              @endforeach
              
            </div>

            <div class="sidebar-box ftco-animate overflow-auto">
              <h3>Bài Viết Liên Quan</h3>
              @if (isset($baivietlienquan))
              @foreach ($baivietlienquan as $result)
                
                <div class="block-21 mb-4 d-flex">
                  <a class="blog-img mr-4" style="background-image: url(images/baivietnew-{{$result->id}}.jpg);"></a>
                  <div class="text">
                    <h3 class="heading"><a href="NoiDungBaiViet?id={{$result->id}}">{{$result->tieude}}</a></h3>
                    <div class="meta">
                      <div><span class="fa fa-calendar"></span> {{$result->ngaydang}}</div>
                      
                    </div>
                  </div>
                </div>
               
              
              
              @endforeach
                  @else
                  {{'Chưa có bài liên quan'}}
              @endif
              
              
            </div>

            
          </div>
        </div>
      </div>
    </section> <!-- .section -->

    @include('footer')
  

  <!-- loader -->
  
    
  </body>
</html>