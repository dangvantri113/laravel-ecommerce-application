@extends('layouts.app')
@section('content')
    @include('component.intro-shop-slide')
    <div id="all-container" class="p-3">
        @include('component.product.best-seller-products')
        @include('component.product.latest-products')
        @include('component.product.commended-products')
        @include('component.cart.modal-add-to-cart')
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        $('.owl-carousel').owlCarousel({
            loop:true,
            lazyLoad:true,
            lazyLoadEager:4,
            margin:0,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:3
                }
            },
            onLoadLazy:function () {

            }
        })
    </script>
    <script type="text/javascript">
        $('.ajax-add-to-cart.product-btn.cart-button').click(function (e) {
            e.preventDefault();
            $.ajax({
                url:$(this).attr('href'),
                method:'get',
                success: function (data) {
                    $('#addToCartModal .modal-body').html(data);
                    $('#addToCartModal').modal("show");
                },
                error: function (error) {
                    console.log(error.responseJSON.message)
                    Swal.fire(
                        '',
                        error.responseJSON.message,
                        'warning'
                    )
                }
            })
        })
    </script>
@endsection
