@extends('layouts.admin')
@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"/>
@endsection
@section('main-content')
    @include('admin.component.title-feature')
    @include('admin.user-management.modal-add-user')
    <div class="text-center">
        <button class="btn-success"  data-toggle="modal" data-target="#addUserModal"><i class="fa fa-plus mr-1"></i><i class="fa fa-user"></i> Add New User</button>
        <button class="btn-danger" onclick="deleteUsersSelected()"><i class="fa fa-trash mr-1"></i> Delete Users Selected</button>
    </div>
    <div id="containerUsersBlock">
        @include('admin.user-management.list-user')
    </div>
@endsection
@section('script')
    <script type="text/javascript" src="{{asset('js/admin/users.js')}}"></script>
@endsection
