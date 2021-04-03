<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Các Sản Phẩm Đã Mua BaChaCha</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="shortcut icon"  href="favicon.ico"/>

	@include('wrap')  
  @include('mess')
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
          <li class="nav-item active"><a href="HangDaMua" class="nav-link">Đơn Hàng</a></li>
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
          	<p class="breadcrumbs mb-0"><span class="mr-2"><a href="Home">Trang Chủ <i class="fa fa-chevron-right"></i></a></span> <span>Đơn Hàng <i class="fa fa-chevron-right"></i></span></p>
            <h2 class="mb-0 bread">Đơn Hàng Của Bạn</h2>
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
                                <th>STT</th>
						    	<th>Họ Và Tên Đệm</th>
						    	<th>Tên</th>
						    	
						      <th>Tổng Tiền</th>
						      <th>Địa Chỉ</th>
							  <th>Số điện Thoại</th>
						      <th>Trạng Thái</th>
							  <th>&nbsp; </th>
							  
						    </tr>
						  </thead>
						  <tbody>
                              @php
                                 $count = 1; 
                              @endphp
						    @foreach ($donhang as $item)
                            <tr class="alert" role="alert">
						    	<td>{{$count}}</td>
						    	<td>
						    		<div class="email">
                                        <span>{{$item->hovaten}}</span>
                                        
                                    </div>
						    	</td>
						      <td>
						      	<div class="email">
						      		<span>{{$item->ten}}</span>
						      		
						      	</div>
						      </td>
						      <td>{{$item->tonggia}} VND</td>
						      <td class="quantity">
					        	<div class="email">
                                    <span>{{$item->ngaylap}}</span>
                                    
                                </div>
				          </td>
                          <td>{{$item->sdt}}</td>
                          <td>@if($item->trangthai == 0 )
                              {{'Chưa xác nhận'}}
                          @else
                            @if ($item->trangthai == 1)
                                {{'Đang giao Hàng'}}
                            @else 
                            {{'Đã nhận hàng'}}
                            @endif
                          @endif
                        </td>
                            <td>
                                
                                <button type="button" class="btn btn-primary btn-icon" data-toggle="modal" data-val="{{$item->ctdonhang}}" data-target="#exampleModal">
                                <span aria-hidden="true"><i class="fa fa-search"></i></span>
                                </button>
                            </td>
						    </tr>
                             @php
                                 $count++;
                             @endphp
                            @endforeach
                            
						  </tbody>
						</table>
					</div>
    		</div>
    		
    	</div>
    </section>

    
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Thông tin đơn hàng</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div id="noidungdonhang" class="modal-body">
                    
                  </div>
            </div>
            <div class="modal-footer">
              <button id="dong" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    @include('footer')
  </body>
</html>
