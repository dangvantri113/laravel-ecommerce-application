@extends('layouts.app')
@section('content')
    <div id="resultSearchProducts" class="p-3">
        <h2>Kết quả tìm kiếm</h2>

        <article class="product row mx-0">
            @foreach($products as $product)
                <div class="item-wrap style1 col-xl-4 col-lg-4 col-md-6 col-6 clo-xs-12">
                    <div class="product-container">
                        <div class="left-block">
                            <div class="product-image">

                                <a href="http://localhost/products/{{$product->id}}"
                                   class="thumbnail product-thumbnail">
                                    <img src="{{$product->image_1}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="right-block">
                            <div class="product-info">
                                <h5 class="product-title" itemprop="name"><a
                                        href="http://localhost/products/{{$product->id}}">
                                        {{$product->name}}</a></h5>
                                <div class="product-price-and-shipping" itemprop="offers" itemscope="">
                                    <link itemprop="availability" href="https://schema.org/InStock">
                                    <meta itemprop="priceCurrency" content="USD">
                                    <span itemprop="price" content="99"
                                          class="price">{{$product->price}}</span>
                                </div>
                                <div class="comments_note">
                                    <div class="star_content clearfix">
                                        @for($x=0; $x<5; $x++)
                                            @if($x < $product->avg_number_star)
                                                <i class="fa fa-star fa-star-on" aria-hidden="true"></i>
                                            @else
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            @endif
                                        @endfor
                                    </div>
                                </div>
                                <div class="cart_content">
                                    <a href="#" class="ajax-add-to-cart product-btn cart-button" data-id-product="21" data-minimal-quantity="1" title="Add To Cart" data-toggle="modal" data-target="#addToCartModal">

                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                        <span class="text">Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </article>
        <div class="text-center">
            <div class="d-inline">{{$products->links()}}</div>
        </div>
    </div>
    @include('component.cart.modal-add-to-cart)
@endsection
@section('script')
<script type="text/javascript" src="{{asset('js/search-page.js')}}"></script>
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
