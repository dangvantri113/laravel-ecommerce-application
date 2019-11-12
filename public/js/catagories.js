$(document).ready(function(){
    $('.lzd-site-menu-root-item').hover(function (e) {
            $('.lzd-site-menu-sub').removeClass('lzd-site-menu-sub-active');
            $('.'+e.currentTarget.id).addClass('lzd-site-menu-sub-active');
        $('li.lzd-site-menu-sub-item ul').removeClass('lzd-site-menu-grand-active');
    });

    $('li.lzd-site-menu-sub-item').hover(function (e) {
            $('li.lzd-site-menu-sub-item ul').removeClass('lzd-site-menu-grand-active');
            $(e.currentTarget.childNodes[2]).addClass('lzd-site-menu-grand-active');
    });

    $('.lzd-site-nav-menu-dropdown').hover(function (e) {
        if(e.type=="mouseleave"){
            $('.lzd-site-menu-sub').removeClass('lzd-site-menu-sub-active');
            $('li.lzd-site-menu-sub-item ul').removeClass('lzd-site-menu-grand-active');
        }

    });
});
