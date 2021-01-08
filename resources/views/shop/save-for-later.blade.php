@extends('layouts.master')
@section('content')
    {{--    @include('layouts.preloader')--}}
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
                            <h4><span class="text-light">{{$items->count()}} items </span> in shopping cart</h4>
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

        <div class="container h5">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item "><a href="{{route('landing-page')}}" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item text-danger">Shopping Cart</li>
                </ol>
            </nav>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="row">
                        <h5 class="col-6 py-3"><span class="text-danger">Items</span> in your cart...</h5>
                        <div class="col-6 text-right py-3">
                            <a href="{{route('shop.index')}}" class="btn btn-outline-dark">Continue shopping</a>
                            <a href="{{route('shop.cart')}}" class="btn btn-outline-primary">Cart</a>

                        </div>
                        <div class="col-12 " style="height: 2px; background-color: #1a202c2f"></div>


                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="row">
                        <h5 class="col-md-12 py-3 ">You might also like...</h5>
                        @foreach($mayLikes as $mayLike)
                            <div class="col-md-6 col-4">
                                <div class="product-item">
                                    <a href="{{route('shop.show',$mayLike->slug)}}"><img
                                            src="{{asset('images/product-1-370x270.jpg')}}" alt=""></a>
                                    <div class="down-content py-1 pl-1">
                                        <a href="{{route('shop.show',$mayLike->slug)}}"><h4>{{$mayLike->name}}</h4></a>
                                        <h6><small>
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
    </div>
@endsection
