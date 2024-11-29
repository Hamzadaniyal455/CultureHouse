@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <div>
        <h3>Registration</h3>
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
                                    <td>{{ $dependent->gender }}</td>
                                    <td>
                                        <span>
                                            {{ \Carbon\Carbon::parse($dependent->birth_year . '-01-01')->diff(\Carbon\Carbon::now())->format('%y') }}
                                        </span>
                                        <span id="years">
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
                <button class="action-button-black" id="cont-register-button">Continue Registration</button>
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
        const contRegButton = document.getElementById('cont-register-button');
        const registerButton = document.getElementById('register-button');
        const welcomeText = document.getElementById('welcome-text');
        const companionDetails = document.getElementById('companion-details');
        const companion = document.getElementById('companion');
        const tableGender = document.getElementById('tableGender');
        const tableName = document.getElementById('tableName');
        const tableAge = document.getElementById('tableAge');
        const years = document.getElementById('years');

        $(document).ready(function() {
            function updateLanguageContent(language) {
                if (language === 'en') {
                    document.body.style.direction = 'ltr';
                    visitorType.textContent = 'Visitor Type:';
                    phoneNumber.textContent = 'Mobile Number:';
                    gender.textContent = 'Gender:';
                    contRegButton.textContent = 'Continue Registration';
                    companionDetails.textContent = 'Companion Details';
                    companion.style.textAlign = 'left';
                    tableName.textContent = 'Name';
                    tableGender.textContent = 'Gender';
                    tableAge.textContent = 'Age';
                    years.textContent = 'years';
                } else {
                    // languageToggle.textContent = 'ENG';
                    document.body.style.direction = 'rtl';
                    visitorType.textContent = ' نوع الزائر';
                    phoneNumber.textContent = 'رقم الجوال';
                    gender.textContent = 'الجنس';
                    contRegButton.textContent = 'مُتابعة التّسجيل';
                    companionDetails.textContent = 'معلومـــــات المٌرافقيـــــن';
                    companion.style.textAlign = 'right';
                    tableName.textContent = 'الاسم';
                    tableGender.textContent = 'الجنس';
                    tableAge.textContent = 'العمر';
                    years.textContent = 'سنة';
                }
            }

            // Retrieve language from localStorage or default to 'en'
            const savedLanguage = localStorage.getItem('language') || 'en';

            // Apply the saved language
            updateLanguageContent(savedLanguage);
        })
    </script>
@endsection
