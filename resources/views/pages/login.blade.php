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
                    id="password-input"
                    name="phone"
                    type="number"
                    placeholder="59xxxxxxxxx" />

                <!-- <input
    class="no-border w-100" id="phone" name="phone" type="text" placeholder="Enter Your Phone Number"/> -->
            </div>

            <!-- <a class="action-button mt-5" id="login-button" href="{{ route('information') }}"> -->
            <div class="d-flex">
                <button class="action-button"
                    id="login-button"
                    type="submit">
                    Login
                </button>
            </div>
            <!-- </a> -->
        </form>
    </div>

    <script>
        const loginButton = document.getElementById('login-button');

        $(document).ready(function() {
            function updateLanguageContent(language) {
                if (language === 'en') {
                    document.body.style.direction = 'ltr';
                    loginButton.textContent = 'Login';
                    console.log('Language is English');
                } else {
                    document.body.style.direction = 'rtl';
                    loginButton.textContent = 'سجِّل دخولك';
                    console.log('Language is Arabic');
                }
            }

            // Retrieve language from localStorage or default to 'en'
            const savedLanguage = localStorage.getItem('language') || 'en';

            // Apply the saved language
            updateLanguageContent(savedLanguage);
        })
    </script>
@endsection
