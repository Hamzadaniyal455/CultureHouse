@extends('layouts.arabic')

@section('title', 'Home Page')

@section('content')
    <div>
        <div class="steps-indicator mt-5">
            <img src="{{ asset('images/Steps (1).png') }}"
                alt="">
        </div>
        <h3 class="mt-5 mb-5"
            id="register">تسجيـــــل جديـــــد</h3>

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
                    <p>لا توجد تفاصيل متاحة.</p>
                </div>
            @endif
        </div>

        <div id="companion">
            <h4 id="companion-details">
                معلومـــــات المٌرافقيـــــن
            </h4>
            <div>
                <?php $i = 0; ?>
                <table class="table">
                    <thead class="thead-dark border">
                        <tr>
                            <th>#</th>
                            <th id="tableName">الاسم</th>
                            <th id="tableGender">الجنس</th>
                            <th id="tableAge">العمر</th>
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
                                            سنة
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="4">لم يتم العثور على معالين.</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>

        <div class="tw-center mt-5">
            <a href="{{ route('reg_successful') }}">
                <button class="action-button-black"
                    id="cont-register-button">مُتابعة التّسجيل</button>
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
            register.style.fontSize = '45px';
            companionDetails.style.fontSize = '30px';
            companion.style.textAlign = 'right';
            tableName.style.fontSize = '20px';
            tableGender.style.fontSize = '20px';
            tableAge.style.fontSize = '20px';
            loginInfo.style.textAlign = 'right';
            loginInfo.style.fontSize = '30px';
        })
    </script>
@endsection
