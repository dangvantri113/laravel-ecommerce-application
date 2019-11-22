@extends('layouts.app')
@section('css')
    <link href="{{asset('css/home.css')}}" rel="stylesheet">
    <link href="{{asset('css/detail-product.css')}}" rel="stylesheet">
    <link href="{{asset('css/lib/Drift/drift-basic.css')}}" rel="stylesheet">
@endsection
@section('content')
    @include('component.intro-shop-slide')
    <div id="detail-product">
        <div class="product-general row mx-0">
            <div class="image-product-container col-xs-12 col-sm-12 col-12 col-md-6 pt-3 mx-0 px-0">
                <div class="main-image py-1">
                    <img class="drift-demo-trigger" data-zoom="{{asset($product->image_1)}}" src="{{asset($product->image_1)}}">
                </div>
                <div class="list-image">
                    <ul id="glassCase" class="list-inline mb-0">
                        <li class="list-inline-item"><img class="active" src="{{asset($product->image_1)}}" alt="Text"/></li>
                        <li class="list-inline-item"><img src="{{asset($product->image_2)}}" alt="Text"/></li>
                        <li class="list-inline-item"><img src="{{asset($product->image_3)}}" alt="Text"/></li>
                    </ul>
                </div>
            </div>

            <div class="info-product-container col-xs-12 col-sm-12 col-12 col-md-6">
                <h1 class="product-name mt-2"> {{$product->name}} </h1>
                <div class="star_content mb-1">
                    @php
                        $productRate = $product->reviews->pluck('number_star')->avg()
                    @endphp
                    <label class="mb-0">Đánh giá</label>
                    @for($i=0; $i<5; $i++)
                        @if($i < round($productRate))
                            <i class="fa fa-star fa-star-on" aria-hidden="true"></i>
                        @else
                            <i class="fa fa-star" aria-hidden="true"></i>
                        @endif
                    @endfor
                    <span class="mx-2">{{$productRate}}</span>
                </div>
                <div class="mb-1">
                    <label class="mb-0">Thể loại </label>
                    <span class="bg-info">{{$product->categoryLv1->name}}</span>
                    <span class="ml-2 bg-info">{{$product->categoryLv2->name}}</span>
                </div>
                <div class="price-product mb-1">
                    <label class="mb-0">Giá </label>
                    @php
                        $prices = $product->products->unique('price')->pluck('price')->toArray();
                        $minPrice = min($prices);
                        $maxPrice = max($prices);
                    @endphp
                    <span class="text-danger">{{number_format($minPrice,2,',','.')}} vnđ</span>
                    <label class="d-inline mx-2">-</label>
                    <span class="text-danger">{{number_format($maxPrice,2,',','.')}} vnđ</span>
                </div>
                <div class="price-product mb-1">
                    <label class="mb-0">Mô tả </label>
                    <span class="text-dark">{{$product->description}}</span>
                </div>
                <div class="product-color-checkboxs mb-1">
                    @foreach($product->products as $detailProduct)
                        @php
                        $colors = $product->products->where('color','!=',null)->unique('color')->pluck('color')->toArray();
                        $sizes = $product->products->where('size','!=',null)->unique('size')->pluck('size')->toArray();
                        @endphp
                    @endforeach
                </div>
                <hr>
                <form id="addToCartForm" action="{{route('product.add.cart')}}" class="form mb-1">
                    @csrf
                    <input type="text" name="group-product-id" class="d-none" value="{{$product->id}}">
                    <div class="option-oders">
                        <div class="form-group">
                            <label>Phân loại</label>
                            @if(count($colors)>0)
                            <label class="d-inline ml-2">Màu sắc</label>
                            <select id="colorSelect" name="color">
                                @foreach($colors as $color)
                                    <option value="{{$color}}">
                                        <span class="mr-1">
                                            {{$color}}
                                        </span>
                                    </option>
                                @endforeach
                            </select>
                            @endif
                            @if(count($sizes)>0)
                            <label class="ml-2 d-inline">Size</label>
                            <select id="sizeSelect" name="size">
                                @foreach($sizes as $size)
                                    <option value="{{$size}}">
                                        <span class="mr-1">
                                            {{$size}}
                                        </span>
                                    </option>
                                @endforeach
                            </select>
                                @endif

                        </div>
                        <div class="detail-price">
                            <label>Giá: </label>
                            <span id="detailPrice"class="mr-1 text-danger"></span><span class="text-danger">VNĐ</span>
                        </div>
                       <div class="form-group">
                           <label>Số lượng</label>
                           <input style="width: 50px" type="number" name="quantity" min="1" value="1">
                       </div>

                    </div>
                    <div class="cart_content">
                        <a href="#" id="buttonAddToCart" class="d-inline-block product-btn cart-button" data-id-product="20" data-minimal-quantity="1" title="Add To Cart">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            <span class="text">Add to Cart</span>
                        </a>
                    </div>
                </form>
            </div>
            <div class="product-reviews w-100 p-5">
                @include('component.review.list-review',['data'=>$product->reviews])
                @auth
                    @include('component.review.add-review')
                @endauth
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript" src="{{asset('js/lib/drift/Drift.js')}}"></script>
    <script>
        new Drift(document.querySelector('.drift-demo-trigger'), {
            paneContainer: document.querySelector('.main-image'),
            inlinePane: true,
            inlineOffsetY: -85,
            containInline: true,
        });
    </script>

    <script type="text/javascript" src="{{asset('js/detail-product.js')}}"></script>
@endsection
