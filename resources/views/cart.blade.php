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
          	<p class="breadcrumbs mb-0"><span class="mr-2"><a href="Home">Trang Chủ <i class="fa fa-chevron-right"></i></a></span> <span>Giỏ Hàng <i class="fa fa-chevron-right"></i></span></p>
            <h2 class="mb-0 bread">Giỏ Hàng Của Bạn</h2>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
    			<div class="table-wrap">
						<table class="table">
						  <thead class="thead-primary">
						    <tr>
						    	<th>&nbsp;</th>
						    	<th>&nbsp;</th>
						    	<th>Sản Phẩm</th>
						      <th>Giá</th>
						      <th>Số Lượng</th>
						      <th>Tổng Tiền</th>
						      <th>&nbsp;</th>
							  <th>&nbsp; </th>
							  
						    </tr>
						  </thead>
						  <tbody>
						    <tr class="alert" role="alert">
						    	<th>1</th>
						    	<td>
						    		<div class="img" style="background-image: url(images/prod-1.jpg);"></div>
						    	</td>
						      <td>
						      	<div class="email">
						      		<span>Jim Beam Kentucky Straight</span>
						      		<span>Fugiat voluptates quasi nemo, ipsa perferendis</span>
						      	</div>
						      </td>
						      <td>$44.99</td>
						      <td  class="quantity">
					        	<div class="input-group">
				             	<input type="number" name="quantity" class="quantity form-control input-number" value="2" min="1" max="100">
				          	</div>
				          </td>
				          <td>$89.98</td>
						      <td>
						      	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				            	<span aria-hidden="true"><i class="fa fa-close"></i></span>
				          	</button>
				        	</td>
							<td >
								<button type="button" class="close" aria-label="Refresh">
							  <span aria-hidden="true"><i class="fa fa-refresh"></i></span>
							</button>
						  </td>
						    </tr>
						  </tbody>
						</table>
					</div>
    		</div>
    		<div class="row justify-content-end">
    			<div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Tổng Tiền Thanh Toán</h3>
    					<p class="d-flex">
    						<span>Tổng Tiền Các Sản Phẩm</span>
    						<span>$20.60</span>
    					</p>
    					
    					<p class="d-flex">
    						<span>Giảm Giá</span>
    						<span>$3.00</span>
    					</p>
    					<hr>
    					<p class="d-flex total-price">
    						<span>Tổng Cộng</span>
    						<span>$17.60</span>
    					</p>
    				</div>
    				<p class="text-center"><a href="ThanhToan"  class="btn btn-primary py-3 px-4 ">Lập Hóa Đơn</a></p>
    			</div>
    		</div>
    	</div>
    </section>

    @include('footer')
  </body>
</html>