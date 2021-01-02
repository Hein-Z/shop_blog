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
                        <h2>Products</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container h5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item "><a href="{{route('landing-page')}}" class="text-dark">Home</a></li>
                <li class="breadcrumb-item "><a href="#" class="text-danger">Shop</a></li>
            </ol>
        </nav>
    </div>
    <div class="products mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 ">
                    <div class="row">
                        <div class="mb-5 col-12 ">
                        <span
                            class="bg-dark h3 text-light px-3 py-2 border border-danger border-right-0 border-left-0">{{$categoryName}}</span>
                        </div>
                        @forelse($products as $product)
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <a href="{{route('shop.show',$product->slug)}}"><img
                                            src="{{asset($product->image)}}"
                                            alt=""></a>
                                    <div class="down-content">
                                        <a class="text-danger h4"
                                           href="{{route('shop.show',$product->slug)}}">{{$product->name}}</a>
                                        <h6><small>
                                                {{$product->presetPrice}}</small>
                                        </h6>
                                        <p>{{$product->details}}</p>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-lg-4 col-sm-6 h5 py-5 my-5">No Items Found</div>
                        @endforelse
                    </div>
                </div>
                <div class="col-md-2 px-md-0">
                    <div class="d-flex flex-column text-md-right my-5">
                        <h5 class="text-danger pb-2 px-3 px-md-0" style="text-decoration: underline">By Price 💸</h5>
                        <div class="d-flex flex-md-column flex-wrap justify-content-start text-right">
                            <a class="pt-1 text-dark h5 px-3 px-md-0"
                               href="{{route('shop.index',['category'=>request()->category,'sort'=>'low_high'])}}">Low
                                to High</a>
                            <a class="pt-1 text-dark h5 px-3 px-md-0"
                               href="{{route('shop.index',['category'=>request()->category,'sort'=>'high_low'])}}">High
                                to Low</a>
                        </div>
                    </div>
                    <div class="d-flex flex-column text-md-right">
                        <h5 class="text-danger pb-2 px-1 px-md-0"
                            style="text-decoration: underline">
                            By Category 🙋</h5>
                        <div class="d-flex flex-md-column flex-wrap justify-content-start text-right">
                            <a class="pt-1 text-dark h5 px-1 px-md-0"
                               href="{{route('shop.index')}}">All</a>
                            @foreach($categories as $category)
                                <a class="pt-1 text-dark h5 px-1 px-md-0"
                                   href="{{route('shop.index',['category'=>$category->slug])}}">{{$category->name}}</a>
                            @endforeach
                            <a class="pt-1 text-dark h5 px-1 px-md-0"
                               href="{{route('shop.index',['category'=>'others'])}}">Others</a>
                        </div>
                    </div>
                </div>

                {{--                <div class="col-md-12">--}}
                {{--                    <ul class="pages">--}}
                {{--                        <li><a href="#"><i class="fa fa-angle-double-left"></i></a></li>--}}
                {{--                        <li><a href="#">1</a></li>--}}
                {{--                        <li class="active"><a href="#">2</a></li>--}}
                {{--                        <li><a href="#">3</a></li>--}}
                {{--                        <li><a href="#">4</a></li>--}}
                {{--                        <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>--}}
                {{--                    </ul>--}}
                {{--                </div>--}}
                <div class="col-md-12">
                    {{$products->links()}}
                </div>
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Book Now</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="contact-form">
                        <form action="#" id="contact">
                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset>
                                        <input type="text" class="form-control" placeholder="Pick-up location"
                                               required="">
                                    </fieldset>
                                </div>

                                <div class="col-md-6">
                                    <fieldset>
                                        <input type="text" class="form-control" placeholder="Return location"
                                               required="">
                                    </fieldset>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset>
                                        <input type="text" class="form-control" placeholder="Pick-up date/time"
                                               required="">
                                    </fieldset>
                                </div>

                                <div class="col-md-6">
                                    <fieldset>
                                        <input type="text" class="form-control" placeholder="Return date/time"
                                               required="">
                                    </fieldset>
                                </div>
                            </div>
                            <input type="text" class="form-control" placeholder="Enter full name" required="">

                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset>
                                        <input type="text" class="form-control" placeholder="Enter email address"
                                               required="">
                                    </fieldset>
                                </div>

                                <div class="col-md-6">
                                    <fieldset>
                                        <input type="text" class="form-control" placeholder="Enter phone" required="">
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Book Now</button>
                </div>
            </div>
        </div>
    </div>


@endsection
