@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <div>
        <h3>Login</h3>
        <div class="steps-indicator mt-5">
            <img src="{{ asset('images/Steps2.png') }}"
                alt="">
        </div>

        <div class="login-info">
            @if ($visitor)
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <p id="visitor-type">Visitor Type:</p>
                        <p id="phone-number">Mobile Number:</p>
                        <p id="gender">Gender:</p>
                    </div>
                    <div class="col-md-2">
                        <div id="visitor-type-display">{{ $visitor->type }}</div>
                        <div id="phone-number-display">{{ $visitor->phone }}</div>
                        <div id="gender-display">{{ $visitor->gender }}</div>
                    </div>
                    <div class="col-md-4"></div>
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

    <style>
        thead>tr>th {
            background-color: #36E39B !important;
            border: 1px solid black !important;
        }

        tbody>tr>td {
            border: 1px solid black !important;
        }
    </style>

    <script>
        // const languageToggle = document.getElementById('language-toggle');
        const visitorType = document.getElementById('visitor-type');
        const phoneNumber = document.getElementById('phone-number');
        const gender = document.getElementById('gender');
        const contloginButton = document.getElementById('cont-login-button');
        const registerButton = document.getElementById('register-button');
        const welcomeText = document.getElementById('welcome-text');

        $(document).ready(function() {
            function updateLanguageContent(language) {
                if (language === 'en') {
                    document.body.style.direction = 'ltr';
                    visitorType.textContent = 'Visitor Type:';
                    phoneNumber.textContent = 'Mobile Number:';
                    gender.textContent = 'Gender:';
                    contloginButton.textContent = 'Continue Login';
                } else {
                    // languageToggle.textContent = 'ENG';
                    document.body.style.direction = 'rtl';
                    visitorType.textContent = ' نوع الزائر';
                    phoneNumber.textContent = 'رقم الجوال';
                    gender.textContent = 'الجنس';
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
