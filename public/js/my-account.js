$(document).ready(function () {
    $('#profile-form')
        .each(function () {
            $(this).data('serialized', $(this).serialize())
        })
        .on('change input', function () {
            $(this)
                .find('input:submit, button:submit')
                .prop('disabled',
                    $(this).serialize() == $(this).data('serialized')
                    && new FormData($(this)[0]).get('imageName').name=="");
            ;
        })
        .find('input:submit, button:submit')
        .prop('disabled', true)
    ;
    $('#profile-form').submit(function (e) {
        e.preventDefault();
        let post_url = $(this).attr("action"); //get form action url
        let request_method = $(this).attr("method"); //get form GET/POST method
        let form_data = new FormData($(this)[0]); //Encode form elements for submission
        console.log(form_data)
        $.ajax({
            url : post_url,
            type: request_method,
            processData: false,
            contentType: false,
            data : form_data,
            success:function (data) {
                console.log(data);
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Your work has been saved',
                    showConfirmButton: true,
                    timer: 1500,
                    onClose: () => {
                        location.reload();
                    }
                })

            },
            error: function (data) {
                console.log(data);
            }

        });
    })
    $('#profile-form #province-profile-form').change(function () {
        let proId = $(this).val();
        $.ajax({
            url : '/get-districts?id=' + proId,
            type: 'get',
            success:function (data) {
                console.log(data);
                $('#profile-form #district-profile-form').html(data);
                let disId = $('#profile-form #district-profile-form').val();
                $.ajax({
                    url : '/get-wards?id=' + disId,
                    type: 'get',
                    success:function (data) {
                        console.log(data);
                        $('#profile-form #ward-profile-form').html(data);
                    },
                    error: function (data) {
                        console.log(data);
                    }

                });
            },
            error: function (data) {
                console.log(data);
            }
        });

    });
    $('#profile-form #district-profile-form').change(function () {
        let disId = $(this).val();
        $.ajax({
            url : '/get-wards?id=' + disId,
            type: 'get',
            success:function (data) {
                console.log(data);
                $('#profile-form #ward-profile-form').html(data);
            },
            error: function (data) {
                console.log(data);
            }

        });
    })
});
