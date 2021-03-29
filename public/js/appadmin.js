Notiflix.Notify.Init({position:"right-bottom",});
Notiflix.Loading.Init({ svgColor:"#a38555", }); 
Notiflix.Block.Init({svgColor:"#a37630",messageColor:"#bf873e",});
Notiflix.Confirm.Init({ titleColor:"#c69332",okButtonBackground:"#c69f32", }); 
App={
    lienHe: function(id){
        Notiflix.Loading.Pulse('Đang Xử Lý...');
        let select = '#trangthai'+ id.toString();
        let giatri = $(select).val();
        $.ajax({
            type:'GET',
            url:'LienHeUpdate',
            data:{id:id,
                giatri:giatri,
            },
            success:function(result){
                if(result == 'success'){
                    Notiflix.Notify.Success('Thay Đổi Trạng Thái Thành Công');
                    Notiflix.Loading.Remove(600);
                }else{
                    Notiflix.Notify.Failure('Thay Đổi Trạng Thái Không Thành Công');
                    Notiflix.Loading.Remove(600);
                }
            }
        });
    },
    xoaLoaiSanPham: function(id){
        Notiflix.Loading.Pulse('Đang Xử Lý...');
        var _token = $('input[name="_token"]').val();
        $.ajax({
            type:'DELETE',
            data: {id:id,
            _token:_token},
            url: 'DeleteLoaiSanPham',
            success:function(result){
                if(result == 'thanhcong'){
                    
                    Notiflix.Report.Success( 'Thành Công', 'Thành Công Xóa Loại Sản Phẩm', 'Xác Nhận', function(){
                        Notiflix.Loading.Remove(600);
                    window.location='LoaiSanPham';
                    } ); 
                    
                }else{
                    Notiflix.Report.Failure( 'Thất Bại', 'Xóa Loại Sản Phẩm Không Thành Công', 'Xác Nhận', function(){
                        Notiflix.Loading.Remove(600);
                        window.location='LoaiSanPham'
                    } ); 
                    
                }
            }

        });
    },
    xoaSanPham: function(id){
        Notiflix.Confirm.Show( 'Thông báo', 'Bạn Có muốn xóa sản phẩm', 'Yes', 'No', function(){ 
            Notiflix.Loading.Pulse('Đang Xử Lý...');
        var _token = $('input[name="_token"]').val();
        $.ajax({
            type:'DELETE',
            data: {id:id,
            _token:_token},
            url: 'DeleteSanPham',
            success:function(result){
                if(result == 'thanhcong'){
                    
                    Notiflix.Report.Success( 'Thành Công', 'Thành Công Xóa Sản Phẩm', 'Xác Nhận', function(){
                        Notiflix.Loading.Remove(600);
                    window.location='SanPham';
                    } ); 
                    
                }else{
                    Notiflix.Report.Failure( 'Thất Bại', 'Xóa Sản Phẩm Không Thành Công', 'Xác Nhận', function(){
                        Notiflix.Loading.Remove(600);
                        window.location='SanPham'
                    } ); 
                    
                }
            }

        });
        } ); 
        
    },
    donHang:function(id){
        Notiflix.Loading.Pulse('Đang Xử Lý...');
        let select = '#trangthai'+ id.toString();
        let giatri = $(select).val();
        var _token = $('input[name="_token"]').val();
        $.ajax({
            type:'POST',
            data:{
                id:id,
                trangthai:giatri,
                _token:_token
            },
            url:'ThayDoiTrangThai',
            success:function(result){
                if(result == 'success'){
                    Notiflix.Notify.Success('Thay Đổi Trạng Thái Thành Công');
                    Notiflix.Loading.Remove(600);
                }else{
                    Notiflix.Notify.Failure('Thay Đổi Trạng Thái Không Thành Công');
                    Notiflix.Loading.Remove(600);
                }
            }
        })
    }
}
$(window).on('load',function(){
    $('#con-close-modal').on('show.bs.modal', function(event){
        var button = $(event.relatedTarget);
        var recipient = button.data('value');
        var modal = $(this);
        modal.find('.modal-body #idloai').val(recipient.id);
        modal.find('.modal-body #tenloai').val(recipient.tenloai);
    });

    $('#ctdonhang').on('show.bs.modal',function(event){
        var button = $(event.relatedTarget);
        var recipient = button.data('value');
        var modal = $(this);
        let count = 1;
        $('#noidung tr').remove();
        $.each(recipient,function(key,val){
            var idsp = val.idsp;
            
            $.ajax({
                type:'GET',
                data:{
                    idsp:idsp
                },
                url:'ctDonHang',
                success: function(result){
                    
                    var print = '<tr><td>'+count+'</td><td>'+result+'</td><td>'+val.gia+'</td><td>'+val.soluong+'</td></tr>';
                    $('#noidung').append(print);
                    ++count;
                }
            })
            
        })
    })
    $('#nhapkho').on('show.bs.modal',function(event){
        var button = $(event.relatedTarget);
        var recipient = button.data('value');
        var modal = $(this);
        modal.find('.modal-body #idloai').val(recipient.id);
        modal.find('.modal-body #soluong').val(recipient.soluong);
    })
})