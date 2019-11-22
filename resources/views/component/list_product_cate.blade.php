@include('component.block-filter')
<h2 class="text-center text-capitalize">Kết quả tìm kiếm</h2>
    <article class="product row mx-0">
        @foreach($products as $product)
            <div class="item-wrap style1 col-xl-4 col-lg-6 col-md-12">
                <div class="product-container">
                    <div class="left-block">
                        <div class="product-image">

                            <a href="http://localhost/products/{{$product->id}}"
                               class="thumbnail product-thumbnail">
                                <img class="lazy" data-original="{{$product->image_1}}" alt="">
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
    <div class="text-center mt-3">
        <div class="d-inline-block">{{$products->links()}}</div>
    </div>
<script type="text/javascript" src="{{asset('js/lib/jquery/lazyload.min.js')}}"></script>
 <script type="text/javascript" src="{{asset('js/browse-to-category.js')}}"></script>
</div>

