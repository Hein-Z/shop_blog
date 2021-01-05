@extends('layouts.master')
@section('extra-css')
    <style>
        /*product detail gallery*/
        .product-section-image {
            opacity: 0;
            transition: 0.2s ease-in-out;
        }

        img.active-img {
            opacity: 1;
        }

    </style>
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
                    <div class="d-flex justify-content-center align-items-center" style="min-height: 300px">
                        <img src="{{productImage($product->image)}}" alt="" id="current-image"
                             class="img-fluid wc-image product-section-image active-img">
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-4 col-xs-6">
                            <div class="product-section-thumbnail">
                                <img src="{{productImage($product->image)}}"  alt="" class="img-fluid thumbnail-image">
                            </div>
                            <br>
                        </div>
                        @if($product->images)
                            @foreach(json_decode($product->images,true) as $image)
                                <div class="col-sm-4 col-xs-6">
                                    <div class="product-section-thumbnail">
                                        <img src="{{productImage($image)}}"  alt="" class="img-fluid img-thumbnail thumbnail-image">
                                    </div>
                                    <br>
                                </div>
                            @endforeach
                        @endif
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
                            {!!$product->description!!}
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
                                    src="{{productImage($mayLike->image)}}" alt=""></a>
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

    @include('layouts.footer')

@section('extra-js')
    <script>

        const currentImg=document.getElementById('current-image');
        const thumbnailImg=document.querySelectorAll(".product-section-thumbnail");
        thumbnailImg.forEach(element=>{
            element.addEventListener('click',showImage);
        });

        function showImage(){
            currentImg.classList.remove('active-img');

            currentImg.addEventListener('transitionend',()=>{
                currentImg.src=this.querySelector('.thumbnail-image').src;
                currentImg.classList.add('active-img');

            })
        }

    </script>
@endsection
