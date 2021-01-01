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
                <li class="breadcrumb-item "><a href="{{route('landing-page')}}" class="text-dark">Home</a></li>
                <li class="breadcrumb-item "><a href="{{route('shop.index')}}" class="text-dark">Shop</a></li>
                <li class="breadcrumb-item text-danger">{{$product->slug}}</li>
            </ol>
        </nav>
    </div>
    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <div>
                        <img src="{{asset('images/product-1-370x270.jpg')}}" alt="" class="img-fluid wc-image">
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-4 col-xs-6">
                            <div>
                                <img src="{{asset('images/product-1-370x270.jpg')}}" alt="" class="img-fluid">
                            </div>
                            <br>
                        </div>
                        <div class="col-sm-4 col-xs-6">
                            <div>
                                <img src="{{asset('images/product-2-370x270.jpg')}}" alt="" class="img-fluid">
                            </div>
                            <br>
                        </div>
                        <div class="col-sm-4 col-xs-6">
                            <div>
                                <img src="{{asset('images/product-3-370x270.jpg')}}" alt="" class="img-fluid">
                            </div>
                            <br>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 col-xs-12">
                    <form action="{{route('shop.cart.store')}}" method="post" class="form">
                        @csrf
                        <input type="hidden" value="{{$product->id}}" name="id">
                        <h2>{{$product->name}}</h2>
                        <input type="hidden" value="{{$product->name}}" name="name">
                        <br>
                        <h5>{{$product->details}}</h5>
                        <br>
                        <p class="lead">
                            <strong class="text-danger">{{$product->presetPrice}}</strong>
                        </p>
                        <input type="hidden" value="{{$product->price}}" name="price">


                        <br>

                        <p class="lead">
                            {{$product->description}}
                        </p>

                        <br>

                        <div class="row">
                            <div class="col-sm-4">
                                <label class="control-label">Extra 1</label>
                                <div class="form-group">
                                    <select class="form-control" name="extra">
                                        <option value="0">18 gears</option>
                                        <option value="1">21 gears</option>
                                        <option value="2">27 gears</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <label class="control-label">Quantity</label>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="number" class="form-control" name="quantity" value="1">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-primary btn-block">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="latest-products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>You might also like ...</h2>
                        <a href="{{route('shop.index')}}">view more <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                @foreach($mayLikes as $mayLike)
                    <div class="col-md-4">
                        <div class="product-item">
                            <a href="{{route('shop.show',$mayLike->slug)}}"><img
                                    src="{{asset('images/product-1-370x270.jpg')}}" alt=""></a>
                            <div class="down-content">
                                <a href="{{route('shop.show',$mayLike->slug)}}"><h4>{{$mayLike->name}}</h4></a>
                                <br>
                                <h5>{{$mayLike->details}}</h5>
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

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-content">
                        <p>Copyright © 2020 Company Name - Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    {{--    <!-- Modal -->--}}
    {{--    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"--}}
    {{--         aria-hidden="true">--}}
    {{--        <div class="modal-dialog modal-lg" role="document">--}}
    {{--            <div class="modal-content">--}}
    {{--                <div class="modal-header">--}}
    {{--                    <h5 class="modal-title" id="exampleModalLabel">Book Now</h5>--}}
    {{--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
    {{--                        <span aria-hidden="true">&times;</span>--}}
    {{--                    </button>--}}
    {{--                </div>--}}
    {{--                <div class="modal-body">--}}
    {{--                    <div class="contact-form">--}}
    {{--                        <form action="#" id="contact">--}}
    {{--                            <div class="row">--}}
    {{--                                <div class="col-md-6">--}}
    {{--                                    <fieldset>--}}
    {{--                                        <input type="text" class="form-control" placeholder="Pick-up location"--}}
    {{--                                               required="">--}}
    {{--                                    </fieldset>--}}
    {{--                                </div>--}}

    {{--                                <div class="col-md-6">--}}
    {{--                                    <fieldset>--}}
    {{--                                        <input type="text" class="form-control" placeholder="Return location"--}}
    {{--                                               required="">--}}
    {{--                                    </fieldset>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}

    {{--                            <div class="row">--}}
    {{--                                <div class="col-md-6">--}}
    {{--                                    <fieldset>--}}
    {{--                                        <input type="text" class="form-control" placeholder="Pick-up date/time"--}}
    {{--                                               required="">--}}
    {{--                                    </fieldset>--}}
    {{--                                </div>--}}

    {{--                                <div class="col-md-6">--}}
    {{--                                    <fieldset>--}}
    {{--                                        <input type="text" class="form-control" placeholder="Return date/time"--}}
    {{--                                               required="">--}}
    {{--                                    </fieldset>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <input type="text" class="form-control" placeholder="Enter full name" required="">--}}

    {{--                            <div class="row">--}}
    {{--                                <div class="col-md-6">--}}
    {{--                                    <fieldset>--}}
    {{--                                        <input type="text" class="form-control" placeholder="Enter email address"--}}
    {{--                                               required="">--}}
    {{--                                    </fieldset>--}}
    {{--                                </div>--}}

    {{--                                <div class="col-md-6">--}}
    {{--                                    <fieldset>--}}
    {{--                                        <input type="text" class="form-control" placeholder="Enter phone" required="">--}}
    {{--                                    </fieldset>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </form>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="modal-footer">--}}
    {{--                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>--}}
    {{--                    <button type="button" class="btn btn-primary">Book Now</button>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}


@endsection
