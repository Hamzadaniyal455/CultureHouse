@extends('layouts.english')

@section('title', 'Home Page')

@section('content')
    <div>
        <h1 id="login-success">Registration Completed Successful!</h1>
        <div class="row mt-5">
            <div class="col-md-8"
                id="text">
                <h4 id="login-content">
                    You have successfully Registered in. <br>
                    Welcome to the House of Culture.
                </h4>
            </div>
            <div class="col-md-4 text-end">
                <img class="img-fluid"
                    src="{{ asset('images/profile.png') }}"
                    alt="">
            </div>
        </div>
        <div class="mt-5">
            <a class=""
                href="{{ route('home') }}">
                <button class="action-button-black">
                    <div id="return-button">
                        Return to Home Page
                    </div>
                </button>
            </a>
        </div>
    </div>

    <script>
        const text = document.getElementById('text');

        $(document).ready(function() {
            text.style.textAlign = 'left';
        })
    </script>
@endsection
