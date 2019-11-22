@extends('layouts.admin')
@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"/>
@endsection
@section('main-content')
@include('admin.component.title-feature')
<div class="row">
    <div class="col-md-6 col-lg-3">
        <div class="widget-small primary coloured-icon">
            <i class="icon fa fa-users fa-3x"></i>
            <div class="info">
                <h4>Users</h4>
                <p><b>5</b></p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="widget-small info coloured-icon">
            <i class="icon fa fa-thumbs-o-up fa-3x"></i>
            <div class="info">
                <h4>Likes</h4>
                <p><b>25</b></p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="widget-small warning coloured-icon">
            <i class="icon fa fa-files-o fa-3x"></i>
            <div class="info">
                <h4>Uploades</h4>
                <p><b>10</b></p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="widget-small danger coloured-icon">
            <i class="icon fa fa-star fa-3x"></i>
            <div class="info">
                <h4>Stars</h4>
                <p><b>500</b></p>
            </div>
        </div>
    </div>
</div>
    @endsection
@section('script')
@endsection

