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
    }
}
$(window).on('load',function(){
    $('#con-close-modal').on('show.bs.modal', function(event){
        var button = $(event.relatedTarget);
        var recipient = button.data('value');
        var modal = $(this);
        modal.find('.modal-body #idloai').val(recipient.id);
        modal.find('.modal-body #tenloai').val(recipient.tenloai);
    })
})