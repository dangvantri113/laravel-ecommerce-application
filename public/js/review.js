$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#addReviewForm .fa-star').click(function () {
        let numStar = $(this).attr('value').split('star')[0];
        let starArrayNodes = $('#addReviewForm .fa-star');
        for(let i=0;i<5;i++){
            if (i < numStar)
                $('#addReviewForm .fa-star')[i].classList.add('fa-star-on');
            else $('#addReviewForm .fa-star')[i].classList.remove('fa-star-on');
        }
        $(this).addClass('fa-star-on');
    })
    $('#addReviewForm').submit(function (e) {
        e.preventDefault();
        let numStar = $('#addReviewForm .fa-star-on').length;
        let comment =$('#addReviewForm textarea').val();
        let productId = $('#addReviewForm [name="group_product_id"]').val();
        if(numStar<1){
            Swal.fire(
                '!!!',
                'Bạn cần chọn số sao!'+comment,
                'success'
            )
        }
        else{
            $.ajax({
                url: 'http://localhost/reviews',
                type: 'post',
                data: {
                    'number_star': numStar,
                    'comment': comment,
                    'group_product_id':productId
                },
                sucess:function (result,status,xhr) {
                    console.log(result)
                    console.log(status)
                    console.log(xhr)
                },
                error: function (xhr,status,error) {
                    console.log(error)
                    console.log(status)
                    console.log(xhr)
                }
            })
        }
    })
})
