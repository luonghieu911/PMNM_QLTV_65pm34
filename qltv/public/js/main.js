$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
function Delete(id, url){
    if(confirm("Bạn có thực sự muốn xóa danh mục này không?")){
        $.ajax({
            type: 'DELETE',
            datatype:JSON,
            data:{id},
            url:url,
            success:function (result){
                console.log(result);
                if(result.error == 'false'){
                    alert(result.message);
                    location.reload();
                }
                else {
                    alert("Xóa danh mục không thành công");
                }
            }
        })
    }
}
