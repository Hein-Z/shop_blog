@php
    $name=\Request::route()->getName();
@endphp

<!-- Header -->
<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{route('landing-page')}}"><h2>Shop <em>Blog</em></h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item @if($name==='landing-page') active @endif">
                        <a class="nav-link" href="{{route('landing-page')}}">Home</a>
                    </li>

                    <li class="nav-item @if($name==='shop.index') active @endif"><a class="nav-link"
                                                                                    href="{{route('shop.index')}}">Products</a>
                    </li>

                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="true" aria-expanded="false">Shop</a>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('shop.checkout')}}">Checkout</a>
                            <a class="dropdown-item" href="{{route('shop.cart')}}">Cart</a>
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
                        </div>
                    </li>

                    <li class="nav-item @if($name==='landing-page') active @endif"><a class="nav-link"
                                                                                      href="contact.html">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
