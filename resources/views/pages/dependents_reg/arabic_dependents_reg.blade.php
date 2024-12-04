@extends('layouts.arabic')

@section('title', 'Home Page')

@section('content')
    <h3 id="register">
        تسجيـــــل جديـــــد
    </h3>
    <div class="steps-indicator mt-5 mb-5">
        <img src="{{ asset('images/Steps.png') }}"
            alt="">
    </div>
    <div class="row">
        <div class="col-md-8"
            id="select-companion">
            <h3 id="select-comp">تسجيـــــل المُرافقِيـــــن</h3>
            <p id="select-comp-cont">حدد المرافقين المتواجدين معك حاليا، أو أضف مرافق جديد</p>
        </div>
        <div class="col-md-3"
            id="text-end">
            <button class="add-companion-button"
                id="add-companion-btn2"
                data-toggle="modal"
                data-target="#exampleModal"
                type="button">
                + اضافة مرافق
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <hr>
        </div>
    </div>
    <div class="companions-list mb-5"
        id="companions-list">
        @if ($dependents->isNotEmpty())
            <div class="row">
                @foreach ($dependents as $dependent)
                    <div class="col-md-3 mx-2 companion-card border p-3 col-sm-4 mb-3">
                        <div class="row">
                            <div class="col-3">
                                <i class="fa fa-user m-2"></i>
                            </div>
                            <div class="col-9 companion-name-card">
                                <p><strong>{{ $dependent->name }}</strong></p>
                            </div>
                            <div class="col-3">
                                <p class="gender">الجنس:</p>
                            </div>
                            <div class="col-3">
                                <p class="gender-display">{{ $dependent->gender }}</p>
                            </div>
                            <div class="col-2 text-end">
                                <p class="age-display">العمر:</p>
                            </div>
                            <div class="col-4 text-end">
                                <p>
                                    <span>
                                        {{ \Carbon\Carbon::parse($dependent->birth_year . '-01-01')->diff(\Carbon\Carbon::now())->format('%y') }}
                                    </span>
                                    <span>
                                        <small class="age">
                                            سنة
                                        </small>
                                    </span>
                                </p>
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
    <div class="tw-center">
        <button class="action-button-black"
            id="continue-reg-button"
            type="submit">
            مُتابعة التّسجيل
        </button>
    </div>

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
                        id="exampleModalLabel">اضافة مرافق</h5>
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
                                الاسم
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
                                value="dependents_reg">
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <label class="col-3"
                            id="birth-year2">
                            <b id="birth-year">
                                سنة الميلاد
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
                                value="Male">ذكـــــر</button>
                            <button class="btn gender-btn mx-2"
                                id="female-btn"
                                name="gender-female"
                                value="Female">أنثـــــى</button>
                        </div>
                    </div>
                </div>
                <input id="page"
                    type="hidden"
                    value="register">
                <div class="modal-footer justify-content-center">
                    <button class="btn add-btn"
                        id="add-companion-btn"
                        type="button">إضافـــــة</button>
                    <button class="btn cancel-btn"
                        id="cancel-button"
                        data-dismiss="modal"
                        type="button">إلغـــــاء</button>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        document.getElementById('continue-reg-button').addEventListener('click', async function() {
            window.location = "/information_reg";
        });
        const register = document.getElementById('register');
        const selectComp = document.getElementById('select-comp');
        const selectCompCont = document.getElementById('select-comp-cont');
        const selectCompStyle = document.getElementById('select-companion');
        const gender = document.getElementsByClassName('gender');
        const genderDisplay = document.getElementsByClassName('gender-display');
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
        const companionNameCard = document.getElementsByClassName('companion-name-card');
        const textEnd = document.getElementById('text-end');


        $(document).ready(function() {
            register.style.fontSize = '45px';
            selectComp.style.fontSize = '35px';
            selectCompStyle.classList.add('text-right');
            selectCompCont.style.fontSize = '18px';
            for (i = 0; i < gender.length; i++) {
                gender[i].textContent = "الجنس"
                age[i].textContent = 'سنة';
                ageDisplay[i].textContent = "العمر:";
                companionNameCard[i].style.textAlign = 'right';
                console.log(genderDisplay[i]);
                if (genderDisplay[i].textContent === 'Male' || genderDisplay[i].textContent ===
                    'ذكر') {
                    genderDisplay[i].textContent = 'ذكر';
                } else if (genderDisplay[i].textContent === 'Female' || genderDisplay[i].textContent ===
                    'انثى') {
                    genderDisplay[i].textContent = 'انثى';
                }
            }

            addComp.style.fontSize = '20px';
            addComp2.style.fontSize = '31px';
            addComp2.style.textAlign = 'right';
            modalName.style.fontSize = '20px';
            modalNameAlign.style.textAlign = 'right';
            modalNameAlign.style.fontSize = '20px';
            birthYearAlign.style.textAlign = 'right';
            birthYear.style.fontSize = '20px';
            male.style.fontSize = '20px';
            female.style.fontSize = '20px';
            addButton.style.fontSize = '20px';
            cancelButton.style.fontSize = '20px';
            contRegButton.style.fontSize = '20px';
            document.getElementById('male-btn').value = 'ذكر';
            document.getElementById('female-btn').value = 'انثى';
        })
    </script>

@endsection
