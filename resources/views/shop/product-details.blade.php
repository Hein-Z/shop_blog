@extends('layouts.master')
@section('content')
    {{-- @include('layouts.preloader') --}}
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    @include('layouts.header')
    <div id="app">

        <!-- Page Content -->
        <div class="page-heading about-heading header-text"
             style="background-image: url({{ asset('images/heading-6-1920x500.jpg') }});" id="offset-pos">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-content">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <h2>Product Details</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container h5">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item "><a href="{{ route('landing-page') }}" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item "><a href="{{ route('shop.index') }}" class="text-dark">Shop</a></li>
                    <li class="breadcrumb-item text-danger">{{ $product->slug }}</li>
                </ol>
            </nav>
        </div>
        <div class="products">
            <div class="container">

                <product-details :cart='@json(\Cart::instance(' default')->content())'
                                 :product='@json($product)'
                                 :sub-img-urls='@json($subImgUrls)'
                                 stock-threshold='{{ $stockThreshold }}'
                                 :is-auth='@json(auth()->user())'
                                 cart-route='{{ route('shop.cart') }}'
                ></product-details>


            </div>
        </div>

        <div class="latest-products">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h2>You might also like ...</h2>
                            <a href="{{ route('shop.index') }}">view more <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    @foreach ($mayLikes as $mayLike)
                        <div class="col-md-4">
                            <div class="product-item">
                                <a href="{{ route('shop.show', $mayLike->slug) }}"><img
                                        src="{{ productImage($mayLike->image) }}" alt=""></a>
                                <div class="down-content">
                                    <a href="{{ route('shop.show', $mayLike->slug) }}">
                                        <h4>{{ $mayLike->name }}</h4>
                                    </a>
                                    <br>
                                    <h5>{{ $mayLike->details }}</h5>
                                    <h6><small>
                                            {{ $mayLike->presetPrice }}
                                        </small>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        @include('layouts.footer')
    </div>

    {{-- @section('extra-js') --}}
    {{-- <script> --}}

    {{-- // const currentImg = document.getElementById('current-image'); --}}
    {{-- // const thumbnailImg = document.querySelectorAll(".product-section-thumbnail"); --}}
    {{-- // thumbnailImg.forEach(element => { --}}
    {{-- //     element.addEventListener('click', showImage); --}}
    {{-- // }); --}}
    {{-- // --}}
    {{-- // function showImage() { --}}
    {{-- //     currentImg.classList.remove('active-img'); --}}
    {{-- // --}}
    {{-- //     currentImg.addEventListener('transitionend', () => { --}}
    {{-- //         currentImg.src = this.querySelector('.thumbnail-image').src; --}}
    {{-- //         currentImg.classList.add('active-img'); --}}
    {{-- // --}}
    {{-- //     }) --}}
    {{-- // } --}}

    {{-- </script> --}}
@endsection
