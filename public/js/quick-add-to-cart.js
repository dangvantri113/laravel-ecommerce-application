$(document).ready(function () {
    bindDataWhenChangeAttribute()
})
$("#colorSelect").change(function () {
    bindDataWhenChangeAttribute();
})
$("#sizeSelect").change(function () {
    bindDataWhenChangeAttribute();
})
function fomatCurrency(data) {
    console.log(data)
    return (data).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
}
function bindDataWhenChangeAttribute() {
    let request = {
        'color': $('#colorSelect').val(),
        'size':$('#sizeSelect').val(),
    }
    $.ajax({
        url:'http://localhost/products/'+$('#groupProductId').val(),
        type: 'get',
        data: request,
        success: function (data) {
            $('#detailPrice').html(fomatCurrency(data.price));
        },
        error: function (data) {
            console.log('error:' +data);
        }
    })
}
$('#addToCartForm').submit(function (e) {
    e.preventDefault();
    $.ajax({
        url: $("#addToCartForm").attr('action'),
        type:'post',
        data: $("#addToCartForm").serialize(),
        success:function (data) {
            $('#addToCartModal').modal('hide');
            Swal.fire({
                icon: 'success',
                title: 'THÀNH CÔNG',
                showConfirmButton: false,
                text: 'Sản phẩm đã được thêm vào giỏ hàng',
                timer: 1500
            })
        },
        error: function (data) {
            console.log(data)
        }
    })
})
