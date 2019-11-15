$(document).ready(function () {
    $('li a.page-link').click(function (e) {
        e.preventDefault();
        $pageNum = $(this).attr('href').split('?')[1];
        $originUrl = $(location).attr('href').split('&page')[0];
        console.log($originUrl);
        $(location).attr('href',$originUrl+'&'+ $pageNum)
    });
})
