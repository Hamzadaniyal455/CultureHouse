@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
<!-- <div class="mt-"> -->
<h3>Login</h3>
<div class="steps-indicator mt-5 mb-5">
    <img src="{{ asset('images/Steps.png') }}" alt="">
</div>
<div class="row">
    <div class="col-md-8 text-left">
        <h3>Select Companions</h3>
        <p>Select the companions currently with you, or add a new companion.</p>
    </div>
    <div class="col-md-4 text-end">
        <!-- <button class="add-companion-button">+ Add Companion</button> -->
        <button type="button" class="add-companion-button" data-toggle="modal" data-target="#exampleModal">
            + Add Companion
        </button>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <hr>
    </div>
</div>
<form action="{{ route('dependents.submit') }}" method="POST">
    @csrf
    <div id="companions-list" class="companions-list mb-5">
        @if ($dependents)
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
                                <input class="m-2" type="checkbox" name="dependents[]" value="{{ $dependent->id }}">
                            </div>
                            <div class="col-6">
                                <p>Gender: {{ $dependent->gender }}</p>
                            </div>
                            <div class="col-6 text-end">
                                <p>Age: {{ \Carbon\Carbon::parse($dependent->birth_year.'-01-01')->diff(\Carbon\Carbon::now())->format('%y years'); }}</p>
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
        <!-- <a href="{{ route('login_successful') }}"> -->
            <button class="action-button-black" type="submit">Continue Login</button>
        <!-- </a> -->
    </div>
</form>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-custom">
            <div class="modal-header row">
                <h5 class="modal-title col-md-10 text-left" id="exampleModalLabel">Add Companion</h5>
                <div class="text-end col-md-2">
                    <button type="button" class="close no-border" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">X</span>
                    </button>
                </div>
            </div>
            <div class="modal-body">
                <div class="d-flex align-items-center mb-3">
                    <label class="col-3 text-left" for="companion-name">
                        <b>
                            Name
                        </b>
                    </label>
                    <div class="col-9">
                        <input type="text" class="form-control mx-2" id="companion-name" placeholder="Enter companion name">
                    </div>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <label class="col-3 text-left"><b>
                            Birth Year
                        </b>
                    </label>
                    <input type="month" class="form-control text-center mx-2 col-9" id="companion-age">
                </div>
                <div>
                    <!-- <label for="companion-gender">Gender</label> -->
                    <div class="d-flex">
                        <button id="male-btn" class="btn  gender-btn">Male</button>
                        <button id="female-btn" class="btn  gender-btn">Female</button>
                    </div>
                </div>
            </div>
            <div class="modal-footer text-end">
                <button type="button" class="btn btn-black" id="add-companion-btn">Add</button>
                <button type="button" class="btn btn-white" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<!-- </div> -->
@endsection