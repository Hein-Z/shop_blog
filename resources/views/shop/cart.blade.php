@extends('layouts.master')
@section('content')
    @include('layouts.header')

    <!-- Page Content -->
    <div class="page-heading about-heading header-text"
         style="background-image: url({{asset('images/heading-6-1920x500.jpg')}});" id="offset-pos">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4><span class="text-light">{{\Cart::instance('default')->count()}} items </span> in shopping cart</h4>
                        <h2>Shopping Cart</h2>
                        @if ($message = session()->has('success'))
                            <div class="alert alert-dark" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        {{--                        @if(count($error>0))--}}
                        {{--                            <div class="alert alert-dark" role="alert">--}}
                        {{--                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
                        {{--                                    <span aria-hidden="true">&times;</span>--}}
                        {{--                                </button>--}}
                        {{--                                <ul>--}}
                        {{--                                    @foreach($error->all() as $error)--}}
                        {{--                                        <li>{{$error}}</li>--}}
                        {{--                                    @endforeach--}}
                        {{--                                </ul>--}}
                        {{--                            </div>--}}
                        {{--                        @endif--}}
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
            <div class="col-12 col-md-8 px-5">
                <div class="row">
                    <h5 class="col-12 py-3"><span class="text-danger">Items</span> in your cart...</h5>

                    <div class="col-12 " style="height: 2px; background-color: #1a202c2f"></div>
                    @if(\Cart::instance('default')->content()->isEmpty())
                        <div class="col-12 my-5"> There is no item in your shopping cart</div>
                    @endif
                    @foreach(\Cart::instance('default')->content() as $item)
                        <div class="col-12">
                            <div class="row mt-3">
                                <div class="col-2 ">
                                    <a href="{{route('shop.show',$item->model->slug)}}"> <img
                                            src="{{productImage($item->model->image)}}" class="img-fluid"
                                            alt=""></a>
                                </div>
                                <div class="col-4">
                                    <a href="{{route('shop.show',$item->model->slug)}}"> {{$item->name}}</a>
                                    <p>{{$item->model->details}}</p>
                                </div>
                                <div class="col-1"></div>
                                <div class="col-1">
                                    <input class="quantity" data-id="{{$item->rowId}}" type="number" style="width: 50px"
                                           value="{{$item->qty}}">
                                </div>
                                <div class="col-2">{{$item->model->presetPrice}}</div>
                                <div class="col-2 text-right">
                                    <form action="{{route('shop.cart.remove',$item->rowId)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href='#' class="text-danger"
                                           onclick='this.parentNode.submit(); return false;'>Remove</a>
                                    </form>
                                    <form action="{{route('shop.saved.switchToSaved',$item->rowId)}}" method="post">
                                        @csrf
                                        <a href='#' class="text-info"
                                           onclick='this.parentNode.submit(); return false;'>save for later</a>
                                    </form>

                                </div>
                                <div class="col-12 mt-2" style="height: 2px; background-color: #1a202c2f"></div>

                            </div>

                        </div>
                    @endforeach
                    @if(!\Cart::instance('default')->content()->isEmpty())
                        <div class="col-12 text-right mt-5">
                            <form action="{{route('shop.cart.empty')}}" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-outline-danger">Clear shopping cast</button>
                            </form>
                        </div>
                    @endif

                    <div class="col-12 my-5">
                        <div class="alert alert-dark" role="alert">
                            <div class="row">
                                <div class="col col-8">
                                    <p>Shipping is free because we are awesome like that. UwU</p>
                                </div>
                                <div class="col col-2 align-items-around text-right" style="line-height: 1.7rem">
                                    <strong class="text-muted">SubTotal</strong>
                                    <br>
                                    <strong class="text-muted ">Tax</strong>
                                    <br>
                                    <strong class="text-dark"><h4>Total</h4></strong>
                                </div>
                                <div class="col col-2 align-items-around text-right" style="line-height: 1.7rem">
                                    <strong class="text-muted">{{priceFormat($bills['subtotal'])}}</strong>
                                    <br>
                                    <strong class="text-muted ">{{priceFormat($bills['tax'])}}</strong>
                                    <br>
                                    <strong class="text-dark"><h4>{{priceFormat($bills['total'])}}</h4></strong>
                                </div>
                            </div>
                            <hr>
                            @if(!\Cart::instance('default')->content()->isEmpty())
                                <div class="col-12">
                                    <div class="d-flex justify-content-between">
                                        <a href="{{route('shop.index')}}" class="btn btn-outline-dark">Continue
                                            shopping</a>
                                        <a href="{{route('shop.checkout')}}" class="btn btn-success">
                                            Checkout
                                        </a>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                    @if(\Cart::instance('save')->content()->isEmpty())
                        <div class="col-12 my-5"> There is no item saved for later</div>
                    @endif
                    @foreach(\Cart::instance('save')->content() as $item)
                        <div class="col-12">
                            <div class="row mt-3">
                                <h5 class="col-12 py-3"><span class="text-danger">Saved items</span> in your cart...</h5>

                                <div class="col-12 mb-1" style="height: 2px; background-color: #1a202c2f"></div>
                                <div class="col-2 ">
                                    <a href="{{route('shop.show',$item->model->slug)}}"> <img
                                            src="{{productImage($item->model->image)}}" class="img-fluid"
                                            alt=""></a>
                                </div>
                                <div class="col-4">
                                    <a href="{{route('shop.show',$item->model->slug)}}"> {{$item->name}}</a>
                                    <p>{{$item->model->details}}</p>
                                </div>
                                <div class="col-1"></div>
                                <div class="col-2">{{$item->model->presetPrice}}</div>
                                <div class="col-3 text-right">
                                    <form action="{{route('shop.saved.remove',$item->rowId)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href='#' class="text-danger"
                                           onclick='this.parentNode.submit(); return false;'>Remove</a>
                                    </form>
                                    <form action="{{route('shop.saved.switchToCart',$item->rowId)}}" method="post">
                                        @csrf
                                        <a href='#' class="text-info"
                                           onclick='this.parentNode.submit(); return false;'>Move to cast</a>
                                    </form>
                                </div>

                                <div class="col-12 mt-2" style="height: 2px; background-color: #1a202c2f"></div>

                            </div>

                        </div>
                    @endforeach
                    @if(!\Cart::instance('save')->content()->isEmpty())

                        <div class="col-12 mt-2 text-right mb-5">
                            <form action="{{route('shop.cart.empty')}}" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-outline-danger">Clear saved items</button>
                            </form>
                        </div>
                    @endif
                </div>
            </div>
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
@section('extra-js')
    <script>
        (function () {
            const className = document.querySelectorAll('.quantity');

            Array.from(className).forEach(function (element) {
                const id = element.getAttribute('data-id');
                element.addEventListener('change', function () {
                    axios.patch(`/cart/${id}`, {quantity: this.value}).then(res => {
                        window.location.href = '{{route('shop.cart')}}';
                        f
                    }).catch(err => {
                        console.log(err);
                    })
                })
            })
        })();
    </script>
@endsection
