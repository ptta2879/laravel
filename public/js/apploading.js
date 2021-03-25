

Notiflix.Notify.Init({position:"right-bottom",});
Notiflix.Loading.Init({ svgColor:"#a38555", }); 
Notiflix.Block.Init({svgColor:"#a37630",messageColor:"#bf873e",});
Notiflix.Confirm.Init({ titleColor:"#c69332",okButtonBackground:"#c69f32", }); 
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
                    
                    Notiflix.Report.Success( 'Thêm Sản Phẩm', 'Sản phẩm đã được thêm vào giỏ hàng', 'OK',function(){window.location='SanPham';}); 
                    Notiflix.Loading.Remove();
                    
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
    },
    deleteCart: function(id){
        Notiflix.Loading.Pulse('Đang Xử Lý...');
        Notiflix.Confirm.Show( 'Xác nhận xóa', 'Bạn Có chắc muốn xóa sản phẩm ra khỏi giở hàng không?', 'Yes', 'No', function(){ 
            $.ajax({
                type:'GET',
                data:{id:id},
                url: 'XoaGioHang',
                success: function(reuslt){
                    
                    Notiflix.Report.Success( 'Xóa Sản Phẩm', 'Sản phẩm đã được xóa khỏi giỏ hàng', 'OK',function(){window.location='GioHang';}); 
                        Notiflix.Loading.Remove(600);
                }
            });
         },function(){
            Notiflix.Loading.Remove(600);
         }); 
        
    },
    refeshCart: function(id){
        // Notiflix.Loading.Pulse('Đang Xử Lý...');
        let idselect = '#soluong'+id.toString();
        let soluong =$(idselect).val().toString();
        $.ajax({
            type:'GET',
            url:'TinhTien',
            data: {
                id:id,
                soluong:soluong
            },
            success: function(result){

            }
        });
        
    },
    changeCart: function(){
        
        Notiflix.Block.Pulse('#tongtiencart','Bạn Chưa Bấm Nút Cập Nhật Giá');
        $('#thanhtoan').hide();
    }
}