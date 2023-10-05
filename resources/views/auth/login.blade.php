@extends('layouts.app')

@section('content')
<div class="container">
    <div id="logo-container" class="row justify-content-end">
    <img class="logo" src="https://scontent.xx.fbcdn.net/v/t1.15752-9/379654352_3562946250609323_738295434293063444_n.png?_nc_cat=109&ccb=1-7&_nc_sid=aee45a&_nc_eui2=AeGZMv6FAu96ucIw9FgvM59oqD9CK9Li2FGoP0Ir0uLYUVw5RXDYxUx40zB5f911DRqtd30CW7ktyufKP8xR8UFV&_nc_ohc=GmJHtwpZdSoAX_3y2hK&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdRHY3iuRBz5DrTaBwCTHK_usqfWm3alRCFvZAgC8sm6RA&oe=653B6BD6">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input placeholder="Enter Email Address" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input placeholder="Enter Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                        <div class="row mb-0">
                            
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                
                            </div>
                        </div>
                    </form>
                    <div class="row mb-0">
                                <div class="float-login">
                                    <div class="float-content-login">
                                        <div class="new">New User?</div>
                                    </div>
                                   
                                    <div class="float-content-login">
                                        <button id="btn btn-link" type="submit" class="btn-signup">
                                            {{ __('Sign Up') }}
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
