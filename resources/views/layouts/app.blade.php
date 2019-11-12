<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="{{asset('js/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/head.css') }}" rel="stylesheet">
    <link href="{{ asset('css/foot.css') }}" rel="stylesheet">
    <link href="{{ asset('css/carousel-custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/lib/owlcarousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/lib/owlcarousel/owl.theme.default.min.css')}}">
    @yield("css")
    @guest
        <link href="{{ asset('css/login-register.css') }}" rel="stylesheet">
    @endguest


</head>

<body>
<div>
    <button id="btn-menu-collapse" class="btn-lg" data-toggle="collapse" data-target="#header" aria-expanded="false"
            aria-controls="header">
        <span class="fa fa-bars"></span>
    </button>
</div>
<header id="header" class="">
    <div class="header_top d-flex flex-row">
        <div class="logo align-self-center">
            <img src="http://ps.flytheme.net/themes/sp_shopee/img/sp-metro-logo-1542254642.jpg">
        </div>
        <div class="search-div flex-grow-1 align-self-center">
            <form class="search-form form-inline d-flex">
                <select class="search-item search-selector" name="_id">
                    <option value="0" selected> Tất cả</option>
                    @foreach($categoriesLv1 as $Lv1)
                        <option value="lv1-{{$Lv1->id}}">-- {{$Lv1->name}}</option>
                        @foreach($Lv1->categoriesLv2 as $Lv2)
                            <option value="lv2-{{$Lv2->id}}">---- {{$Lv2->name}}</option>
                        @endforeach
                    @endforeach
                </select>
                <input class="search-item search-field  flex-grow-1" type="text"
                       placeholder="tên sản phẩm, tên shop,...">
                <button class="search-item search-button"><span class="fa fa-search"></span></button>
            </form>
        </div>
        @guest
            <div class="login-register-div align-self-center">
                <span class="fa fa user-info"></span>
                <span><a href="#login-register-modal" href=""
                         class="btn btn-default btn-rounded waves-effect waves-light" data-toggle="modal"
                         data-target="#modalLRForm">LOGIN/REGISTER</a></span>
            </div>
        @else
            <div class="account-info-div align-self-center dropdown">
                <span class="user-avatar dropdown-toggle" data-toggle="dropdown">
                    @if(isset(Auth::User()->profile->avatar))
                        <img style="width: 40px; border-radius: 50%" src="{{Auth::User()->profile->avatar}}">
                    @else
                        <img style="width: 40px; border-radius: 50%" src="{{asset('images/icon/profile.jpg')}}">
                    @endif
                </span>
                <span class="user-avatar">{{Auth::User()->email}}</span>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item text-dark" href="{{route('myAccount')}}">My Account</a>
                    <a class="dropdown-item text-dark" href="{{route('myProfile')}}">My Profile</a>
                    <a class="dropdown-item text-dark" href="{{route('myOrders')}}">My Orders</a>
                    @if(isset(Auth::User()->shop))
                    <a class="dropdown-item text-dark" href="{{route('myShop')}}">My Shop</a>
                    @endif
                    <a class="dropdown-item text-dark" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        @endguest
    </div>
    <div class="header-bottom text-center">
        <ul class="mb-0 mt-2 position-relative">
            <li class="mr-3 dropdown-category">
                <a class="dropbtn">Shopping </a>
                <div class="dropdown-content">
                    <div class="row mr-0 ml-0 pt-3 pb-3">
                        @foreach($categoriesLv1 as $categoryLv1)
                            <div id="category-lv1-1" class="category-lv1 col-xl-2 col-lg-2 col-md-4 col-4 text-left">

                                <a class="p-0" href="">
                                    <img src="{{asset('images/category-lv1/'.$categoryLv1->image)}}">
                                    <b class="text-dark">{{$categoryLv1->name}}</b>
                                </a>
                                <ul class="pl-0">
                                    @foreach($categoryLv1->categoriesLv2 as $categoryLv2)
                                        <li class="category-lv2 d-block">
                                            <a class="text-dark p-0">{{$categoryLv2->name}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endforeach
                    </div>

                </div>
            </li>
            <li class="mr-3 dropdown-category">
                <a class="dropbtn">About Us</a>
            </li>
            <li class="mr-3 dropdown-category">
                <a class="dropbtn">Contact</a>
            </li>
        </ul>
    </div>
    @guest
        @include("component.modal-login-register")
    @endguest
</header>
<main>
    <div id="app">
        @yield("content")
    </div>
</main>




<!-- Site footer -->
<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <h6>About</h6>
                <p class="text-justify">Scanfcode.com <i>CODE WANTS TO BE SIMPLE </i> is an initiative  to help the upcoming programmers with the code. Scanfcode focuses on providing the most efficient code or snippets as the code wants to be simple. We will help programmers build up concepts in different programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>
            </div>

            <div class="col-xs-6 col-md-3">
                <h6>Categories</h6>
                <ul class="footer-links">
                    @foreach($categoriesLv1 as $categoryLv1)
                    <li><a href="/?idLv1={{$categoryLv1->id}}">{{$categoryLv1->name}}</a></li>
                    @endforeach
                </ul>
            </div>

            <div class="col-xs-6 col-md-3">
                <h6>Quick Links</h6>
                <ul class="footer-links">
                    <li><a href="http://scanfcode.com/about/">About Us</a></li>
                    <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
                    <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>
                    <li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
                    <li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
                </ul>
            </div>
        </div>
        <hr>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
                <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by
                    <a href="#">Scanfcode</a>.
                </p>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <ul class="social-icons">
                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<div id="loading">
    <img id="loading-image" src="{{asset('images/icon/loading.gif')}}" alt="Loading..." />
</div>
<script language="javascript" type="text/javascript">
    $(window).on('load',function() {
        $('#loading').hide();
    });
</script>
<script type="text/javascript" src="{{ asset('js/head.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

@guest
    <script type="text/javascript" src="{{ asset('js/login-register.js')}}"></script>
@endguest
@yield("script")
</body>

</html>
