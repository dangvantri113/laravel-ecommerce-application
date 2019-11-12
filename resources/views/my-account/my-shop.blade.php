@extends('layouts.app')
@section('css')
    <link href="{{ asset('css/my-account.css') }}" rel="stylesheet">
    <link href="{{ asset('css/my-shop.css') }}" rel="stylesheet">
@endsection
@section('content')
    <section id="my-shop-container" class="wrapper">
        <nav id="left-menu-shop" class="float-left">
            <div class="sidebar-header">
                <h3>Menu</h3>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        Quản lý đơn hàng
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Tất cả đơn hàng</a>
                        </li>
                        <li>
                            <a href="#">Đơn Hàng Đã Hủy</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        Quản Lý Sản Phẩm
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Tất cả sản phẩm</a>
                        </li>
                        <li>
                            <a href="#">Thêm Sản Phẩm</a>
                        </li>
                        <li>
                            <a href="#">Sản phẩm bán chạy nhất</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="content" class="w-100">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fa fa-align-left"></i>
                        <span>Menu</span>
                    </button>

                </div>
            </nav>
            <div id="product-container">

            </div>
        </div>
    </section>
@endsection
@section('script')
    <script type="text/javascript" src="{{ asset('js/my-account.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/my-shop.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {

            $('#sidebarCollapse').on('click', function () {
                $('#left-menu-shop').toggleClass('active');
            });

        });
    </script>
@endsection
