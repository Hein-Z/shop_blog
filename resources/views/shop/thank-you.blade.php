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
             style="background-image: url({{asset('images/heading-6-1920x500.jpg')}});"
             id="offset-pos"
        >
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
        <div class="container text-center">
            <h1 class="py-5">Thank You for your payment</h1>
            <a href="{{route('landing-page')}}" class="btn btn-lg btn-outline-dark">Go Back Home</a>
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
    </div>


@endsection
