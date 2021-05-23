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

    <!-- Page Content -->
    <div class="page-heading about-heading header-text"
        style="background-image: url({{ asset('images/heading-6-1920x500.jpg') }});" id="offset-pos">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h2>Blog</h2>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container h5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb ">
                <li class="breadcrumb-item pt-1"><a href="{{ route('landing-page') }}" class="text-dark">Home</a></li>
                <li class="breadcrumb-item pt-1"><a href="#" class="text-danger">Blog</a></li>
            </ol>

        </nav>
    </div>

    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        @if ($categoryName)
                            <div class="mb-5 col-12 ">
                                <span
                                    class="bg-dark h3 text-light px-3 py-2 border border-danger border-right-0 border-left-0">{{ $categoryName }}</span>
                            </div>
                        @endif

                        @forelse ($posts as $post)
                            <div class="col-md-6">
                                <div class="service-item">
                                    <a href="{{ route('blog.show', ['post' => $post->id]) }}"
                                        class="services-item-image"><img src="{{ productImage($post->image) }}"
                                            class="img-fluid" alt=""></a>

                                    <div class="down-content">
                                        <h4><a
                                                href="{{ route('blog.show', ['post' => $post->id]) }}">{{ $post->title }}</a>
                                        </h4>

                                        <p style="margin: 0;"> {!! $post->excerpt !!}</p>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-md-6">No Posts found</div>
                        @endforelse


                        <div class="col-md-12">
                            {{ $posts->appends(request()->input())->links('vendor.pagination.custom') }}
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-form">
                        <div class="form-group">
                            <h5>Blog Search</h5>
                        </div>
                        <form action="{{ route('blog.search') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-8">
                                    <input type="text" class="form-control" placeholder="Search" aria-label="Search"
                                        name="search" aria-describedby="basic-addon2" required>

                                </div>

                                <div class="col-4">
                                    <button class="filled-button" type="submit">Go</button>
                                </div>
                            </div>
                        </form>

                    </div>

                    <div class="form-group">
                        <h5>Categories</h5>
                    </div>

                    <p class="font-weight-bold"> <a class="{{ !request()->category ? 'text-danger' : 'text-dark' }}"
                            href="{{ route('blog.index') }}">Featured</a>
                    </p>
                    @foreach ($categories as $key => $category)
                        <p class="font-weight-bold"><a
                                class="{{ request()->category === $category->slug ? 'text-danger' : 'text-dark' }}"
                                href="{{ route('blog.index', ['category' => $category->slug]) }}">{{ $category->name }}</a>
                        </p>
                    @endforeach

                    <p class="font-weight-bold"> <a
                            class="{{ request()->category === 'uncategorized' ? 'text-danger' : 'text-dark' }}"
                            href="{{ route('blog.index', ['category' => 'uncategorized']) }}">Uncategorized</a></p>
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
                                href="https://www.phpjabbers.com/">PHPJabbers.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>



@endsection
