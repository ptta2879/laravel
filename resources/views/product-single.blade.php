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
          	<p class="breadcrumbs mb-0"><span class="mr-2"><a href="Home">Trang Chủ <i class="fa fa-chevron-right"></i></a></span> <span><a href="SanPham">Sản Phẩm <i class="fa fa-chevron-right"></i></a></span> <span>Chi Tiết Sản Phẩm <i class="fa fa-chevron-right"></i></span></p>
            <h2 class="mb-0 bread">Chi Tiết Sản Phẩm</h2>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
          
            <div class="col-lg-6 mb-5 ftco-animate">
    		  		<a href="images/prod-{{$sanpham->id}}.jpg" class="image-popup prod-img-bg"><img src="images/prod-{{$sanpham->id}}.jpg" class="img-fluid" alt="Colorlib Template"></a>
    		  	</div>
            <div class="col-lg-6 product-details pl-md-5 ftco-animate">
              <h3>{{$sanpham->tensp}}</h3>
              
              <p class="price"><span>{{$sanpham->gia}} VND</span></p>
              <p>{{$sanpham->gioithieu}}</p>
              <div class="row mt-4">
                <div class="input-group col-md-6 d-flex mb-3">
                   <label class="mr-2" for="quantity"> Số Lượng</label>
                   @foreach ($soluong as $item)
                   <input type="number" id="quantity" name="quantity" class="quantity form-control input-number" value="1" min="1" >
                   
                </div>
                <div class="w-100"></div>
                <div class="col-md-12">
                  <p style="color: #000;"> Số lượng còn lại: 
                      {{$item->soluong}}
                  @endforeach </p>
                </div>
              </div>
              @if (Auth::check())
              <p><button type="button" onclick="App.addChiTiet({{$sanpham->id}});" class="btn btn-primary py-2 mr-2">Thêm Vào Giỏ Hàng</button></p>
              @else
              <a href="login" class="btn btn-primary py-3 px-5 mr-2">Đăng Nhập Để Mua</a>
              @endif
              
              
            </div>
          </div>
  
  
  
  
          <div class="row mt-5">
            <div class="col-md-12 nav-link-wrap">
              <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link ftco-animate active mr-lg-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Mô Tả</a>
  
                <a class="nav-link ftco-animate mr-lg-1" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Nguồn Gốc</a>
  
                
  
              </div>
            </div>
            <div class="col-md-12 tab-wrap">
              
              <div class="tab-content bg-light" id="v-pills-tabContent">
  
                <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
                  <div class="p-4">
                    <h3 class="mb-4">{{$sanpham->tensp}}</h3>
                    <p>{{$sanpham->mota}}</p>
                  </div>
                </div>
  
                <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
                  <div class="p-4">
                    <h3 class="mb-4">Xuất xứ của {{$sanpham->tensp}}</h3>
                    <p>{{$sanpham->nguongoc}}</p>
                  </div>
                </div>
                
              </div>
            </div>
          
    			
    			
        </div>
    	</div>
    </section>

   @include('footer')

  <script>
		$(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });
		    
		});
	</script>
    
  </body>
</html>