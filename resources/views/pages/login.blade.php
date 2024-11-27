@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <div class="buttons mt-20">
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('error'))
            <div>
                <p>{{ session('error') }}</p>
            </div>
        @endif
        <!-- <form class="align-items-center" action="{{ route('login.submit') }}" method="POST"> -->
        <form class="align-items-center"
            id="phoneForm">
            @csrf
            <div class="d-flex align-items-center justify-content-center">
                <input class="phone no-border w-100"
                    id="phone"
                    name="phone"
                    type="number"
                    placeholder="Enter Your Phone Number" />

                <!-- <input
    class="no-border w-100" id="phone" name="phone" type="text" placeholder="Enter Your Phone Number"/> -->
            </div>

            <!-- <a class="action-button mt-5" id="login-button" href="{{ route('information') }}"> -->
            <div class="d-flex">
                <button class="action-button"
                    type="submit">
                    Login
                </button>
            </div>
            <!-- </a> -->
        </form>
    </div>
@endsection
