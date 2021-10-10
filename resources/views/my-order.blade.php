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
        <!-- Banner Starts Here -->
    @include('layouts.banner')


    <!-- Banner Ends Here -->
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb ">
                    <li class="breadcrumb-item pt-1"><a href="{{ route('landing-page') }}" class="text-dark">Home</a>
                    </li>
                    <li class="breadcrumb-item pt-1"><a href="#" class="text-danger">My Order</a></li>
                </ol>

            </nav>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-2 px-md-0">
                    @include('layouts.profile-nav')

                </div>
                <div class="col-md-10 pt-md-0 pt-4">


                    <div class="card">
                        <div class="card-header bg-dark text-light h5 font-weight-bolder">My Order</div>

                        <div class="card-body">
                            @forelse($orders as $order)
                                <div class="flex-sm-row flex-column d-flex justify-content-between">
                                    <div class="d-flex flex-row">
                                        <div class="flex-column d-flex">
                                            <div class="font-weight-bolder ">Order Placed
                                            </div>
                                            <div>
                                                {{$order->created_at->format('Y-m-d')}}
                                            </div>
                                        </div>
                                        <div class="flex-column d-flex mx-3">
                                            <div class="font-weight-bolder ">Order ID</div>
                                            <div>{{$order->id}}</div>
                                        </div>
                                        <div class="flex-column d-flex">
                                            <div class="font-weight-bolder ">Total</div>
                                            <div>
                                                {{$order->billing_total}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-column d-flex justify-content-center">
                                        <a href="{{route('order.show',$order->id)}}">Order Details</a>
                                    </div>
                                </div>
                                @foreach($order->products as $product)

                                    <div class="col-lg-4 col-sm-6 mt-3">
                                        <div class="product-item">
                                            <a href="{{ route('shop.show', $product->slug) }}"><img
                                                    src="{{ productImage($product->image) }}" alt=""></a>
                                            <div class="down-content">
                                                <a class="text-danger h4"
                                                   href="{{ route('shop.show', $product->slug) }}">{{ $product->name }}</a>
                                                <h6><small class="text-dark">
                                                        {{ $product->presetPrice }}</small>
                                                </h6>
                                                <p>{{ $product->details }}</p>
                                            </div>
                                        </div>
                                    </div>

                                @endforeach
                            @empty
                            @endforelse

                        </div>
                    </div>


                </div>
            </div>
        </div>
        @include('layouts.footer')
    </div>


@endsection
