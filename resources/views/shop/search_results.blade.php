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
        <div class="container">
            <products-table :products='@json($products)' query='{{$query}}'></products-table>
        </div>
    </div>
    @include('layouts.footer')
@endsection
