@extends('layouts.arabic')

@section('title', 'Home Page')

@section('content')
    <div>
        <div class="steps-indicator mt-5">
            <img src="{{ asset('images/Steps2.png') }}"
                alt="">
        </div>
        <h3 class="mt-5 mb-5"
            id="login">
            تسجيـــــل الدّخـــــول
        </h3>

        <div class="login-info"
            id="login-info">
            @if ($visitor)
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-4">
                        <p id="visitor-type">نوع الزائر:</p>
                        <p id="phone-number">رقم الجوال:</p>
                        <p id="gender">الجنس:</p>
                    </div>
                    <div class="col-5">
                        <div id="visitor-type-display">{{ $visitor->type }}</div>
                        <div id="phone-number-display">{{ $visitor->phone }}</div>
                        <div id="gender-display">{{ $visitor->gender }}</div>
                    </div>
                </div>
            @else
                <div class="row">
                    <p>No Details Available</p>
                </div>
            @endif
        </div>

        <div class="tw-center mt-5">
            <a href="{{ route('dependents') }}">
                <button class="action-button-black"
                    id="cont-login-button"></button>
            </a>
        </div>
    </div>

    <script>
        const login = document.getElementById('login');
        const visitorType = document.getElementById('visitor-type');
        const visitorTypeDisplay = document.getElementById('visitor-type-display');
        const phoneNumber = document.getElementById('phone-number');
        const gender = document.getElementById('gender');
        const genderDisplay = document.getElementById('gender-display');
        const contloginButton = document.getElementById('cont-login-button');
        const registerButton = document.getElementById('register-button');
        const welcomeText = document.getElementById('welcome-text');
        const loginInfo = document.getElementById('login-info');

        $(document).ready(function() {
            if (visitorTypeDisplay.textContent === 'National' || visitorTypeDisplay.textContent ===
                'مواطـــــن') {
                console.log('123');
                visitorTypeDisplay.textContent = 'مواطـــــن';
            } else if (visitorTypeDisplay.textContent === 'Resident' || visitorTypeDisplay.textContent ===
                'مقيـــــم') {
                visitorTypeDisplay.textContent = 'مقيـــــم';
            } else if (visitorTypeDisplay.textContent === 'Tourist' || visitorTypeDisplay.textContent ===
                'سائـــــح') {
                visitorTypeDisplay.textContent = 'سائـــــح';
            }
            if (genderDisplay.textContent === 'Male' || genderDisplay.textContent === 'ذكـــــر') {
                genderDisplay.textContent = 'ذكـــــر';
            } else if (genderDisplay.textContent === 'Female' || genderDisplay.textContent === 'انثـــــى') {
                genderDisplay.textContent = 'انثـــــى';
            }
            login.textContent = 'تسجيـــــل الدّخـــــول';
            login.style.fontSize = '45px';
            phoneNumber.textContent = 'رقم الجوال';
            gender.textContent = 'الجنس';
            loginInfo.style.textAlign = 'right';
            loginInfo.style.fontSize = '30px';
            contloginButton.textContent = 'سجِّل دخولك';
            updateLanguageContent(savedLanguage);
        })
    </script>
@endsection
