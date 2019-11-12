$(document).ready(function(){
    $(".modal-body .md-form input").focus(function (e) {
        console.log(e.currentTarget.id);
        $("label[for='"+e.currentTarget.id+"']").hide();
    })
    $(".modal-body .md-form input").blur(function (e) {
        if(e.currentTarget.value==""){
            $("label[for='"+e.currentTarget.id+"']").show();
        }
    })
    $('#form-login').submit(function (e) {
        e.preventDefault();
        let post_url = $(this).attr("action"); //get form action url
        let request_method = $(this).attr("method"); //get form GET/POST method
        let form_data = $(this).serialize(); //Encode form elements for submission

        $.ajax({
            url : post_url,
            type: request_method,
            data : form_data,
            success:function (data) {
                console.log(data);
                location.reload();
            },
            error: function (data) {
                let errors = data.responseJSON.message;
                if (errors){
                    $('#error-login-label').text(errors);
                }
            }

        });
    })
    $('#form-register').submit(function (e) {
        e.preventDefault();
        let post_url = $(this).attr("action"); //get form action url
        let request_method = $(this).attr("method"); //get form GET/POST method
        let form_data = $(this).serializeArray(); //Encode form elements for submission
        console.log(form_data)
        $.ajax({
            url : post_url,
            type: request_method,
            data : form_data,
            success:function (data) {
                console.log(data);
                location.reload();
            },
            error: function (data) {
                console.log(data);
                let errors = data.responseJSON.message;
                if (errors){
                    $('#error-register-label').text(errors);
                }
            }

        });
    })
});
