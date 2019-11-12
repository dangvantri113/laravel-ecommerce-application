$(document).ready(function () {
    $.ajax({
        url : '/products',
        type: 'get',
        success:function (data) {
            console.log(data);
            $('#product-container').html(data);
        },
        error: function (data) {
            console.log(data);
        }
    });
})
function showDetailProduct($id) {
    $.ajax({
        url : '/products/'+$id,
        type: 'get',
        success:function (data) {
            console.log(data);
            $('#myModal .modal-content').html(data);
        },
        error: function (data) {
            console.log(data);
        }
    });
    $('#myModal').modal('show');
}
