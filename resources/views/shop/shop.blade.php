@extends('layouts.master')
@section('extra-css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/instantsearch.css@7.3.1/themes/reset-min.css"
        integrity="sha256-t2ATOGCtAIZNnzER679jwcFcKYfLlw01gli6F6oszk8=" crossorigin="anonymous">

@endsection
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
        <div class="page-heading about-heading header-text"
            style="background-image: url({{ asset('images/heading-6-1920x500.jpg') }});" id="offset-pos">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-content">
                            <h2>Shop</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container h5">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb ">
                    <li class="breadcrumb-item pt-1"><a href="{{ route('landing-page') }}" class="text-dark">Home</a>
                    </li>
                    <li class="breadcrumb-item pt-1"><a href="{{ route('shop.index') }}" class="text-danger">Shop</a>
                    </li>
                    <li class="align-self-end ml-auto pt-2 pt-sm-0">
                        <div class="d-flex flex-column">
                            <form action="{{ route('shop.search') }}" class="ml-auto position-relative" method="post">
                                @csrf
                                <input type="search" name="q" style="border-radius: 6px;width: 300px;padding-right: 35px"
                                    class="form-control" placeholder="Search Products...">
                                <a class="text-danger" style="cursor: pointer"><i class="fa fa-search position-absolute"
                                        style="top:10px; right: 13px"></i></a>
                            </form>
                            <form action="{{ route('shop.algolia-search') }}" class=" ml-auto position-relative"
                                method="post">
                                @csrf
                                <input type="search" name="q" style="border-radius: 6px;width: 300px;padding-right: 35px"
                                    class="form-control" placeholder="Algoria Search...">
                                <a class="text-danger" style="cursor: pointer"><i class="fa fa-search position-absolute"
                                        style="top:10px; right: 13px"></i></a>
                            </form>

                        </div>
                    </li>
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
                                    class="bg-dark h3 text-light px-3 py-2 border border-danger border-right-0 border-left-0">{{ $categoryName }}</span>
                            </div>
                            @forelse($products as $product)
                                {{-- <div class="col-lg-4 col-sm-6">
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
                                </div> --}}
                                <div class="col-lg-4 col-sm-6">
                                    <div class="product-card mb-4">
                                        <div class="product-card__header" >
                                            <div class="product-card__header-img" style="  background-image: url({{ productImage($product->image) }});
                                                    ">

                                            </div>
                                        </div>
                                        <div class="down-content p-3" style="background-color: {{$product->bg_color}}">
                                            <a class="text-danger h4"
                                                href="{{ route('shop.show', $product->slug) }}">{{ $product->name }}</a>
                                            <div class="d-flex  justify-content-between ">
                                                <h5><small class="text-dark ">
                                                        {{ $product->presetPrice }}</small>

                                                </h5>
                                                @php
                                                    $rating = $product->ratings->avg('rating');
                                                @endphp
                                                @if ($rating)
                                                    <star-rating :rating="@json($product->ratings->avg('rating'))"
                                                        :star-size="15" :read-only="true" :increment="0.1"></star-rating>
                                                @else
                                                    <small>No Rating</small>
                                                @endif

                                            </div>
                                            <div>{{ $product->details }}</div>
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
                            <h5 class="text-danger pb-2 px-3 px-md-0" style="text-decoration: underline">By Price
                                💸</h5>
                            <div class="d-flex flex-md-column flex-wrap justify-content-start text-right">
                                <a class="pt-1 h5 px-3 px-md-0 {{ request()->sort === 'low_high' ? 'text-danger' : 'text-dark' }}"
                                    href="{{ route('shop.index', ['category' => request()->category, 'sort' => 'low_high']) }}">Low
                                    to High</a>
                                <a class="pt-1 h5 px-3 px-md-0 {{ request()->sort === 'high_low' ? 'text-danger' : 'text-dark' }}"
                                    href="{{ route('shop.index', ['category' => request()->category, 'sort' => 'high_low']) }}">High
                                    to Low</a>
                            </div>
                        </div>
                        <div class="d-flex flex-column text-md-right">
                            <h5 class="text-danger pb-2 px-1 px-md-0" style="text-decoration: underline">
                                By Category 🙋</h5>
                            <div class="d-flex flex-md-column flex-wrap justify-content-start text-right">
                                <a class="pt-1 text-dark h5 px-1 px-md-0" href="{{ route('shop.index') }}">Featured</a>
                                @foreach ($categories as $category)
                                    <a class="pt-1  h5 px-1 px-md-0 {{ request()->category === $category->slug ? 'text-danger' : 'text-dark' }}"
                                        href="{{ route('shop.index', ['category' => $category->slug]) }}">{{ $category->name }}</a>
                                @endforeach
                                <a class="pt-1 text-dark h5 px-1 px-md-0 {{ request()->category === 'uncategorized' ? 'text-danger' : 'text-dark' }}"
                                    href="{{ route('shop.index', ['category' => 'uncategorized']) }}">Uncategorized</a>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="col-md-12"> --}}
                    {{-- <ul class="pages"> --}}
                    {{-- <li><a href="#"><i class="fa fa-angle-double-left"></i></a></li> --}}
                    {{-- <li><a href="#">1</a></li> --}}
                    {{-- <li class="active"><a href="#">2</a></li> --}}
                    {{-- <li><a href="#">3</a></li> --}}
                    {{-- <li><a href="#">4</a></li> --}}
                    {{-- <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li> --}}
                    {{-- </ul> --}}
                    {{-- </div> --}}
                    <div class="col-md-12 ">
                        {{ $products->appends(request()->input())->links('vendor.pagination.custom') }}
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="inner-content">
                            <p>Copyright © 2020 Company Name - Template by: <a
                                    href="https://www.phpjabbers.com/">PHPJabbers.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>

@endsection
@section('extra-js')
    <script src="https://cdn.jsdelivr.net/npm/algoliasearch@4.5.1/dist/algoliasearch-lite.umd.js"
        integrity="sha256-EXPXz4W6pQgfYY3yTpnDa3OH8/EPn16ciVsPQ/ypsjk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/instantsearch.js@4.8.3/dist/instantsearch.production.min.js"
        integrity="sha256-LAGhRRdtVoD6RLo2qDQsU2mp+XVSciKRC8XPOBWmofM=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/custom-algolia.js') }}">

    </script>

@endsection
