$("img.lazy").lazyload({
    threshold: 200,
    placeholder: '/images/icon/pre-load.gif',
    effect: "fadeIn"
});
$('li a.page-link').click(function (e) {
    e.preventDefault();
    $.ajax({
        url: $(this).attr('href'),
        data:$('#formFilter').serialize(),
        success: function (data) {
            $(document).scrollTop(0);
            $('#resultSearchProducts').html(data);
            $(this).addClass('active');
        }
    })
});
$('#formFilter').submit(function (e) {
    e.preventDefault();
    $.ajax({
        url: $(this).attr('action'),
        method: 'get',
        data: $(this).serialize(),
        success: function (data) {
            $(document).scrollTop(0);
            $('#resultSearchProducts').html(data);
        },
        error: function (error) {
            console.log(error.message)
        }
    })
})

