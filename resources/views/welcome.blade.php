@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
  <br>
  <div class="card text-center">
  <div class="card-header">
    INDEX PAGE ITO
  </div>
  <div class="card-body">
    <h5 class="card-title">BETA MUNA TONG INDEX PAGE</h5>
    <p class="card-text">Andito na rin yung logout</p>
    
    <div>
        <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            {{ __('Logout')}}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @crsf
        </form>
      </div>
  </div>
</div>

@endsection