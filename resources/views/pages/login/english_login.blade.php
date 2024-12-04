@extends('layouts.english')

@section('title', 'Home Page')

@section('content')
    <div class="buttons mt-40">
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
        <p class="text-red" id="loginError"></p>
        <form class="align-items-center"
            id="phoneForm">
            @csrf
            <div class="d-flex align-items-center justify-content-center">
                <input class="phone no-border w-100"
                    id="password-input"
                    name="phone"
                    type="number"
                    placeholder="59xxxxxxxxx" />

            </div>

            <div class="d-flex">
                <button class="action-button"
                    id="login-button"
                    type="submit">
                    Login
                </button>
            </div>
        </form>
    </div>
@endsection
