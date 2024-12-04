@extends('layouts.english')

@section('title', 'Home Page')

@section('content')
    <div class="width-650">
        <div class="steps-indicator">
            <img src="{{ asset('images/Steps.png') }}"
                alt="">
        </div>
        <h3 class="mt-5 mb-5"
            id="login">
            Login
        </h3>
        <div class="row place-content-center">
            <div class="col-8 text-left"
                id="select-companion">
                <h3 id="select-comp">Select Companions</h3>
                <p id="select-comp-cont">Select the companions currently with you, or add a new companion.</p>
            </div>
            <div class="col-3"
                id="text-end">
                <!-- <button class="add-companion-button">+ Add Companion</button> -->
                <button class="add-companion-button"
                    id="add-companion-btn2"
                    data-toggle="modal"
                    data-target="#exampleModal"
                    type="button">
                    + Add Companion
                </button>
            </div>
            <div class="col-12 mb-3 border-bottom-1">
            </div>
        </div>
        <form action="{{ route('dependents.submit') }}"
            method="POST">
            @csrf
            <div class="companions-list mb-5"
                id="companions-list">
                @if ($dependents->isNotEmpty())
                    <div class="row place-content-center">
                        @foreach ($dependents as $dependent)
                            <div class="col-md-3 mx-2 companion-card border p-3 col-sm-4 mb-3">
                                {{-- <div class="companion-card border p-3"> --}}
                                <div class="row">
                                    <div class="col-3">
                                        <i class="fa fa-user m-2"></i>
                                    </div>
                                    <div class="col-7 companion-name-card">
                                        <p><strong>{{ $dependent->name }}</strong></p>
                                    </div>
                                    <div class="col-2 text-end mt-2">
                                        <input name="dependents[]"
                                            type="checkbox"
                                            value="{{ $dependent->id }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        <p class="gender">Gender:</p>
                                    </div>
                                    <div class="col-3">
                                        <p class="gender-display">{{ $dependent->gender }}</p>
                                    </div>
                                    <div class="col-2 text-end">
                                        <p class="age-display">Age:</p>
                                    </div>
                                    <div class="col-4 text-end">
                                        <p>
                                            <span>
                                                {{ \Carbon\Carbon::parse($dependent->birth_year . '-01-01')->diff(\Carbon\Carbon::now())->format('%y') }}
                                            </span>
                                            <span>
                                                <small class="age">
                                                    years
                                                </small>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                                {{-- </div> --}}
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
                {{-- <button class="action-button-black"
                    id="cont-login-button"
                    id="action-button"
                    type="submit">
                    @if ($visitor)
                        Continue Login
                    @else
                        Continue Registration
                    @endif
                </button> --}}
                <button class="action-button-black"
                    id="cont-login-button"
                    type="submit">
                    Continue Login
                </button>
            </div>
        </form>

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
                                    value="Male">Male</button>
                                <button class="btn gender-btn mx-2"
                                    id="female-btn"
                                    name="gender-female"
                                    value="Female">Female</button>
                            </div>
                        </div>
                    </div>
                    <input id="page"
                        type="hidden"
                        value="login">
                    <div class="modal-footer justify-content-center">
                        <button class="btn add-btn"
                            id="add-companion-btn"
                            type="button">Add</button>
                        <button class="btn cancel-btn   "
                            id="cancel-button"
                            data-dismiss="modal"
                            type="button">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const genderDisplay = document.getElementsByClassName('gender-display');

        console.log(genderDisplay);

        $(document).ready(function() {
            document.body.style.direction = 'ltr';
            for (i = 0; i < gender.length; i++) {
                // companionNameCard[i].style.textAlign = 'left';
                if (genderDisplay[i].textContent === 'Male' || genderDisplay[i].textContent ===
                    'ذكر') {
                    genderDisplay[i].textContent = 'Male';
                } else if (genderDisplay[i].textContent === 'Female' || genderDisplay[i].textContent ===
                    'انثى') {
                    genderDisplay[i].textContent = 'Female';
                }
            }
        });
    </script>

@endsection
