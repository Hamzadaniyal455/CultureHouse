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
                        <!-- <tr>
                                            <td>1</td>
                                            <td>John Doe</td>
                                            <td>Male</td>
                                            <td>25</td>
                                            {{-- <td class="text-center">
                                <i class="fa fa-edit"></i>
                            </td> --}}
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>John Doe</td>
                                            <td>Male</td>
                                            <td>25</td>
                                            {{-- <td class="text-center">
                                <i class="fa fa-edit"></i>
                            </td> --}}
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>John Doe</td>
                                            <td>Male</td>
                                            <td>25</td>
                                            {{-- <td class="text-center">
                                <i class="fa fa-edit"></i>
                            </td> --}}
                                        </tr> -->
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
        const engStep = document.getElementById('eng-step');
        const araStep = document.getElementById('ara-step');
        const phoneNumberDisplay = document.getElementById('phone-number-display');

        $(document).ready(function() {
            function updateLanguageContent(language) {
                if (language === 'en') {
                    document.body.style.direction = 'ltr';
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
                    if (genderDisplay.textContent === 'Male' || genderDisplay.textContent === 'ذكـــــر') {
                        genderDisplay.textContent = 'Male';
                    } else if (genderDisplay.textContent === 'Female' || genderDisplay.textContent ===
                        'انثـــــى') {
                        genderDisplay.textContent = 'Female';
                    }

                    for (i = 0; i < genderDisplay2.length; i++) {
                        if (genderDisplay2[i].innerHTML === 'Male' || genderDisplay2[i].innerHTML ===
                            'ذكر') {
                            genderDisplay2[i].innerHTML = 'Male';
                        } else if (genderDisplay2[i].innerHTML === 'Female' || genderDisplay2[i].innerHTML ===
                            'انثى') {
                            genderDisplay2[i].innerHTML = 'Female';
                        }
                    }
                    register.textContent = 'New Registration';
                    register.style.fontSize = '35px';
                    visitorType.textContent = 'Visitor Type:';
                    phoneNumber.textContent = 'Mobile Number:';
                    gender.textContent = 'Gender:';
                    contRegButton.textContent = 'Continue Registration';
                    loginInfo.style.fontSize = '20px';
                    loginInfo.style.textAlign = 'left';
                    companionDetails.textContent = 'Companion Details';
                    companion.style.textAlign = 'left';
                    tableName.textContent = 'Name';
                    tableGender.textContent = 'Gender';
                    tableAge.textContent = 'Age';
                    engStep.style.display = 'block';
                    araStep.style.display = 'none';
                    for (i = 0; i < years.length; i++) {
                        years[i].textContent = 'years';
                    }
                } else {
                    // languageToggle.textContent = 'ENG';
                    document.body.style.direction = 'rtl';
                    document.body.style.direction = 'rtl';
                    if (visitorTypeDisplay.textContent === 'National' || visitorTypeDisplay.textContent ===
                        'مواطـــــن') {
                        visitorTypeDisplay.textContent = 'مواطـــــن';
                    } else if (visitorTypeDisplay.textContent === 'Resident' || visitorTypeDisplay.textContent ===
                        'مقيـــــم') {
                        visitorTypeDisplay.textContent = 'مقيـــــم';
                    } else if (visitorTypeDisplay.textContent === 'Tourist' || visitorTypeDisplay.textContent ===
                        'سائـــــح') {
                        visitorTypeDisplay.textContent = 'سائـــــح';
                    }
                    if (genderDisplay.textContent === 'Male') {
                        genderDisplay.textContent = 'ذكـــــر';
                    } else if (genderDisplay.textContent === 'Female') {
                        genderDisplay.textContent = 'انثـــــى';
                    }

                    console.log(genderDisplay2);
                    for (i = 0; i < genderDisplay2.length; i++) {
                        if (genderDisplay2[i].textContent === 'Male' || genderDisplay2[i].textContent ===
                            'ذكر') {
                            genderDisplay2[i].textContent = 'ذكر';
                        } else if (genderDisplay2[i].textContent === 'Female' || genderDisplay2[i].textContent ===
                            'انثى') {
                            genderDisplay2[i].textContent = 'انثى';
                        }
                    }
                    register.textContent = 'تسجيـــــل جديـــــد';
                    register.style.fontSize = '45px';
                    visitorType.textContent = 'نوع الزّائر';
                    phoneNumber.textContent = 'رقم الجوّال';
                    gender.textContent = 'الجنس';
                    contRegButton.textContent = 'مُتابعة التّسجيل';
                    companionDetails.textContent = 'معلومـــــات المٌرافقيـــــن';
                    companionDetails.style.fontSize = '30px';
                    companion.style.textAlign = 'right';
                    tableName.textContent = 'الاسم';
                    tableName.style.fontSize = '20px';
                    tableGender.textContent = 'الجنس';
                    tableGender.style.fontSize = '20px';
                    tableAge.textContent = 'العمر';
                    tableAge.style.fontSize = '20px';
                    engStep.style.display = 'none';
                    araStep.style.display = 'block';
                    loginInfo.style.textAlign = 'right';
                    loginInfo.style.fontSize = '30px';
                    for (i = 0; i < years.length; i++) {
                        years[i].textContent = 'سنة';
                    }
                }
            }

            // Retrieve language from localStorage or default to 'en'
            const savedLanguage = localStorage.getItem('language') || 'en';

            // Apply the saved language
            updateLanguageContent(savedLanguage);
        })
    </script>
@endsection
