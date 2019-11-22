<div id="best-seller-container" class="catalog-products">
    <div class="container-title d-flex">
        <span>Best Sellers</span>
        <div class="title-bar mx-4 flex-grow-1"></div>
    </div>
    <div class="list-product-container">
        <div class="owl-carousel owl-theme owl-carousel-product">
            @for($i=0; $i< count($bestSellerProducts); $i+=2)
            <div class="item">
                <article class="product-top">
                    <div class="item-wrap style1">
                        <div class="product-container">
                            <div class="left-block">
                                <div class="product-image">
                                    <a href="http://localhost/products/{{$bestSellerProducts[$i]->id}}">
                                        <img class="owl-lazy" data-src="{{$bestSellerProducts[$i]->image_1}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="right-block">
                                <div class="product-info">
                                    <h5 class="product-title" itemprop="name"><a href="http://localhost/products/{{$bestSellerProducts[$i]->id}}">
                                            {{$bestSellerProducts[$i]->name}}</a></h5>
                                    <div class="product-price-and-shipping" itemprop="offers" itemscope="">
                                        <link itemprop="availability" href="https://schema.org/InStock">
                                        <meta itemprop="priceCurrency" content="VND">
                                        <span itemprop="price" content="99" class="price text-danger">
                                            @php
                                                $prices = $bestSellerProducts[$i]->products->pluck('price')->toArray();
                                                $minPrice = min($prices);
                                                $maxPrice = max($prices);
                                            @endphp
                                            {{$minPrice}} - {{$maxPrice}} VNĐ
                                        </span>
                                    </div>
                                    <div class="comments_note">
                                        <div class="star_content clearfix">
                                            @for($x=0; $x<5; $x++)
                                                @if($x < $bestSellerProducts[$i]->avg_number_star)
                                                    <i class="fa fa-star fa-star-on" aria-hidden="true"></i>
                                                @else
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                @endif
                                            @endfor
                                        </div>
                                    </div>
                                    <div class="cart_content">
                                        <a href="{{route('cart.quick-add',['id'=> $bestSellerProducts[$i]->id])}}" class="ajax-add-to-cart product-btn cart-button" data-id-product="21" data-minimal-quantity="1" title="Add To Cart">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            <span class="text">Add to Cart</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="product-bottom">
                    <div class="item-wrap style1">
                        <div class="product-container">
                            <div class="left-block">
                                <div class="product-image">

                                    <a href="http://localhost/products/{{$bestSellerProducts[$i+1]->id}}" class="thumbnail product-thumbnail">
                                        <img class="owl-lazy" data-src="{{$bestSellerProducts[$i+1]->image_1}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="right-block">
                                <div class="product-info">
                                    <h5 class="product-title" itemprop="name"><a href="http://ps.flytheme.net/themes/sp_shopee/en/fashion/21-deep-patoni-repeat-predefin.html">Deep patoni repeat predefin petini benur</a></h5>
                                    <div class="product-price-and-shipping" itemprop="offers" itemscope="" itemtype="https://schema.org/Offer">
                                        <link itemprop="availability" href="https://schema.org/InStock">
                                        <meta itemprop="priceCurrency" content="USD">
                                        <span itemprop="price" content="99" class="price text-danger">
                                            @php
                                                $prices = $bestSellerProducts[$i+1]->products->pluck('price')->toArray();
                                                $minPrice = min($prices);
                                                $maxPrice = max($prices);
                                            @endphp
                                            {{$minPrice}} - {{$maxPrice}} VNĐ
                                        </span>
                                    </div>
                                    <div class="comments_note">
                                        <div class="star_content clearfix">
                                            @for($x=0; $x<5; $x++)
                                                @if($x < $bestSellerProducts[$i+1]->avg_number_star)
                                                    <i class="fa fa-star fa-star-on" aria-hidden="true"></i>
                                                @else
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                @endif
                                            @endfor
                                        </div>
                                    </div>
                                    <div class="cart_content">
                                        <a href="{{route('cart.quick-add',['id'=> $bestSellerProducts[$i+1]->id])}}" class="ajax-add-to-cart product-btn cart-button" data-id-product="21" data-minimal-quantity="1" title="Add To Cart">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            <span class="text">Add to Cart</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            @endfor
        </div>
    </div>
</div>
