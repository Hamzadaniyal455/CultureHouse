@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
<div class="mt-5">
    <h3>Login</h3>
    <div class="steps-indicator mt-5">
        <img src="{{ asset('images/Steps2.png') }}" alt="">
    </div>
    
    <div class="login-info">
        @if ($visitor)
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-3">
                    <p>Visitor Type:</p>
                    <p>Phone Number: </p>
                    <p>Gender: </p>
                </div>
                <div class="col-md-2">
                    <div id="visitor-type-display">{{$visitor->type}}</div><br>
                    <div id="phone-number-display">{{$visitor->phone}}</div>
                    <div id="gender-display">{{$visitor->gender}}</div>
                </div>
                <div class="col-md-4"></div>
            </div>
        @else
            <div class="row">
                <p>No Details Available</p>
            </div>
        @endif
    </div>
   
    <div class="tw-center">
        <a href="{{ route('dependents')}}">
            <button class="action-button-black">Continue Login</button>
        </a>
    </div>
</div>
@endsection