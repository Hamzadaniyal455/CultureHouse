@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <div>
        <h1 id="login-success">Registration Successful!</h1>
        <div class="row mt-5">
            <div class="col-md-8 text-left">
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
                        {{-- <span>
                        <img src="./assets/images/home.png" class="mx-2" alt="">
                    </span> --}}
                    </div>
                </button>
            </a>
        </div>
    </div>

    <script>
        const login = document.getElementById('login-success');
        const loginContent = document.getElementById('login-content');
        const returnButton = document.getElementById('return-button');
        const text = document.getElementById('text');

        $(document).ready(function() {
            function updateLanguageContent(language) {
                if (language === 'en') {
                    document.body.style.direction = 'ltr';
                    login.textContent = 'Registration Completed Successful!';
                    loginContent.textContent = 'You have successfully logged in. Welcome to the House of Culture.';
                    returnButton.textContent = 'Return to Home Page';
                    text.style.textAlign = 'left';
                } else {
                    document.body.style.direction = 'rtl';
                    login.textContent = 'تم إكمال التسجيل بنجاح';
                    loginContent.textContent = 'تم إكمال تسجيلك بنجاح أهلاً وسهلاً بك في بيت الثّقافة';
                    returnButton.textContent = 'العودة إلى الصفحة الرئيسية';
                    text.style.textAlign = 'right';
                }
            }

            // Retrieve language from localStorage or default to 'en'
            const savedLanguage = localStorage.getItem('language') || 'en';

            // Apply the saved language
            updateLanguageContent(savedLanguage);
        })
    </script>
@endsection
