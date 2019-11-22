$('.list-inline-item img').click(function () {
   $('.main-image img').attr('src',$(this).attr('src'));
    $('.list-inline-item img').removeClass('active');
   $(this).addClass('active');
   $('.main-image img').attr('data-zoom',$(this).attr('src'))
});
$(document).ready(function () {
    let request = {
        'color': $('#colorSelect').val(),
        'size':$('#sizeSelect').val(),
    }
    $.ajax({
        url:$(location).attr('href'),
        type: 'get',
        data: request,
        success: function (data) {
            console.log(data)
            $('#detailPrice').html(fomatCurrency(data.price));
        },
        error: function (data) {
            console.log('error:' +data);
        }
    })
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
        url:$(location).attr('href'),
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
$('#buttonAddToCart').click(function (e) {
    e.preventDefault();
    $.ajax({
        url: $("#addToCartForm").attr('action'),
        type:'post',
        data: $("#addToCartForm").serialize(),
        success:function (data) {
            Swal.fire({
                icon: 'success',
                showConfirmButton: false,
                title: 'THÀNH CÔNG',
                text: 'Sản phẩm đã được thêm vào giỏ hàng',
                timer: 1500
            })
        },
        error: function (data) {
            console.log(data)
        }
    })
})
