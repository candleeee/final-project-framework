<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- buat icon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css"
        rel="stylesheet">
    @vite('resources/css/card.css')

</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a href="{{ route('shop') }}" class="navbar-brand mb-0 h1">
                <img src="{{ Vite::asset('../resources/images/autumn.png') }}" alt="Autumn Logo" class="me-2"
                    style="height: 24px;">
                Autumn Collection
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr class="d-lg-none text-white-50">

                <ul class="navbar-nav flex-row flex-wrap">
                    <li class="nav-item col-6 col-md-auto"><a href="{{ route('shop') }}" class="nav-link">Beranda</a></li>
                    <li class="nav-item col-6 col-md-auto"><a href="{{ route('katalog') }}" class="nav-link">Katalog</a></li>
                </ul>

                <ul class="navbar-nav ms-auto">
                    @guest
                        <li class="nav-item">
                            <a class="btn btn-primary me-2" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="btn btn-secondary" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item">{{ Auth::user()->email }}</a>
                                <hr class="m-0 p-0">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>

                <hr class="d-lg-none text-white-50">
            </div>
        </div>
    </nav>

    <div class="card-owner">
        <div class="row g-0">
            <div class="col-md-4">
            </div>
            <div class="col-md-8">
            </div>
        </div>
    </div>

    {{-- new in  --}}
    <div class="text">
        <h2>NEW IN</h2>
    </div>
    <div class="card-container">
        <div class="card">
            <img src="{{ Vite::asset('../resources/images/shawl.jpg') }}" alt="Product 1">
            <div class="card-body">
                <h5 class="card-title">Knitted Wraps ShawlCraft</h5>
                <p class="card-text">Rp 65.000</p>
            </div>
        </div>
        <div class="card">
            <img src="{{ Vite::asset('../resources/images/men1.jpg') }}" alt="Product 1">
            <div class="card-body">
                <h5 class="card-title">Round Neck Casual Sweater</h5>
                <p class="card-text">Rp 279.000</p>
            </div>
        </div>
        <div class="card">
            <img src="{{ Vite::asset('../resources/images/bag1.jpg') }}" alt="Product 1">
            <div class="card-body">
                <h5 class="card-title">Minimalist Flap Square Bag</h5>
                <p class="card-text">Rp 185.000</p>
            </div>
        </div>
        <div class="card">
            <img src="{{ Vite::asset('../resources/images/woman1.jpg') }}" alt="Product 1">
            <div class="card-body">
                <h5 class="card-title">Turtleneck Sweater Lantern </h5>
                <p class="card-text">Rp 300.000</p>
            </div>
        </div>
    </div>
    <div class="text">
        <h2>KATALOG</h2>
    </div>
    <div class="katalog">
        <!-- Katalog 1 -->
        <div class="katalog-item">
            <img src="{{ Vite::asset('../resources/images/woman2.jpg') }}" alt="Product 1">
            <div class="katalog-content">
                <p>Cropped Blazer</p>

            </div>
        </div>
        <!-- Katalog 2 -->
        <div class="katalog-item">
            <img src="{{ Vite::asset('../resources/images/shawl3.jpg') }}" alt="Product 2">
            <div class="katalog-content">
                <p>Shawl</p>

            </div>
        </div>
        <!-- Katalog 3 -->
        <div class="katalog-item">
            <img src="{{ Vite::asset('../resources/images/woman3.jpg') }}" alt="Product 3">
            <div class="katalog-content">
                <p>High Waist Cord Wide Leg Pants</p>

            </div>
        </div>
        <!-- Katalog 4 -->
        <div class="katalog-item">
            <img src="{{ Vite::asset('../resources/images/men2.jpg') }}" alt="Product 4">
            <div class="katalog-content">
                <p>Outer</p>

            </div>
        </div>
        <!-- Katalog 5 -->
        <div class="katalog-item">
            <img src="{{ Vite::asset('../resources/images/beanie.jpg') }}" alt="Product 5">
            <div class="katalog-content">
                <p>Beanie's</p>

            </div>
        </div>
        <!-- Katalog 6 -->
        <div class="katalog-item">
            <img src="{{ Vite::asset('../resources/images/bag2.jpg') }}" alt="Product 6">
            <div class="katalog-content">
                <p>Cutie Bag</p>

            </div>
        </div>
    </div>

    {{-- Promo --}}
    <div class="promo-box">
        <img src="{{ Vite::asset('../resources/images/images5.jpeg') }}" alt="Promo Image">
        <div class="promo-content">
            <h3>UP TO 50% OFF</h3>
            <p>Free Shipping over Rp 100.000</p>

        </div>
    </div>

    @vite('resources/js/app.js')
</body>

</html>
