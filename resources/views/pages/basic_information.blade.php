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
                        <p>Visitor Type:</p>
                        <p>Phone Number: </p>
                        <p>Gender: </p>
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
                <button class="action-button-black">Continue Login</button>
            </a>
        </div>
    </div>

    <style>
        thead > tr > th {
            background-color: #36E39B !important;
            border: 1px solid black !important;
        }

        tbody > tr > td {
            border: 1px solid black !important;
        }
    </style>
@endsection
