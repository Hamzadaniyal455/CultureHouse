@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <!-- <div class="mt-"> -->
    {{-- condition to check if user is already logged in so it will show New Registratio --}}
    <h3 id="register">
        New Registration
    </h3>
    {{-- <h3>Login</h3> --}}
    <div class="steps-indicator mt-5 mb-5">
        <img src="{{ asset('images/Steps.png') }}"
            alt="">
    </div>
    <div class="row">
        <div class="col-md-8"
            id="select-companion">
            <h3 id="select-comp">Select Companions</h3>
            <p id="select-comp-cont">Select the companions currently with you, or add a new companion.</p>
        </div>
        <div class="col-md-4 text-end">
            <!-- <button class="add-companion-button">+ Add Companion</button> -->
            <button class="add-companion-button"
                id="add-companion-btn2"
                data-toggle="modal"
                data-target="#exampleModal"
                type="button">
                + Add Companion
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <hr>
        </div>
    </div>
    <!-- <form action="{{ route('dependents.submit') }}" method="POST">
                                @csrf -->
    <div class="companions-list mb-5"
        id="companions-list">
        @if ($dependents->isNotEmpty())
            <div class="row">
                @foreach ($dependents as $dependent)
                    <div class="col-md-6 col-sm-6 mb-3">
                        <div class="companion-card border p-3"
                            id="companion-card">
                            <div class="row">
                                <div class="col-3">
                                    <i class="fa fa-user m-2"></i>
                                </div>
                                <div class="col-9">
                                    <p><strong>{{ $dependent->name }}</strong></p>
                                </div>
                                {{-- <div class="col-2 text-end">
                                        <input class="m-2"
                                            name="dependents[]"
                                            type="checkbox"
                                            value="{{ $dependent->id }}">
                                    </div> --}}
                                <div class="col-3">
                                    <p class="gender">Gender:</p>
                                </div>
                                <div class="col-3">
                                    <p >
                                        {{ $dependent->gender }}
                                    </p>
                                </div>
                                {{-- <div class="col-6 text-end">
                                    <p class="age-display">Age:
                                        {{ \Carbon\Carbon::parse($dependent->birth_year . '-01-01')->diff(\Carbon\Carbon::now())->format('%y years') }}
                                    </p>
                                </div> --}}
                                <div class="col-2 text-end">
                                    <p class="age-display">Age:</p>
                                </div>
                                {{-- <div class="col-4 text-end">
                                    <p class="age">
                                        {{ \Carbon\Carbon::parse($dependent->birth_year . '-01-01')->diff(\Carbon\Carbon::now())->format('%y years') }}
                                    </p>
                                </div> --}}
                                <div class="col-4 text-end">
                                    <span>
                                        {{ \Carbon\Carbon::parse($dependent->birth_year . '-01-01')->diff(\Carbon\Carbon::now())->format('%y') }}
                                    </span>
                                    <span class="age">
                                        years
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="row">
                <p>No Compainions</p>
            </div>
        @endif
    </div>

    <!-- <a href="{{ route('information_reg') }}">
                                        <button class="action-button-black">Continue Registration</button>
                                    </a> -->
    <div class="tw-center">
        <button class="action-button-black"
            id="continue-reg-button"
            type="submit">
            Continue Registration
        </button>
    </div>
    <!-- </form> -->

    {{-- <div class="modal fade"
        id="exampleModal"
        role="dialog"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
        tabindex="-1">
        <div class="modal-dialog"
            role="document">
            <div class="modal-content modal-custom">
                <div class="modal-header row">
                    <h5 class="modal-title col-md-10 text-left"
                        id="exampleModalLabel">Add Companion</h5>
                    <div class="text-end col-md-2">
                        <button class="close no-border"
                            data-dismiss="modal"
                            type="button"
                            aria-label="Close">
                            <span aria-hidden="true">X</span>
                        </button>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="d-flex align-items-center mb-3">
                        <label class="col-3 text-left"
                            for="companion-name">
                            <b>
                                Name
                            </b>
                        </label>
                        <div class="col-9">
                            <input class="form-control mx-2"
                                id="companion-name"
                                type="text"
                                placeholder="Enter companion name">
                            <input id="page_name"
                                name="page_name"
                                type="hidden"
                                value="dependents_reg">
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <label class="col-3 text-left"><b>
                                Birth Year
                            </b>
                        </label>

                        <div class="col-9">
                            <select class="form-control mx-2"
                                id="birth_year"
                                name="birth_year">
                                <?php
                                $year1 = date('Y');
                                $endyear = date('Y') - 17;
                                for ($year = $year1; $year >= $endyear; $year--) {
                                    echo '<option value="' . $year . '">' . $year . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div>
                        <div class="d-flex">
                            <button class="btn  gender-btn"
                                id="male-btn">Male</button>
                            <button class="btn  gender-btn mx-2"
                                id="female-btn">Female</button>
                        </div>
                    </div>
                </div>
                <div class="modal-footer text-end">
                    <button class="btn btn-black"
                        id="add-companion-btn"
                        type="button">Add</button>
                    <button class="btn btn-white"
                        data-dismiss="modal"
                        type="button">Cancel</button>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="modal fade"
        id="exampleModal"
        role="dialog"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
        tabindex="-1">
        <div class="modal-dialog"
            role="document">
            <div class="modal-content modal-custom">
                <div class="modal-header row">
                    <h5 class="modal-title col-md-10"
                        id="exampleModalLabel">Add Companion</h5>
                    <div class="text-end col-md-2">
                        <button class="close no-border"
                            data-dismiss="modal"
                            type="button"
                            aria-label="Close">
                            <span aria-hidden="true">X</span>
                        </button>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="d-flex align-items-center mb-3">
                        <label class="col-3"
                            id="companion-name2"
                            for="companion-name">
                            <b id="companion-name-label">
                                Name
                            </b>
                        </label>
                        <div class="col-9">
                            <input class="form-control mx-2"
                                id="companion-name"
                                name="name"
                                type="text">
                            <input id="page_name"
                                name="page_name"
                                type="hidden"
                                value="dependents">
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <label class="col-3"
                            id="birth-year2">
                            <b id="birth-year">
                                Birth Year
                            </b>
                        </label>
                        <div class="col-9">
                            <select class="form-control mx-2"
                                id="birth_year"
                                name="birth_year">
                                <?php
                                $year1 = date('Y');
                                $endyear = date('Y') - 17;
                                for ($year = $year1; $year >= $endyear; $year--) {
                                    echo '<option value="' . $year . '">' . $year . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div>
                        <div class="d-flex">
                            <button class="btn gender-btn"
                                id="male-btn"
                                name="gender-male"
                                value="male">Male</button>
                            <button class="btn gender-btn mx-2"
                                id="female-btn"
                                name="gender-female"
                                value="female">Female</button>
                        </div>
                    </div>
                </div>
                <input id="page"
                    type="hidden"
                    value="register">
                <div class="modal-footer text-end">
                    <button class="btn btn-black"
                        id="add-companion-btn"
                        type="button">Add</button>
                    <button class="btn btn-white"
                        id="cancel-button"
                        data-dismiss="modal"
                        type="button">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        document.getElementById('continue-reg-button').addEventListener('click', async function() {
            const response = await fetch("{{ route('visit_info.reg') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]')
                        .content // For Laravel CSRF token
                },
                body: JSON.stringify({
                    name: 1
                })
            });
            const result = await response.json();
            window.location = "/information_reg";
        });


        // const languageToggle = document.getElementById('language-toggle');
        const register = document.getElementById('register');
        const selectComp = document.getElementById('select-comp');
        const selectCompCont = document.getElementById('select-comp-cont');
        const selectCompStyle = document.getElementById('select-companion');
        const gender = document.getElementsByClassName('gender');
        const contRegButton = document.getElementById('continue-reg-button');
        const addComp = document.getElementById('add-companion-btn2');
        const age = document.getElementsByClassName('age');
        const ageDisplay = document.getElementsByClassName('age-display');
        const addComp2 = document.getElementById('exampleModalLabel');
        const modalName = document.getElementById('companion-name-label')
        const birthYear = document.getElementById('birth-year');
        const modalNameAlign = document.getElementById('companion-name2')
        const birthYearAlign = document.getElementById('birth-year2');
        const male = document.getElementById('male-btn');
        const female = document.getElementById('female-btn');
        const addButton = document.getElementById('add-companion-btn');
        const cancelButton = document.getElementById('cancel-button');
        const comp_card = document.getElementById('companion-card');

        $(document).ready(function() {
            function updateLanguageContent(language) {
                if (language === 'en') {
                    document.body.style.direction = 'ltr';
                    register.textContent = 'New Registration';
                    selectComp.textContent = 'Select Dependents';
                    selectCompCont.textContent = 'Select the companions currently with you, or add a new companion';
                    selectCompStyle.classList.add('text-left');
                    for (i = 0; i < gender.length; i++) {
                        gender[i].textContent = "Gender:"
                        ageDisplay[i].textContent = "Age:";
                        // age[i].innerHTML.split(' ')[1] = 'years';
                        age[i].textContent = 'years';
                    }

                    addComp.textContent = '+ Add Companions';
                    addComp2.textContent = 'Add Companions';
                    addComp2.style.textAlign = 'left';
                    modalName.textContent = 'Name';
                    modalNameAlign.style.textAlign = 'left';
                    birthYearAlign.style.textAlign = 'left';
                    birthYear.textContent = 'Birth Year';
                    male.textContent = 'Male';
                    female.textContent = 'Female';
                    addButton.textContent = 'Add';
                    cancelButton.textContent = 'Cancel';
                    contRegButton.textContent = 'Continue Registration';
                    comp_card.style.textAlign = 'left';
                } else {
                    document.body.style.direction = 'rtl';
                    register.textContent = 'تسجيل جديد';
                    selectComp.textContent = 'تحديد المُرافقين';
                    selectCompStyle.classList.add('text-right');
                    selectCompCont.textContent = 'حدد المرافقين المتواجدين معك حاليا، أو أضف مرافق جديد';
                    for (i = 0; i < gender.length; i++) {
                        gender[i].textContent = "الجنس"
                        // let s = age[i].innerHTML.split(' ')[1] = 'سنة';
                        // age[i].textContent = age[i].innerHTML.split(' ')[0] + ' ' + s;
                        age[i].textContent = 'سنة';
                        ageDisplay[i].textContent = "العمر:";
                    }

                    addComp.textContent = '+ اضافة مرافق';
                    addComp2.textContent = 'اضافة مرافق';
                    addComp2.style.textAlign = 'right';
                    modalName.textContent = 'الاسم';
                    modalNameAlign.style.textAlign = 'right';
                    birthYearAlign.style.textAlign = 'right';
                    birthYear.textContent = 'سنة الميلاد';
                    male.textContent = 'ذكر';
                    female.textContent = 'انثى';
                    addButton.textContent = 'اضافة';
                    cancelButton.textContent = 'الغاء';
                    contRegButton.textContent = 'مُتابعة التّسجيل';
                    comp_card.style.textAlign = 'right';
                }
            }

            // Retrieve language from localStorage or default to 'en'
            const savedLanguage = localStorage.getItem('language') || 'en';

            // Apply the saved language
            updateLanguageContent(savedLanguage);
        })
    </script>

    <!-- </div> -->
@endsection
