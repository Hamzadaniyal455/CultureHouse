@extends('layouts.english')

@section('title', 'Home Page')

@section('content')
    <div>
        <div class="steps-indicator mt-5">
            <img id="eng-step"
                src="{{ asset('images/Steps2_eng.png') }}"
                alt="">
        </div>
        <h3 class="mt-5 mb-5"
            id="login">
            Login
        </h3>
        <div class="login-info"
            id="login-info">
            @if ($visitor)
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-4">
                        <p id="visitor-type">Visitor Type:</p>
                        <p id="phone-number">Mobile Number:</p>
                        <p id="gender">Gender:</p>
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
                    id="cont-login-button">Continue Login</button>
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
            document.body.style.direction = 'ltr';
            console.log(visitorTypeDisplay.textContent);
            if (visitorTypeDisplay.textContent === 'National' || visitorTypeDisplay.textContent ===
                'مواطـــــن') {
                visitorTypeDisplay.textContent = 'National';
            } else if (visitorTypeDisplay.textContent === 'Resident' || visitorTypeDisplay.textContent ===
                'مقيـــــم') {
                visitorTypeDisplay.textContent = 'Resident';
            } else if (visitorTypeDisplay.textContent === 'Tourist' || visitorTypeDisplay.textContent ===
                'سائــــح') {
                visitorTypeDisplay.textContent = 'Tourist';
            }
            if (genderDisplay.textContent === 'Male' || genderDisplay.textContent === 'ذكر') {
                genderDisplay.textContent = 'Male';
            } else if (genderDisplay.textContent === 'Female' || genderDisplay.textContent === 'انثى') {
                genderDisplay.textContent = 'Female';
            }
            login.textContent = 'Login';
            login.style.fontSize = '35px';
            visitorType.textContent = 'Visitor Type:';
            phoneNumber.textContent = 'Mobile Number:';
            gender.textContent = 'Gender:';
            loginInfo.style.textAlign = 'left';
            contloginButton.textContent = 'Continue Login';
            loginInfo.style.fontSize = '20px';
        })
    </script>
@endsection
