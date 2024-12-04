@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <div>
        <div class="steps-indicator mt-5">
            <img id="eng-step"
                src="{{ asset('images/Steps2_eng.png') }}"
                alt="">
            <img id="ara-step"
                src="{{ asset('images/Steps2.png') }}"
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

        {{-- <div class="text-left">
            <h4>
                Companion Details
            </h4>
            <div>
                <table class="table">
                    <thead class="thead-dark border">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Age</th>
                        </tr>
                    </thead>
                    <tbody class="border">
                        <tr>
                            <td>1</td>
                            <td>John Doe</td>
                            <td>Male</td>
                            <td>25</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>John Doe</td>
                            <td>Male</td>
                            <td>25</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>John Doe</td>
                            <td>Male</td>
                            <td>25</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div> --}}

        <div class="tw-center mt-5">
            <a href="{{ route('dependents') }}">
                <button class="action-button-black"
                    id="cont-login-button">Continue Login</button>
            </a>
        </div>
    </div>

    <script>
        // const languageToggle = document.getElementById('language-toggle');
        const login = document.getElementById('login');
        const visitorType = document.getElementById('visitor-type');
        const visitorTypeDisplay = document.getElementById('visitor-type-display');
        const phoneNumber = document.getElementById('phone-number');
        const gender = document.getElementById('gender');
        const genderDisplay = document.getElementById('gender-display');
        const contloginButton = document.getElementById('cont-login-button');
        const registerButton = document.getElementById('register-button');
        const welcomeText = document.getElementById('welcome-text');
        const engStep = document.getElementById('eng-step');
        const araStep = document.getElementById('ara-step');
        const loginInfo = document.getElementById('login-info');

        $(document).ready(function() {
            function updateLanguageContent(language) {
                if (language === 'en') {
                    document.body.style.direction = 'ltr';
                    console.log(visitorTypeDisplay.textContent);
                    if (visitorTypeDisplay.textContent === 'National' || visitorTypeDisplay.textContent === 'مواطـــــن') {
                        visitorTypeDisplay.textContent = 'National';
                    } else if (visitorTypeDisplay.textContent === 'Resident' || visitorTypeDisplay.textContent === 'مقيـــــم') {
                        visitorTypeDisplay.textContent = 'Resident';
                    } else if (visitorTypeDisplay.textContent === 'Tourist' || visitorTypeDisplay.textContent === 'سائــــح') {
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
                    engStep.style.display = 'block';
                    araStep.style.display = 'none';
                    loginInfo.style.textAlign = 'left';
                    contloginButton.textContent = 'Continue Login';
                    loginInfo.style.fontSize = '20px';
                } else {
                    // languageToggle.textContent = 'ENG';
                    document.body.style.direction = 'rtl';
                    if (visitorTypeDisplay.textContent === 'National' || visitorTypeDisplay.textContent === 'مواطـــــن') {
                        visitorTypeDisplay.textContent = 'مواطـــــن';
                    } else if (visitorTypeDisplay.textContent === 'Resident' || visitorTypeDisplay.textContent === 'مقيـــــم') {
                        visitorTypeDisplay.textContent = 'مقيـــــم';
                    } else if (visitorTypeDisplay.textContent === 'Tourist' || visitorTypeDisplay.textContent === 'سائـــــح') {
                        visitorTypeDisplay.textContent = 'سائـــــح';
                    }
                    if (genderDisplay.textContent === 'Male' || genderDisplay.textContent === 'ذكـــــر') {
                        genderDisplay.textContent = 'ذكـــــر';
                    } else if (genderDisplay.textContent === 'Female' || genderDisplay.textContent === 'انثـــــى') {
                        genderDisplay.textContent = 'انثـــــى';
                    }
                    login.textContent = 'تسجيـــــل الدّخـــــول';
                    login.style.fontSize = '45px';
                    visitorType.textContent = ' نوع الزائر';
                    phoneNumber.textContent = 'رقم الجوال';
                    gender.textContent = 'الجنس';
                    engStep.style.display = 'none';
                    araStep.style.display = 'block';
                    loginInfo.style.textAlign = 'right';
                    loginInfo.style.fontSize = '30px';
                    contloginButton.textContent = 'سجِّل دخولك';
                }
            }

            // Retrieve language from localStorage or default to 'en'
            const savedLanguage = localStorage.getItem('language') || 'en';

            // Apply the saved language
            updateLanguageContent(savedLanguage);
        })
    </script>
@endsection
