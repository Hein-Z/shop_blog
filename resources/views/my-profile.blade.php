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
                    <li class="breadcrumb-item pt-1"><a href="#" class="text-danger">My Profile</a></li>
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
                        <div class="card-header bg-dark text-light h5 font-weight-bolder">My Profile</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('user.update') }}">
                                @csrf
                                @method('patch')

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name')??$user->name }}" required autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email')??$user->email }}" required autocomplete="email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                        <span class="text-dark">Leave blank if you do not want to change</span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
                                        <span class="text-dark">Leave blank if you do not want to change</span>

                                    </div>
                                </div>


                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-dark">
                                            Update Profile
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        @include('layouts.footer')
    </div>


@endsection
