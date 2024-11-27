@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
<div>
    <h1>Regsitration Successful!</h1>
    <div class="row mt-5">
        <div class="col-md-8 text-left">
            <h4>
                You have successfully Registered in. <br>
                Welcome to the House of Culture.
            </h4>
        </div>
        <div class="col-md-4 text-end">
            <img src="{{ asset('images/profile.png') }}" class="img-fluid" alt="">
        </div>
    </div>
    <div class="mt-5">
        <a class="" href="{{ route('home') }}">
            <button class="action-button-black">
                <div>
                    Redirect to Home Page
                    {{-- <span>
                        <img src="./assets/images/home.png" class="mx-2" alt="">
                    </span> --}}
                </div>
            </button>
        </a>
    </div>
</div>
@endsection