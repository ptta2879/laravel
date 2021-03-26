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
						    	<th>&nbsp;Sản Phẩm</th>
						    	
						      <th>Giá</th>
						      <th>Số Lượng</th>
						      <th>Tổng Tiền</th>
							  <th>&nbsp;</th>
						      <th>&nbsp;</th>
							  <th>&nbsp; </th>
							  
						    </tr>
						  </thead>
						  <tbody>
						    
								@foreach ($giohang as $item)
								<tr class="alert" role="alert">
								<td>
						    		<div class="img" style="background-image: url(images/prod-{{$item->idsp}}.jpg);"></div>
						    	</td>
								@foreach ($item->sanpham as $val)
								<td>
									<div class="email">
										<span>{{$val->tensp}}</span>
									  <span></span>
									</div>
								</td>
								<td> {{$val->gia}} VND</td>
								@endforeach
						      
						      <td  class="quantity">
					        	<div class="input-group">
				             	<input id='soluong{{$item->id}}' type="number" onchange="App.changeCart();" name="quantity" value="{{$item->soluong}}" class="quantity form-control input-number" min="1" >
				          	</div>
				          </td>
				          <td>{{$item->gia}}</td>
						      <td>
						      	<button type="button" class="close" onclick="App.deleteCart({{$item->id}});">
				            	<span aria-hidden="true"><i class="fa fa-close"></i></span>
				          	</button>
				        	</td>
							<td >
								<button type="button" class="close" onclick="App.refeshCart({{$item->id}});" aria-label="Refresh">
							  <span aria-hidden="true"><i class="fa fa-refresh"></i></span>
							</button>
						  </td>
						</tr>
								@endforeach
						    	
						    	
						    
						  </tbody>
						</table>
					</div>
    		</div>
    		<div class="row justify-content-end">
    			<div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
    				<div id='tongtiencart' class="cart-total mb-3">
    					<h3>Tổng Tiền Thanh Toán</h3>
    					<p class="d-flex">
    						<span>Tổng Tiền Các Sản Phẩm</span>
    						<span>{{$tonggia}}</span>
    					</p>
    					
    					<p class="d-flex">
    						<span>Giảm Giá</span>
    						<span>0.00</span>
    					</p>
    					<hr>
    					<p class="d-flex total-price">
    						<span>Tổng Cộng</span>
    						<span>{{$tonggia}}</span>
    					</p>
    				</div>
    				<p class="text-center"><a href="ThanhToan" id="thanhtoan"  class="btn btn-primary py-3 px-4 ">Lập Hóa Đơn</a></p>
    			</div>
    		</div>
    	</div>
    </section>

    @include('footer')
  </body>
</html>