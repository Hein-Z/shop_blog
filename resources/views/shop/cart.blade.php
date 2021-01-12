@extends('layouts.master')
@section('content')
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
             style="background-image: url({{asset('images/heading-6-1920x500.jpg')}});" id="offset-pos">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-content">
                            <h2>Shopping Cart</h2>
                            @if ($message = session()->has('success'))
                                <div class="alert alert-dark" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{ session()->get('success') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid  h5">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item "><a href="{{route('landing-page')}}" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item text-danger">Shopping Cart</li>
                </ol>
            </nav>
        </div>

        <div class="container-fluid px-5">
            <div class="row">
                <cart  :coupon='@json(session()->get("coupon"))'></cart>
                <div class="col-md-4 col-12 px-5">
                    <div class="row">
                        <h5 class="col-md-12 py-3">You might also like...</h5>
                        @foreach($mayLikes as $mayLike)
                            <div class="col-md-6 col-3">
                                <div class="product-item">
                                    <a href="{{route('shop.show',$mayLike->slug)}}"><img
                                            src="{{productImage($mayLike->image)}}" alt=""></a>
                                    <div class="down-content py-1 pl-1">
                                        <a href="{{route('shop.show',$mayLike->slug)}}"><h4>{{$mayLike->name}}</h4></a>
                                        <h6><small class="text-dark">
                                                {{$mayLike->presetPrice}}
                                            </small>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footer')
    </div>
{{--@section('extra-js')--}}
{{--    <script>--}}
{{--        (function () {--}}
{{--            const className = document.querySelectorAll('.quantity');--}}
{{--            Array.from(className).forEach(function (element) {--}}
{{--                const id = element.getAttribute('data-id');--}}
{{--                element.addEventListener('change', function () {--}}
{{--                    axios.patch(`/cart/${id}`, {quantity: this.value}).then(res => {--}}
{{--                        window.location.href = '{{route('shop.cart')}}';--}}
{{--                    }).catch(err => {--}}
{{--                        console.log(err);--}}
{{--                    })--}}
{{--                })--}}
{{--            })--}}
{{--        })();--}}
{{--    </script>--}}
@endsection
