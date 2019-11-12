@extends('layouts.app')
@section('css')
    <link href="{{ asset('css/my-account.css') }}" rel="stylesheet">
@endsection
@section('content')
    <section id="my-profile-container" class="card card-block">
        <form id="profile-form" enctype="multipart/form-data" method="post">
            @csrf
            <h1 class="form-title">Your profile</h1>
            <div class="form-group">
                <label>Avatar </label>
                <div id="avatar-preview">
                    @if(isset($user->profile->avatar))
                        <img src="{{$user->profile->avatar}}">
                    @else
                        <img src="/images/icon/profile.jpg">
                    @endif
                    <input id="imageNameProfile" name="imageName" type="file" accept="image/*"
                           value={{Auth::user()->email}}>
                </div>
            </div>
            <div class="form-group">
                <label>Email </label>
                <input name="email" disabled value={{Auth::user()->email}}>
            </div>
            <div class="form-group">
                <label>Phone </label>
                <input name="phone" value={{Auth::user()->profile->phone}}>
            </div>
            <div class="form-group">
                <label>Gender </label>
                <div class="d-inline-block">
                    @if(Auth::user()->profile->gender==0)
                        <input class="gender-radio" type="radio" name="gender" value="0" checked> Female
                        <input class="gender-radio" type="radio" name="gender" value="1"> Male
                    @else
                        <input type="radio" name="gender" value="0"> Female
                        <input type="radio" name="gender" value="1" checked> Male
                    @endif
                </div>
            </div>
            <div class="form-group">
                <label>Birth date </label>
                <input name="birthDate" type="date" value="{{$user->profile->birth_day}}">
            </div>
            <div class="form-group">
                <label>Address</label>
                <div class="d-inline-block">
                    <select id="province-profile-form" name="province">
                        @if(isset($user->profile->address))
                            <option value="{{$user->profile->address->ward->district->province->id}}" selected>
                                {{$user->profile->address->ward->district->province->name}}
                            </option>
                        @else
                            <option value="" disabled selected>
                                Tp/Tỉnh
                            </option>
                        @endif
                        @foreach($provinces as $province)
                            <option value="{{$province->id}}">{{$province->name}}</option>
                        @endforeach
                    </select>
                    <select id="district-profile-form" name="district">
                        @if(isset($user->profile->address))
                            <option value="{{$user->profile->address->ward->district->id}}" selected>
                                {{$user->profile->address->ward->district->name}}
                            </option>
                        @else
                            <option value="" disabled selected>
                                Quận/Huyện
                            </option>
                        @endif
                        @foreach($user->profile->address->ward->district->province->districts as $district)
                            <option value="{{$district->id}}">{{$district->name}}</option>
                        @endforeach
                    </select>
                    <select id="ward-profile-form" name="ward_id">
                        @if(isset($user->profile->address))
                            <option value="{{$user->profile->address->ward->id}}" selected>
                                {{$user->profile->address->ward->name}}
                            </option>
                        @else
                            <option value="" disabled selected>
                                Phường/Xã
                            </option>
                        @endif
                        @foreach($user->profile->address->ward->district->wards as $ward)
                            <option value="{{$ward->id}}">{{$ward->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label>Specific Address</label>
                <input type="text" class="text-dark" name="specificAddress"
                       value="@if(isset($user->profile->address)){{$user->profile->address->detail}}
                       @else{{'Địa chỉ chi tiết'}}@endif">
            </div>
            <div class="form-group">
                <label>New password </label>
                <input name="newPass" type="password">
            </div>
            <div class="form-group">
                <label>Current Password</label>
                <input name="currentPass" type="password">
            </div>
            <div class="form-group text-center">
                <button class="font-weight-bold btn-danger">CANCEL</button>
                <button class="font-weight-bold btn-success" type="submit">APPLY</button>
            </div>

        </form>
    </section>
@endsection
@section('script')
    <script type="text/javascript" src="{{ asset('js/my-account.js')}}"></script>
@endsection
