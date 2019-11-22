<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Dashboard</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
    <script src="{{asset('js/jquery.js')}}"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>
    <script src="{{asset('js/lib/popper.min.js')}}"></script>
    <script src="{{asset('js/lib/bootstrap.min.js')}}"></script>
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/main.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/preload-page.css')}}"/>
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/lib/font-awesome/4.7.0/css/font-awesome.min.css')}}"/>
    @yield('css')
</head>

<body class="app sidebar-mini rtl">
<div id="loading">
    <img id="loading-image" src="{{asset('images/icon/pre-load-page.gif')}}" alt="Loading..." />
</div>
<!-- Navbar-->
@include('admin.component.head')
<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
@include("admin.component.left-menu")
<main class="app-content" id="app-content">
@yield('main-content')
</main>
<!-- Essential javascripts for application to work-->

<script language="javascript" type="text/javascript">
    $(window).on('load',function() {
        $('#loading').hide();
    });
</script>
<script src="{{asset('js/admin/main.js')}}"></script>
<script type="text/javascript" src="{{asset('js/admin/dashboard.js')}}"></script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<!-- The javascript plugin to display page loading on top-->
@yield('script')
</body>
</html>
