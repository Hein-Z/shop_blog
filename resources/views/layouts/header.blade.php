@php
    $name=\Request::route()->getName();
@endphp

<!-- Header -->
<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{route('landing-page')}}"><h2>Shop<em>🛒Blog</em></h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item @if($name==='landing-page') active @endif">
                        <a class="nav-link" href="{{route('landing-page')}}">Home</a>
                    </li>
                    <li class="nav-item dropdown @if($name==='shop.index') active @endif">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="true" aria-expanded="false">Shop</a>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('shop.index')}}"> 🛍 Products</a>
                            <a class="dropdown-item" href="{{route('shop.checkout')}}"><i
                                    class="fa fa-check-circle-o"></i> Checkout</a>
                            <a class="dropdown-item" href="{{route('shop.cart')}}"><i class="fa fa-shopping-cart"></i>
                                Cart @if(\Cart::instance('default')->count())<span
                                    class="text-danger px-3 h5">{{\Cart::instance('default')->count()}}</span>@endif</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="true" aria-expanded="false">More</a>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="about-us.html">About Us</a>
                            <a class="dropdown-item" href="blog.html">Blog</a>
                            <a class="dropdown-item" href="testimonials.html">Testimonials</a>
                            <a class="dropdown-item" href="terms.html">Terms</a>
                            <a class="dropdown-item"
                               href="contact.html">Contact Us</a>
                        </div>
                    </li>
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
            </div>
        </div>
    </nav>
</header>
