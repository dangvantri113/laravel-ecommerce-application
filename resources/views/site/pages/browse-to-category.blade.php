@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{asset('css/block-filter.css')}}"/>
@section('content')
    @include('component.intro-shop-slide')
    <div id="resultSearchProducts" class="p-3">
@include('component.product.list_product_cate')
    </div>
    @include('component.cart.modal-add-to-cart')
@endsection
@section('script')
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
