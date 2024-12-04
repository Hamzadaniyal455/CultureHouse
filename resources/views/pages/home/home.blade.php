@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <h2 id="welcome-text">Welcome to The Culture House</h2>
    <div class="buttons">
        <a class="action-button"
            href="{{ route('login') }}">
            <div class="d-flex">
                <div>
                    <span id="login-button">
                        Login
                    </span>
                    <span>
                        <img class="mx-2"
                            src="{{ asset('images/login.png') }}"
                            alt="">
                    </span>
                </div>
            </div>
        </a>
        <a class="action-button mt-3"
            href="{{ route('register') }}">
            <div class="d-flex">
                <div>
                    <span id="register-button">
                        Register
                    </span>
                    <span>
                        <img class="mx-2"
                            src="{{ asset('images/register.png') }}"
                            alt="">
                    </span>
                </div>
            </div>
        </a>
    </div>
    {{-- <script>
        // const languageToggle = document.getElementById('language-toggle');
        const loginButton = document.getElementById('login-button');
        const registerButton = document.getElementById('register-button');
        const welcomeText = document.getElementById('welcome-text');

        $(document).ready(function() {
            function updateLanguageContent(language) {
                if (language === 'en') {
                    document.body.style.direction = 'ltr';
                    welcomeText.textContent = 'Welcome to The Cultural House';
                    loginButton.textContent = 'Login';
                    registerButton.textContent = 'Register';
                } else {
                    // languageToggle.textContent = 'ENG';
                    document.body.style.direction = 'rtl';
                    welcomeText.textContent = 'أهلاً وسهلاً بك .. في بيت الثقافة';
                    loginButton.textContent = 'سجِّل دخولك';
                    registerButton.textContent = 'تسجيل جديد';
                }
            }

            // Retrieve language from localStorage or default to 'en'
            const savedLanguage = localStorage.getItem('language') || 'en';

            // Apply the saved language
            updateLanguageContent(savedLanguage);
        })
    </script> --}}
@endsection
