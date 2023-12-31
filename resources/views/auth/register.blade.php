@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
<div class="container">
    <div id="logo-container" class="row justify-content-end">
    <img class="logo" src="https://scontent.xx.fbcdn.net/v/t1.15752-9/379654352_3562946250609323_738295434293063444_n.png?_nc_cat=109&ccb=1-7&_nc_sid=aee45a&_nc_eui2=AeGZMv6FAu96ucIw9FgvM59oqD9CK9Li2FGoP0Ir0uLYUVw5RXDYxUx40zB5f911DRqtd30CW7ktyufKP8xR8UFV&_nc_ohc=GmJHtwpZdSoAX_3y2hK&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdRHY3iuRBz5DrTaBwCTHK_usqfWm3alRCFvZAgC8sm6RA&oe=653B6BD6">
    <div class="col-md-5">
            <div class="card" id="card-marg">
                <div id="card-hdr"><p class = "hdr"> Sign Up <p></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-2">
                            <label for="name" id="textbox" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input placeholder="Enter Name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="email" id="textbox" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input placeholder="Enter Email Address" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="password" id="textbox" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input placeholder="Create Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="password-confirm" id="textbox" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input placeholder="Re-type Password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button id="btnreg" type="submit" class="btn">
                                    {{ __('Create Account') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="row mb-0">
                                <div class="float-signup">
                                    <div class="float-content-signup">
                                        <div class="alr">Already Signed?</div>
                                    </div>
                                   
                                    <div class="float-content-signup">
                                        <button id="btn btn-link" type="submit" class="btn-login">
                                            <a class="redirect-login" href="{{ url('login') }}">{{ __('Log In') }}</a>
                                        </button>
                                    </div>
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
