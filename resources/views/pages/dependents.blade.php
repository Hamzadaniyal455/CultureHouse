@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <!-- <div class="mt-"> -->
    {{-- condition to check if user is already logged in so it will show New Registratio --}}
    <h3>
        Login
    </h3>
    {{-- <h3>Login</h3> --}}
    <div class="steps-indicator mt-5 mb-5">
        <img src="{{ asset('images/Steps.png') }}"
            alt="">
    </div>
    <div class="row">
        <div class="col-md-8 text-left">
            <h3>Select Companions</h3>
            <p>Select the companions currently with you, or add a new companion.</p>
        </div>
        <div class="col-md-4 text-end">
            <!-- <button class="add-companion-button">+ Add Companion</button> -->
            <button class="add-companion-button"
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
    <form action="{{ route('dependents.submit') }}"
        method="POST">
        @csrf
        <div class="companions-list mb-5"
            id="companions-list">
            @if ($dependents->isNotEmpty())
                <div class="row">
                    @foreach ($dependents as $dependent)
                        <div class="col-md-6 col-sm-6 mb-3">
                            <div class="companion-card border p-3">
                                <div class="row">
                                    <div class="col-3">
                                        <i class="fa fa-user m-2"></i>
                                    </div>
                                    <div class="col-7">
                                        <p><strong>{{ $dependent->name }}</strong></p>
                                    </div>
                                    <div class="col-2 text-end">
                                        <input class="m-2"
                                            name="dependents[]"
                                            type="checkbox"
                                            value="{{ $dependent->id }}">
                                    </div>
                                    <div class="col-6">
                                        <p>Gender: {{ $dependent->gender }}</p>
                                    </div>
                                    <div class="col-6 text-end">
                                        <p>Age:
                                            {{ \Carbon\Carbon::parse($dependent->birth_year . '-01-01')->diff(\Carbon\Carbon::now())->format('%y years') }}
                                        </p>
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

        <div class="tw-center">
            <button class="action-button-black"
                id="action-button"
                type="submit">
                @if ($visitor)
                    Continue Login
                @else
                    Continue Registration
                @endif
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
                                name="name"
                                type="text"
                                placeholder="Enter companion name">
                                <input type="hidden" name="page_name" id="page_name" value="dependents">
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <label class="col-3 text-left"><b>
                                Birth Year
                            </b>
                        </label>
                        <!-- <input class="form-control text-center mx-2 col-9" id="companion-age" readonly> -->
                        <div class="col-9">
                            <select class="form-control mx-2" name="birth_year" id="birth_year">
                                <?php
                                    $year1 = date("Y");
                                    $endyear = date("Y")-17;
                                    for ($year = $year1; $year >= $endyear; $year--) {
                                        echo '<option value="'.$year.'">'.$year.'</option>';
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div>
                        <!-- <label for="companion-gender">Gender</label> -->
                        <div class="d-flex">
                            <button class="btn gender-btn" value="male" name="gender-male" id="male-btn">Male</button>
                            <button class="btn gender-btn" value="female" name="gender-female" id="female-btn">Female</button>
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
    </div>
@endsection
