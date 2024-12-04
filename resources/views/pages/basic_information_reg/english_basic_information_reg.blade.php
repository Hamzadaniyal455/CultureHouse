@extends('layouts.english')

@section('title', 'Home Page')

@section('content')
    <div>
        <div class="steps-indicator mt-5">
            <img src="{{ asset('images/Steps (1).png') }}"
                alt="">
        </div>
        <h3 class="mt-5 mb-5"
            id="register">Registration</h3>

        <div class="login-info"
            id="login-info">
            @if ($visitor)
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <p id="visitor-type">Visitor Type:</p>
                        <p id="phone-number">Phone Number: </p>
                        <p id="gender">Gender: </p>
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

        <div id="companion">
            <h4 id="companion-details">
                Companion Details
            </h4>
            <div>
                <?php $i = 0; ?>
                <table class="table">
                    <thead class="thead-dark border">
                        <tr>
                            <th>#</th>
                            <th id="tableName">Name</th>
                            <th id="tableGender">Gender</th>
                            <th id="tableAge">Age</th>
                            {{-- <th class="text-center">Action</th> --}}
                        </tr>
                    </thead>
                    <tbody class="border">
                        @if ($dependents->isNotEmpty())

                            @foreach ($dependents as $dependent)
                                <tr>
                                    <td><?php echo ++$i; ?></td>
                                    <td>{{ $dependent->name }}</td>
                                    <td class="gender-display2">{{ $dependent->gender }}</td>
                                    <td>
                                        <span>
                                            {{ \Carbon\Carbon::parse($dependent->birth_year . '-01-01')->diff(\Carbon\Carbon::now())->format('%y') }}
                                        </span>
                                        <span class="years">
                                            years
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="4">No dependents found.</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>

        <div class="tw-center mt-5">
            <a href="{{ route('reg_successful') }}">
                <button class="action-button-black"
                    id="cont-register-button">Continue Registration</button>
            </a>
        </div>
    </div>

    <script>
        // const languageToggle = document.getElementById('language-toggle');
        const register = document.getElementById('register');
        const visitorType = document.getElementById('visitor-type');
        const visitorTypeDisplay = document.getElementById('visitor-type-display');
        const phoneNumber = document.getElementById('phone-number');
        const gender = document.getElementById('gender');
        const genderDisplay = document.getElementById('gender-display');
        const genderDisplay2 = document.getElementsByClassName('gender-display2');
        const contRegButton = document.getElementById('cont-register-button');
        const registerButton = document.getElementById('register-button');
        const welcomeText = document.getElementById('welcome-text');
        const companionDetails = document.getElementById('companion-details');
        const companion = document.getElementById('companion');
        const tableGender = document.getElementById('tableGender');
        const tableName = document.getElementById('tableName');
        const tableAge = document.getElementById('tableAge');
        const years = document.getElementsByClassName('years');
        const loginInfo = document.getElementById('login-info');
        const phoneNumberDisplay = document.getElementById('phone-number-display');

        $(document).ready(function() {
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
            // if (genderDisplay.textContent === 'Male' || genderDisplay.textContent === 'ذكـــــر') {
            //     genderDisplay.textContent = 'Male';
            // } else if (genderDisplay.textContent === 'Female' || genderDisplay.textContent ===
            //     'انثـــــى') {
            //     genderDisplay.textContent = 'Female';
            // }

            for (i = 0; i < genderDisplay2.length; i++) {
                if (genderDisplay2[i].innerHTML === 'Male' || genderDisplay2[i].innerHTML ===
                    'ذكر') {
                    genderDisplay2[i].innerHTML = 'Male';
                } else if (genderDisplay2[i].innerHTML === 'Female' || genderDisplay2[i].innerHTML ===
                    'انثى') {
                    genderDisplay2[i].innerHTML = 'Female';
                }
            }
            register.style.fontSize = '35px';
            loginInfo.style.fontSize = '20px';
            loginInfo.style.textAlign = 'left';
            companion.style.textAlign = 'left';
            for (i = 0; i < years.length; i++) {
                years[i].textContent = 'years';
            }
        })
    </script>
@endsection
