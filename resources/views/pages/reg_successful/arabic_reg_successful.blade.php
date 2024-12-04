@extends('layouts.arabic')

@section('title', 'Home Page')

@section('content')
    <div>
        <h1>تمّ إكمال التّسجيل بنجـــــاح</h1>
        <div class="row mt-5">
            <div class="col-md-8 text-right">
                <h4>
                    تم إكمال تسجيلك بنجاح أهلاً وسهلاً بك في بيت الثّقافة<br>
                </h4>
            </div>
            <div class="col-md-4 text-end">
                <img class="img-fluid"
                    src="{{ asset('images/profile.png') }}"
                    alt="">
            </div>
        </div>
        <div class="mt-5">
            <a class=""
                href="{{ route('home') }}">
                <button class="action-button-black">
                    <div id="return-button">
                        العودة إلى الصفحة الرئيسية
                    </div>
                </button>
            </a>
        </div>
    </div>

    <script>
        const text = document.getElementById('text');

        $(document).ready(function() {
            text.style.textAlign = 'left';
        })
    </script>
@endsection
