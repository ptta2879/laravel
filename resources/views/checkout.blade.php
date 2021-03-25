<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Liquor Store - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    

	@include('wrap')  
    
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="Home">Liquor <span>store</span></a>
      @include('navcart');

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
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
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
						<form action="#" class="billing-form">
							<h3 class="mb-4 billing-heading">Chi Tiết Hóa Đơn</h3>
	          	<div class="row align-items-end">
	          		<div class="col-md-6">
	                <div class="form-group">
	                	<label for="firstname">Họ Và Tên Đệm</label>
	                  <input type="text" required=""  class="form-control" placeholder="Họ của bạn">
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="lastname">Tên</label>
	                  <input type="text" required="" class="form-control" placeholder="Tên của bạn">
	                </div>
                </div>
                
		            <div class="w-100"></div>
		            <div class="col-md-12">
	                <div class="form-group">
	                	<label for="phone">Số Điện Thoại</label>
	                  <input type="text" required="" class="form-control" placeholder="">
	                </div>
	              </div>
	              <div class="col-md-12">
	                <div class="form-group">
	                	<label for="emailaddress">Địa Chỉ Email</label>
	                  <input type="text" required="" class="form-control" placeholder="Địa Chỉ">
	                </div>
                </div>
                <div class="w-100"></div>
                <div class="form-group mt-4">
					<div class="radio">
					  <label class="mr-3"><input type="radio" name="optradio"> Create an Account? </label>
					  <label><input type="radio" name="optradio"> Ship to different address</label>
					</div>
				</div>
				<div class="w-100"></div>
				
						<div class="cart-detail cart-total p-3 p-md-4">
							<h3 class="billing-heading mb-4">Tổng Giá Trị Của Hóa Đơn</h3>
							<p class="d-flex">
									  <span>Tổng tiền</span>
									  <span>$20.60</span>
								  </p>
								  
								  <p class="d-flex">
									  <span>Giảm Giá</span>
									  <span>$3.00</span>
								  </p>
								  <hr>
								  <p class="d-flex total-price">
									  <span>Total</span>
									  <span>$17.60</span>
								  </p>
						</div>
								
				<div class="w-100"></div>
				<div class="col-md-12 ">
				<div class="form-group mt-5">
					
				  <button type="submit" class="btn btn-primary py-3 px-4" placeholder="">Place an order</button>
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