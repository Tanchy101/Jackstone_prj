@extends('layouts.app')

@section('content')
<div class="container">
    <div id="logo-container" class="row justify-content-end">
    <img class="logo" src="https://previews.dropbox.com/p/thumb/ACDPlRVHmh6Rqkp_ttuWAAIKLysmwbmN-tIYuvNOyps6JSV5BN6hqsFbIXYSPMFohyedX1LPuosy8FLAxuTpnf3XHRwOYZ4dRHGHM1bp_iMZfPllc6UPDpyjtp8jGRwMM5zdjtQYAAb6SH86bKvbVHtaWTAm3nWoJ9YelpH_cUYFJ79MgIRgcA3x6qw0hEzbcegpsdwy0QOguKmCZro9k4GZlQv-lvDcgp0R46_6YYtIj4D1aiUmqX_DUa5qqZ9-S-pIEZlijOyBH1oId-crd29xiZzFP2cAdhXze2Hxg_md2cVgH9tCet2MIvtoqAFs0R4m53K6fvdJRavjkniWvrVA/p.png">
        <div class="col-md-5">
            <div class="card" id="card-marg">
                <div id="card-hdr"><p class = "hdr"> Register <p></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" id="textbox" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" id="textbox" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" id="textbox" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" id="textbox" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
