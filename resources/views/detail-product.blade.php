@extends('layouts.app')
@section('css')
    <link href="{{asset('css/detail-product.css')}}" rel="stylesheet">
@endsection
@section('content')
    @include('component.intro-shop-slide')
    <div id="detail-product">
        <div class="product-general row mx-0">
            <div class="image-product-container col-xs-12 col-sm-12 col-12 col-md-6">
                <div class="main-image">
                    <ul id="glasscase" class="gc-start">
                        <li><img src="https://source.unsplash.com/featured?technology" alt="Text"/></li>
                        <li><img src="https://source.unsplash.com/featured?Technology" alt="Text"/></li>
                        <li><img src="https://source.unsplash.com/featured?tEchnology" alt="Text"/></li>
                    </ul>
                </div>
            </div>

            <div class="info-product-container col-xs-12 col-sm-12 col-12 col-md-6">
                <h1 class="product-name"> {{$product->name}} </h1>
                <div class="star_content clearfix">
                    @for($i=0; $i<5; $i++)
                        @if($i < $product->avg_number_star)
                            <i class="fa fa-star fa-star-on" aria-hidden="true"></i>
                        @else
                            <i class="fa fa-star" aria-hidden="true"></i>
                        @endif
                    @endfor
                </div>
                <div>
                    <p class="d-inline">{{$product->categoryLv1->name}}</p>
                    <p class="d-inline ml-2">{{$product->categoryLv2->name}}</p>
                </div>
                <div class="price-product">{{$product->price}} đ</div>
                <div class="description-product">
                    <label>Description</label>
                    <p>{{$product->description}}</p>
                </div>
                <div class="product-color-checkboxs">

                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function () {
                //If your <ul> has the id "glasscase"
                $('#glasscase').glassCase({'thumbsPosition': 'bottom', 'widthDisplay': 560});
            });
        </script>
    </div>
@endsection
@section('script')
    <script type="text/javascript" src="{{asset('js/detail-product.js')}}"></script>
@endsection
