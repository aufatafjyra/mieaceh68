@extends('layouts.user')

@section('title', $menu->name)

@section('breadcrumb-content')
<div class="breadcrumb">
    <div class="container">
        <ol class="breadcrumbb">
            <li class="breadcrumb-item"> <a href="/"> Beranda </a></li>
            <li class="breadcrumb-item"> <a href="/shop"> Menu </a></li>
            <li class="breadcrumb-item active"> {{ $menu->name }} </li>
        </ol>
    </div>
    <form class="d-flex" action="{{ route('search') }}" method="GET">
        <input class="form-control me-2" value="{{ request()->input('query') }}" type="search" placeholder="Cari Menu.." aria-label="Search" name="query" id="query">
        <button class="btn fa fa-search" type="submit"> </button>
    </form>
</div>
@endsection

@section('content')
<div class="image-section" style="width: 250px; height: 250px; border: 1px solid grey;">
    <img style="height: 250px; width: 250px;" src="{{ asset($menu->image) }}">
</div>
<div class="desc-section" style="width: 500px; padding-left: 10%">
    <h4 class="title"> {{ $menu->name }} </h4>
    <p> {{ $menu->description }} </p>
    <div class="price"> Rp. {{ $menu->price }} </div>
    <form action="{{ route('cart.store') }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $menu->id }}">
        <input type="hidden" name="name" value="{{ $menu->name }}">
        <input type="hidden" name="price" value="{{ $menu->price }}">
        <button type="submit" class="btn" style="background-color: #212121; color: white; margin-top: 40px"> Tambah ke Keranjang </button>
    </form>
</div>
<style>
body{
    background-color: #f1f1f1;
}
</style>
@endsection

@section('extra-js')
<script src="{{ asset('js/app.js') }}"></script>
<script>
    (function() {
        const classname = document.querySelectorAll('.quantity')
        Array.from(classname).forEach(function(element) {
            element.addEventListener('change', function() {
                const id = element.getAttribute('data-id')
                axios.patch(`/cart/${id}`, {
                        quantity: this.value
                    })
                    .then(function(response) {
                        console.log(response);
                        window.location.href = "{{ route('cart.index') }}"
                    })
                    .catch(function(error) {
                        console.log(error);
                    });
            })
        })
    })();
</script>
@endsection