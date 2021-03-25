Notiflix.Notify.Init({position:"right-bottom",});
Notiflix.Loading.Init({ svgColor:"#a38555", }); 
App ={
    test:function(){
        $.ajax({
            type:'GET',
            url:'GioHangAjax',
            success: function(data){
                Notiflix.Block.Pulse('#noidunggio');
                $('#chitietgio').fadeIn();
                $('#chitietgio').html(data);
                Notiflix.Block.Remove('#noidunggio',200);
           ; }
        })
    },
    addCart:function(id){
        Notiflix.Loading.Pulse('Đang Xử Lý...');
        $.ajax({
            type:'GET',
            url:'AddGioHang',
            data:{id:id},
            success:function(result){
                if(result == 0){
                    Notiflix.Notify.Success('Thêm Vào giở hàng thành công');
                    Notiflix.Loading.Remove(600);
                }
                else{
                        if(result == 2){
                            Notiflix.Report.Info( 'Thông Tin', 'Đã hết hàng', 'Xác Nhận', function(){Notiflix.Loading.Remove();} );
                        }else{
                            Notiflix.Report.Info( 'Thông Tin', 'Bạn đã thêm mặt hàng này vào giỏ hàng rồi!!', 'Xác Nhận', function(){Notiflix.Loading.Remove();} );
                        }
                     
                }
            }
        })
    },
    addChiTiet: function(id){
        Notiflix.Loading.Pulse('Đang Xử Lý...');
        let soluong = $('#quantity').val().toString();
        $.ajax({
            type:'GET',
            url:'AddGioHangChiTiet',
            data:{id:id,
                soluong:soluong},
            success: function(result){
                
                if(result == 0){
                    Notiflix.Notify.Success('Thêm Vào giở hàng thành công');
                    Notiflix.Loading.Remove(600);
                }
                else{
                        if(result == 3){
                            Notiflix.Report.Info( 'Thông Tin', 'Bạn nhập quá số lượng hàng còn lại', 'Xác Nhận', function(){Notiflix.Loading.Remove();} );
                        }
                        if(result == 2){
                            Notiflix.Report.Info( 'Thông Tin', 'Đã hết hàng', 'Xác Nhận', function(){Notiflix.Loading.Remove();} );
                        }else{
                            Notiflix.Report.Info( 'Thông Tin', 'Bạn đã thêm mặt hàng này vào giỏ hàng rồi!! Vào chi tiết giỏ hàng để xác nhận thay đổi', 'Xác Nhận', function(){Notiflix.Loading.Remove();} );
                        }
                     
                }
            }
        });
    }
}