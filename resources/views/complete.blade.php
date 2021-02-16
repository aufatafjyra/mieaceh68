@extends('layouts.user')

@section('title', 'Mie Aceh 68 - Order Complete')


@section('content')

<div class="checkout-section">
    <form action="{{ route('checkout.store') }}" method="POST">
        {{ csrf_field() }}
        <div class="details">
            <div class="billing">
                <div class="cart-title" style="margin-bottom: 20px;"> Terimakasih Sudah Memesan! </div>
                <div class="status-detail">
                    <h5 style="margin-bottom: 200px;"> Jangan ragu untuk menambah pesanan anda. </h5>
                </div>
            </div>
            <div class="cart-buttons">
                <a href="shop" class="btn btn-danger" style="color: white; background-color: #212121; border: none"> Pesan Lagi </a>
            </div>
        </div>
    </form>
</div>

@endsection