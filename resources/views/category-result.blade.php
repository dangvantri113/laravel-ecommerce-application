@extends('layouts.app')
@section('content')
    <div id="cate1-result" class="p-3">
        <div class="row">
            @foreach($productsCate1 as $productCate1)
                <article class="product col-12 col-sm-6 col-md-4 col-xl-2">
                    <div class="item-wrap style1">
                        <div class="product-container">
                            <div class="left-block">
                                <div class="product-image">

                                    <a href="http://ps.flytheme.net/themes/sp_shopee/en/fashion/20-natus-therefore-always-bolac.html"
                                       class="thumbnail product-thumbnail">
                                        <img
                                            src="http://ps.flytheme.net/themes/sp_shopee/393-small_default/natus-therefore-always-bolac.jpg"
                                            alt=""
                                            data-full-size-image-url="http://ps.flytheme.net/themes/sp_shopee/393-large_default/natus-therefore-always-bolac.jpg">
                                    </a>
                                    <div class="button-container">
                                        <a href="#" class="quick-view" data-link-action="quickview" title="Quick View">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                            <span class="text">Quick View</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="right-block">
                                <div class="product-info">
                                    <h5 class="product-title" itemprop="name">
                                        <a href="http://ps.flytheme.net/themes/sp_shopee/en/fashion/20-natus-therefore-always-bolac.html">
{{--                                            {{$productCate1->name}}--}}
                                        </a>
                                    </h5>
                                    <div class="product-price-and-shipping" itemprop="offers" itemscope=""
                                         itemtype="https://schema.org/Offer">
                                        <link itemprop="availability" href="https://schema.org/InStock">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" content="99" class="price">$99.00</span>
                                    </div>
                                    <div class="comments_note">
                                        <div class="star_content clearfix">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="cart_content">
                                        <a href="#" class="ajax-add-to-cart product-btn cart-button"
                                           data-id-product="20" data-minimal-quantity="1" title="Add To Cart">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            <span class="text">Add to Cart</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
        {{ $productsCate1->links() }}
    </div>
@endsection
@section('script')

@endsection
