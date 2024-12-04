<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token"
        content="{{ csrf_token() }}">
    <title>@yield('title', 'Default Title')</title>
    <!-- Include your stylesheets -->
    <link href="{{ asset('css/style.css') }}"
        rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}"
        rel="stylesheet">
    <link href="{{ asset('css/margins.css') }}"
        rel="stylesheet">
    <link href="{{ asset('css/padding.css') }}"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        rel="stylesheet"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />

    <link href="https://cdn.tutorialjinni.com/intl-tel-input/17.0.19/css/intlTelInput.css"
        rel="stylesheet" />

        <link href="{{ asset('fonts/Lancea.otf') }}"
        rel="preload" as="font" type="font/otf" crossorigin="anonymous">

    <script src={{ asset('js/sweetalert.js') }}></script>

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"></script> --}}

    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> --}}

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Include jQuery UI -->
    <link href="https://code.jquery.com/ui/1.13.2/themes/smoothness/jquery-ui.css"
        rel="stylesheet">
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>

    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.min.css" rel="stylesheet"/> -->
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-right">
                    @if (Route::currentRouteName() === 'home' || Route::currentRouteName() === 'change-language')
                        <form action="{{ route('change-language') }}"
                            method="POST">
                            @csrf
                            <input name="language"
                                type="hidden"
                                value="ar">
                            <button class="align-self-end"  id="language-toggle"
                                type="submit">عربي</button>
                        </form>
                    @endif
                </div>
                <div class="col-md-6 tw-center">
                    <img class="logo img-fluid"
                        src="{{ asset('images/logo.png') }}"
                        alt="">
                </div>
                <div class="col-md-3"></div>
            </div>

        </div>
    </header>

    <main>
        <div class="container english" >
            @yield('content')
        </div>
    </main>

    <footer>
        <!-- Footer -->
        @include('partials.footer')
    </footer>

    <!-- Include your scripts -->
    <script defer
        src="{{ asset('js/app.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>
