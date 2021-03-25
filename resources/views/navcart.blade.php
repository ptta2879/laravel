@if (Auth::check())
<div  class="order-lg-last btn-group">
    <a onclick="App.test();" href="" class="btn-cart dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="flaticon-shopping-bag"></span>

    </a>
        <div id="noidunggio" class="dropdown-menu dropdown-menu-right">
              <div id="chitietgio">
                
              </div>
            
              <a class="dropdown-item text-center btn-link d-block w-100" href="GioHang">
                  Xem Tất Cả
                  <span class="ion-ios-arrow-round-forward"></span>
              </a>
            </div>
  </div>
  
@endif

