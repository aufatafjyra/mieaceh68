<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat|Roboto:300,400,700">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/responsive.css">

    <title> Mie Aceh 68 </title>
</head>

<body>

    <header>
        @foreach ($websites as $website)
        <div class="top-nav container">
            <div class="logo">
                <a href="/">
                    <img src="/menu/logo.png" alt="" style="height: 40px;">
                </a>
            </div>
            @if (Route::has('login'))
            <ul>
                <li> <a href="/"> Beranda </a> </li>
                <li> <a href="shop"> Menu </a> </li>
                <li> <a href="#about"> Tentang Kami </a> </li>
                @auth
                <li>
                    <div class="dropdown">
                        <button class="dropbtn"> {{Str::limit (Auth::user()->name, 5) }} </button>
                        <div class="dropdown-content">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </li>
                <li> <a href="cart"> Keranjang </a> </li>
                @else
                <li> <a href="{{ route('login') }}"> Masuk </a> </li>
                <li> <a href="{{ route('register') }}"> Daftar </a> </li>
                @endif
                @endauth
            </ul>
        </div>


        <div class="hero container">
            <div class="hero-copy">
                <h1> Mie Aceh 68 </h1>
                <p> {{ $website->description }} </p>
                <div class="hero-buttons">
                    <a href="shop" class="button button-black"> Pesan Sekarang </a>
                </div>
            </div>

            <div class="hero-image">
                <img src="/menu/mie.png" alt="hero image">
            </div>
        </div>
    </header>

    <div class="about-section" id="about">
        <h1 class="text-center"> Tentang Kami </h1>
        <p class="container" style="text-align: center;">
            {{ $website->about }}
        </p>
    </div>
    @endforeach

    <div class="featured-section">
        <div class="container">
            <h1 class="text-center"> Sudah coba menu ini? </h1>
            <div class="products text-center">
                @foreach ($menus as $menu)
                <div class="product" style="display: grid; grid-template-rows: 0.1fr 01.fr 0.1fr; grid-gap: 1px">
                    <div>
                        <a href="{{ route('menu.show', $menu->slug) }}"> <img src="{{ asset($menu->image) }}" alt="menu" style="width: 10rem; height:10rem"> </a>
                    </div>
                    <div>
                        <a href="{{ route('menu.show', $menu->slug) }}">
                            <span class="product-name"> {{ $menu->name }} </span>
                        </a>
                    </div>
                    <div class="product-price"> Rp. {{ $menu->price }} </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    @foreach ($websites as $website)
    <footer>
        <div class="footer-content container">
            <div class="made-with">
                Made with <i class="fa fa-heart"></i> by Aufa Tafjyra
            </div>
            <ul>
                <li> <i class="fa fa-envelope" aria-hidden="true"></i> {{ $website->email }} </li>
                <li> <i class="fa fa-phone" aria-hidden="true"></i> {{ $website->phone }} </li>
                <li> <i class="fa fa-instagram" aria-hidden="true"></i> {{ $website->instagram }} </li>
            </ul>
        </div>
    </footer>
    @endforeach
</body>

</html>