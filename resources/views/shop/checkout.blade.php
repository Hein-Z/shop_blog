@extends('layouts.master')
@section('extra-css')
    <style>
        /**
 * The CSS shown here will not be introduced in the Quickstart guide, but shows
 * how you can use CSS to style your Element's container.
 */
        .StripeElement {
            box-sizing: border-box;

            height: 40px;

            padding: 10px 12px;

            border: 1px solid transparent;
            border-radius: 4px;
            background-color: white;

            box-shadow: 0 1px 3px 0 #e6ebf1;
            -webkit-transition: box-shadow 150ms ease;
            transition: box-shadow 150ms ease;
        }

        .StripeElement--focus {
            box-shadow: 0 1px 3px 0 #cfd7df;
        }

        .StripeElement--invalid {
            border-color: #fa755a;
        }

        .StripeElement--webkit-autofill {
            background-color: #fefde5 !important;
        }
    </style>
    <script src="https://js.stripe.com/v3/"></script>
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
             style="background-image: url({{asset('images/heading-6-1920x500.jpg')}})" id="offset-pos">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-content">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <h2>Checkout</h2>
                            @if ($message = session()->has('success'))
                                <div class="alert alert-dark" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{ session()->get('success') }}
                                </div>
                            @endif
                            @if($errors->any())
                                <div class="alert alert-danger" role="alert">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{!! $error!!}</li>
                                        @endforeach
                                    </ul>
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
                    <li class="breadcrumb-item "><a href="{{route('shop.cart')}}" class="text-dark">Cart</a></li>
                    <li class="breadcrumb-item text-danger">Checkout</li>
                </ol>
            </nav>
        </div>

        <div class="products call-to-action">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-4 mb-5 mt-md-0">
                        <div class="row">
                            <div class="col-12">
                                <h5 class="text-danger pb-4">Shopping Cart</h5>
                                @if(\Cart::instance('default')->content()->isEmpty())
                                    <div class="my-5"> There is no item in your shopping cart</div>
                                @endif
                                <div class="row">
                                    @foreach(\Cart::instance('default')->content() as $item)
                                        <div class="col-4">
                                            <a href="{{route('shop.show',$item->model->slug)}}"> <img
                                                    src="{{productImage($item->model->image)}}"
                                                    class="img-fluid"
                                                    alt=""></a>
                                        </div>
                                        <div class="col-5">
                                            <a href="{{route('shop.show',$item->model->slug)}}"> {{$item->name}}</a>
                                            <br>
                                            <small>{{$item->model->details}}</small>
                                            <p class="h5">{{$item->model->presetPrice}}</p>

                                        </div>
                                        <div class="col-3">
                                            <div class="bg-dark text-light text-center d-block h5 rounded-pill">
                                                {{$item->qty}}
                                            </div>
                                        </div>
                                    @endforeach
                                    <checkout-invoice :bills='@json($bills)'
                                                      :coupon='@json(session()->get('coupon'))'></checkout-invoice>
                                    @if($errors->any())
                                        <div class="alert alert-danger col-12" role="alert">
                                            <ul>
                                                @foreach($errors->all() as $error)
                                                    <li>{!!  $error!!}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    @if ($message = session()->has('success'))
                                        <div class="alert alert-dark col-12" role="alert">
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
                    <div class="col-12 col-md-8 mt-0 p-0 px-5">
                        <div class="contact-form">
                            <form action="{{ route('shop.checkout') }}" method="POST" id="payment-form">
                                @csrf
                                <h2>Billing Details</h2>

                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    @if (auth()->user())
                                        <input type="email" class="form-control" id="email" name="email"
                                               value="{{\Illuminate\Support\Facades\Auth::user()->email}}" readonly>
                                    @else
                                        <input type="email" class="form-control" id="email" name="email"
                                               value="{{ old('email')}}" required>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                           value="{{ old('name')}}"
                                           required>
                                </div>

                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" id="address" name="address"
                                           value="{{ old('address')}}" required>
                                </div>

                                <div class="half-form">
                                    <div class="form-group">
                                        <label for="city">City</label>
                                        <input type="text" class="form-control" id="city" name="city"
                                               value="{{ old('city')}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="province">Province</label>
                                        <input type="text" class="form-control" id="province" name="province"
                                               value="{{ old('province')}}" required>
                                    </div>
                                </div> <!-- end half-form -->

                                <div class="half-form">
                                    <div class="form-group">
                                        <label for="postalcode">Postal Code</label>
                                        <input type="text" class="form-control" id="postalcode" name="postalcode"
                                               value="{{ old('postalcode')}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" class="form-control" id="phone" name="phone"
                                               value="{{ old('phone')}}" required>
                                    </div>
                                </div> <!-- end half-form -->

                                <div class="spacer"></div>

                                <h2>Payment Details</h2>

                                <div class="form-group">
                                    <label for="name_on_card">Name on Card</label>
                                    <input type="text" class="form-control" id="name_on_card" name="name_on_card"
                                           value="{{ old('name_on_card')}}">
                                </div>

                                <div class="form-group">
                                    <label for="card-element">
                                        Credit or debit card
                                    </label>
                                    <div id="card-element">
                                        <!-- a Stripe Element will be inserted here. -->
                                    </div>

                                    <!-- Used to display form errors -->
                                    <div id="card-errors" role="alert"></div>
                                </div>
                                <div class="spacer"></div>

                                <button type="submit" id="complete-order" class="btn btn-dark">Complete Order
                                </button>


                            </form>

                        </div>
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
    </div>
@section('extra-js')
    <script>
        // Create a Stripe client.
        var stripe = Stripe('pk_test_51I4OsoEfzIpt7BfHins5shMNdT7tvCCKvQotJBsJYQYJ91xZBjGlXN8WUujbLpAad1fWALulthw1AFhCnm076WDT00e7VC6ljP');

        // Create an instance of Elements.
        var elements = stripe.elements();

        // Custom styling can be passed to options when creating an Element.
        // (Note that this demo uses a wider set of styles than the guide below.)
        var style = {
            base: {
                color: '#32325d',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                    color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
        };

        // Create an instance of the card Element.
        var card = elements.create('card', {style: style});

        // Add an instance of the card Element into the `card-element` <div>.
        card.mount('#card-element');
        // Handle real-time validation errors from the card Element.
        card.on('change', function (event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });

        // Handle form submission.
        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function (event) {
            event.preventDefault();

            document.getElementById('complete-order').disabled = true

            var options = {
                name: document.getElementById('name_on_card').value,
                address_line1: document.getElementById('address').value,
                address_city: document.getElementById('city').value,
                address_state: document.getElementById('province').value,
                address_zip: document.getElementById('postalcode').value
            }
            stripe.createToken(card, options).then(function (result) {
                if (result.error) {
                    // Inform the user if there was an error.
                    document.getElementById('complete-order').disabled = false;
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    // Send the token to your server.
                    stripeTokenHandler(result.token);
                }
            });
        });

        // Submit the form with the token ID.
        function stripeTokenHandler(token) {
            // Insert the token ID into the form so it gets submitted to the server
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);

            // Submit the form
            form.submit();
        }
    </script>
@endsection

@endsection
