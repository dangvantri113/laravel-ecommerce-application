@extends('layouts.app')
@section('css')
    <link href="{{ asset('css/my-account.css') }}" rel="stylesheet">
@endsection
@section('content')
    <section id="my-account-container" class="card-block row">
            <div class="col-4">
                <a class="card" href="/my-profile">
                    <img src="/images/icon/profile.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Your Profile</p>
                    </div>
                </a>
            </div>
            <div class="col-4">
                <a class="card" href="my-orders">
                    <img src="/images/icon/order.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Your Orders</p>
                    </div>
                </a>
            </div>
            <div class="col-4">
                <a class="card" href="/my-shop">
                    <img src="/images/icon/store.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Your Shop</p>
                    </div>
                </a>
            </div>
    </section>
@endsection
@section('script')

@endsection
