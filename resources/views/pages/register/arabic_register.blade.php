@extends('layouts.arabic')

@section('title', 'Home Page')

@section('content')
    <div class="steps-indicator mt-5">
        <img src="{{ asset('images/Steps2.png') }}"
            alt="">
    </div>
    <h3 class="mt-5 mb-4">تسجيـــــل جديـــــد</h3>

    <p class="text-red"
        id="registerError"></p>

    {{-- <form action="{{ route('registration.store') }}" id="registration-form"> --}}
    <label id="visitor-type"
        for="visitor-type">نوع الزائر</label>

    <div class="visitor-type">
        <button class="type-option active"
            id="citizen"
            data-type="National"
            type="button">مواطـــــن</button>
        <button class="type-option"
            id="resident"
            data-type="Resident"
            type="button">مقيـــــم</button>
        <button class="type-option"
            id="tourist"
            data-type="Tourist"
            type="button">سائـــــح</button>
    </div>

    <div class="form-fields-arabic"
        id="form-fields">
        <div class="mb-3 mt-4">
            <label id="full-name2"
                for="full-name">الاسم الكامل</label>
            <input id="full-name"
                name="full-name"
                type="text"
                {{-- placeholder="Enter your name..." --}}
                required>
        </div>

        <div class="mb-3">
            <label id="field-id-number"
                for="id-number">
                رقم الهوية
            </label>
            <label class="residence-number"
                id="field-iqama-number"
                for="id-number">رقم الإقامة
            </label>

            <input id="id-number"
                name="id-number"
                type="number">
        </div>

        <!-- <div class="mb-3" id="field-iqama-number" style="display: none;">
                                                                                                                                                            <label for="iqama-number">Iqama Number</label>
                                                                                                                                                            <input id="iqama-number" type="text" placeholder="Enter your Iqama number">
                                                                                                                                                        </div>

                                                                                                                                                        <div class="mb-3" id="field-passport-number" style="display: none;">
                                                                                                                                                            <label for="passport-number">Passport Number</label>
                                                                                                                                                            <input id="passport-number" type="text" placeholder="Enter your Passport number">
                                                                                                                                                        </div> -->

        <div>
            <label id="mobile"
                for="mobile-number">رقم الجوال</label>
            <input class="phone no-border"
                id="mobile-number"
                name="mobile-number"
                type="number"
                {{-- placeholder="Enter your mobile number" --}}
                required>
        </div>

        <div class="mt-3"
            id="field-nationality"
            style="display: none;">
            <label for="nationality">الجنسية</label>

            <select id="nationality"
                name="nationality">
                <option value="">-- اختر واحدة --</option>
                <option value="afghan">أفغاني</option>
                <option value="albanian">ألباني</option>
                <option value="algerian">جزائري</option>
                <option value="american">أمريكي</option>
                <option value="andorran">أندوري</option>
                <option value="angolan">أنغولي</option>
                <option value="antiguans">أنتيغواني</option>
                <option value="argentinean">أرجنتيني</option>
                <option value="armenian">أرميني</option>
                <option value="australian">أسترالي</option>
                <option value="austrian">نمساوي</option>
                <option value="azerbaijani">أذربيجاني</option>
                <option value="bahamian">باهاماسي</option>
                <option value="bahraini">بحريني</option>
                <option value="bangladeshi">بنغلاديشي</option>
                <option value="barbadian">بربادوسي</option>
                <option value="barbudans">بربودي</option>
                <option value="batswana">بوتسواني</option>
                <option value="belarusian">بيلاروسي</option>
                <option value="belgian">بلجيكي</option>
                <option value="belizean">بليزي</option>
                <option value="beninese">بنيني</option>
                <option value="bhutanese">بوتاني</option>
                <option value="bolivian">بوليفي</option>
                <option value="bosnian">بوسني</option>
                <option value="brazilian">برازيلي</option>
                <option value="british">بريطاني</option>
                <option value="bruneian">بروني</option>
                <option value="bulgarian">بلغاري</option>
                <option value="burkinabe">بوركيني</option>
                <option value="burmese">بورمي</option>
                <option value="burundian">بوروندي</option>
                <option value="cambodian">كمبودي</option>
                <option value="cameroonian">كاميروني</option>
                <option value="canadian">كندي</option>
                <option value="cape verdean">كاب فيردي</option>
                <option value="central african">أفريقي مركزي</option>
                <option value="chadian">تشادي</option>
                <option value="chilean">تشيلي</option>
                <option value="chinese">صيني</option>
                <option value="colombian">كولومبي</option>
                <option value="comoran">قُمري</option>
                <option value="congolese">كونغولي</option>
                <option value="costa rican">كوستاريكي</option>
                <option value="croatian">كرواتي</option>
                <option value="cuban">كوبي</option>
                <option value="cypriot">قبرصي</option>
                <option value="czech">تشيكي</option>
                <option value="danish">دنماركي</option>
                <option value="djibouti">جيبوتي</option>
                <option value="dominican">دومينيكاني</option>
                <option value="dutch">هولندي</option>
                <option value="east timorese">تيموري شرقي</option>
                <option value="ecuadorean">إكوادوري</option>
                <option value="egyptian">مصري</option>
                <option value="emirian">إماراتي</option>
                <option value="equatorial guinean">غيني استوائي</option>
                <option value="eritrean">إريتري</option>
                <option value="estonian">إستوني</option>
                <option value="ethiopian">إثيوبي</option>
                <option value="fijian">فيجي</option>
                <option value="filipino">فلبيني</option>
                <option value="finnish">فنلندي</option>
                <option value="french">فرنسي</option>
                <option value="gabonese">غابوني</option>
                <option value="gambian">غامبي</option>
                <option value="georgian">جورجي</option>
                <option value="german">ألماني</option>
                <option value="ghanaian">غاني</option>
                <option value="greek">يوناني</option>
                <option value="grenadian">غرينادي</option>
                <option value="guatemalan">غواتيمالي</option>
                <option value="guinea-bissauan">غيني بيساوي</option>
                <option value="guinean">غيني</option>
                <option value="guyanese">غياني</option>
                <option value="haitian">هايتي</option>
                <option value="herzegovinian">هرزغوفي</option>
                <option value="honduran">هندوراسي</option>
                <option value="hungarian">هنغاري</option>
                <option value="icelander">آيسلندي</option>
                <option value="indian">هندي</option>
                <option value="indonesian">إندونيسي</option>
                <option value="iranian">إيراني</option>
                <option value="iraqi">عراقي</option>
                <option value="irish">أيرلندي</option>
                <option value="israeli">إسرائيلي</option>
                <option value="italian">إيطالي</option>
                <option value="ivorian">إيفواري</option>
                <option value="jamaican">جامايكي</option>
                <option value="japanese">ياباني</option>
                <option value="jordanian">أردني</option>
                <option value="kazakhstani">كازاخستاني</option>
                <option value="kenyan">كيني</option>
                <option value="kittian and nevisian">كيتسي ونيفيسي</option>
                <option value="kuwaiti">كويتي</option>
                <option value="kyrgyz">قيرغيزي</option>
                <option value="laotian">لاوسي</option>
                <option value="latvian">لاتفي</option>
                <option value="lebanese">لبناني</option>
                <option value="liberian">ليبيري</option>
                <option value="libyan">ليبي</option>
                <option value="liechtensteiner">ليختنشتايني</option>
                <option value="lithuanian">ليتواني</option>
                <option value="luxembourger">لوكسمبورغي</option>
                <option value="macedonian">مقدوني</option>
                <option value="malagasy">مدغشقري</option>
                <option value="malawian">مالاوي</option>
                <option value="malaysian">ماليزي</option>
                <option value="maldivan">مالديفي</option>
                <option value="malian">مالي</option>
                <option value="maltese">مالطي</option>
                <option value="marshallese">مارشالي</option>
                <option value="mauritanian">موريتاني</option>
                <option value="mauritian">موريشيوسي</option>
                <option value="mexican">مكسيكي</option>
                <option value="micronesian">ميكرونيسي</option>
                <option value="moldovan">مولدوفي</option>
                <option value="monacan">موناكي</option>
                <option value="mongolian">منغولي</option>
                <option value="moroccan">مغربي</option>
                <option value="mosotho">ليسوتي</option>
                <option value="motswana">بوتسواني</option>
                <option value="mozambican">موزمبيقي</option>
                <option value="namibian">ناميبي</option>
                <option value="nauruan">نوري</option>
                <option value="nepalese">نيبالي</option>
                <option value="new zealander">نيوزيلندي</option>
                <option value="ni-vanuatu">ني فانواتو</option>
                <option value="nicaraguan">نيكاراغوي</option>
                <option value="nigerien">نيجيري</option>
                <option value="north korean">كوري شمالي</option>
                <option value="northern irish">إيرلندي شمالي</option>
                <option value="norwegian">نرويجي</option>
                <option value="omani">عماني</option>
                <option value="pakistani">باكستاني</option>
                <option value="palauan">بالاوي</option>
                <option value="palestinian">فلسطيني</option>
                <option value="panamanian">بنمي</option>
                <option value="papua new guinean">بابوا غينيا الجديدة</option>
                <option value="paraguayan">باراغوي</option>
                <option value="peruvian">بيروفي</option>
                <option value="polish">بولندي</option>
                <option value="portuguese">برتغالي</option>
                <option value="qatari">قطري</option>
                <option value="romanian">روماني</option>
                <option value="russian">روسي</option>
                <option value="rwandan">رواندي</option>
                <option value="saint lucian">سانت لوشي</option>
                <option value="salvadoran">سلفادوري</option>
                <option value="samoan">ساموي</option>
                <option value="san marinese">سان ماريني</option>
                <option value="sao tomean">ساو تومي وبرينسيبي</option>
                <option value="scottish">إسكتلندي</option>
                <option value="senegalese">سنغالي</option>
                <option value="serbian">صربي</option>
                <option value="seychellois">سيشلي</option>
                <option value="sierra leonean">سيراليوني</option>
                <option value="singaporean">سنغافوري</option>
                <option value="slovakian">سلوفاكي</option>
                <option value="slovenian">سلوفيني</option>
                <option value="solomon islander">سولوموني</option>
                <option value="somali">صومالي</option>
                <option value="south african">جنوب أفريقي</option>
                <option value="south korean">كوري جنوبي</option>
                <option value="spanish">إسباني</option>
                <option value="sri lankan">سريلانكي</option>
                <option value="sudanese">سوداني</option>
                <option value="surinamer">سورينامي</option>
                <option value="swazi">سوازي</option>
                <option value="swedish">سويدي</option>
                <option value="swiss">سويسري</option>
                <option value="syrian">سوري</option>
                <option value="taiwanese">تايواني</option>
                <option value="tajik">طاجيكي</option>
                <option value="tanzanian">تنزاني</option>
                <option value="thai">تايلاندي</option>
                <option value="togolese">توغولي</option>
                <option value="tongan">تونغي</option>
                <option value="trinidadian or tobagonian">ترينيدادي أو توباغوني</option>
                <option value="tunisian">تونسي</option>
                <option value="turkish">تركي</option>
                <option value="tuvaluan">توفالوي</option>
                <option value="ugandan">أوغندي</option>
                <option value="ukrainian">أوكراني</option>
                <option value="uruguayan">أوروغوياني</option>
                <option value="uzbekistani">أوزبكستاني</option>
                <option value="venezuelan">فنزويلي</option>
                <option value="vietnamese">فيتنامي</option>
                <option value="welsh">ويلزي</option>
                <option value="yemenite">يمني</option>
                <option value="zambian">زامبي</option>
                <option value="zimbabwean">زيمبابوي</option>
            </select>

        </div>

        <div class="mt-3">
            <label id="gender"
                for="gender">الجنس</label>
            <div class="gender">
                <button class="gender-option active"
                    id="male"
                    data-gender="Male"
                    type="button">ذكـــــر</button>
                <button class="gender-option"
                    id="female"
                    data-gender="Female"
                    type="button">أنثـــــى</button>
            </div>
        </div>
    </div>

    {{-- <a class="action-button-black" id="submit-button" href="{{ route('dependents_reg') }}">
        Continue Registration
    </a> --}}
    <div class="tw-center mt-3">
        <button class="action-button-black"
            id="submit-button"
            type="submit"
            onclick="handleSubmit(event)">
            متابعة التسجيل
        </button>
    </div>
    {{-- </form> --}}

    <script>
        // let lang = localStorage.getItem('language');
        const registerError = document.getElementById('registerError');
        async function handleSubmit(event) {
            event.preventDefault();
            const name = document.getElementById('full-name').value;
            const id_number = document.getElementById('id-number').value;
            const nationality = document.getElementById('nationality').value;
            const gender = document.querySelector('.gender-option.active').getAttribute('data-gender');
            const type = document.querySelector('.type-option.active').getAttribute('data-type');

            if (!iti.isValidNumber()) {
                // alert("Please enter a valid phone number.");
                if (lang == 'en') {
                    var invalidPhone = "Please enter a valid phone number.";
                } else {
                    var invalidPhone = "يرجى إدخال رقم هاتف صالح.";
                }
                registerError.textContent = invalidPhone;
                return;
            }


            if (name && id_number && (nationality || type == 'National') && gender) {

                var fullNumber = iti.getNumber();
                const request = await fetch("{{ route('register.check') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify({
                        phone: fullNumber
                    })
                });
                const check_registration = await request.json();
                // console.log(check_registration);
                if (check_registration.code == "1") {
                    // alert(check_registration.message);

                    return;
                }

                const response = await fetch("{{ route('register.submit') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify({
                        name: name,
                        id_number: id_number,
                        nationality: nationality,
                        gender: gender,
                        type: type,
                        phone: fullNumber
                    })
                });

                const result = await response.json();

                if (result.code == "1") {
                    console.log(result);
                    window.location = "/dependents_reg";
                } else {
                    // alert("Error: " + result.message);
                    Swal.fire({
                        position: "top-end",
                        title: result.message,
                        showConfirmButton: false,
                        timer: 3000
                    });
                }
            } else {
                // alert('Please fill in all fields!');
                Swal.fire({
                    position: "top-end",
                    title: "Please fill in all fields!",
                    showConfirmButton: false,
                    timer: 3000
                });
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            const typeButtons = document.querySelectorAll('.type-option');
            const idField = document.getElementById('field-id-number');
            const iqamaField = document.getElementById('field-iqama-number');
            const nationalityField = document.getElementById('field-nationality');
            const nationality = document.getElementById('nationality');


            typeButtons.forEach(button => {
                iqamaField.style.display = 'none';
                button.addEventListener('click', () => {
                    // Reset active class
                    typeButtons.forEach(btn => btn.classList.remove('active'));
                    button.classList.add('active');

                    const type = button.getAttribute('data-type');
                    if (type === 'National') {
                        idField.style.display = 'block';
                        iqamaField.style.display = 'none';
                        nationalityField.style.display = 'none';
                    } else if (type === 'Resident') {
                        idField.style.display = 'none';
                        iqamaField.style.display = 'block';
                        $(document).ready(function() {
                            nationalityField.style.display = 'block';
                            // nationalityField.style.display = 'block';
                        });
                    } else if (type === 'Tourist') {
                        idField.style.display = 'block';
                        iqamaField.style.display = 'none';
                        nationalityField.style.display = 'block';
                    }
                });
            });

            const genderButtons = document.querySelectorAll('.gender-option');
            genderButtons.forEach(button => {
                button.addEventListener('click', () => {
                    genderButtons.forEach(btn => btn.classList.remove(
                        'active'));
                    button.classList.add('active');
                });
            });
        });

        // gender stored in arabic
        const male = document.getElementById('male');
        const female = document.getElementById('female');


        $(document).ready(function() {
            // text align right
            document.getElementById('male').setAttribute('data-gender', 'ذكر')
            document.getElementById('female').setAttribute('data-gender', 'انثى')
            console.log('Language is Arabic');
        })
    </script>
    <style>
        .form-section {
            display: none;
        }

        .form-section.active {
            display: block;
        }

        .type-option.active,
        .gender-option.active {
            background-color: #36E39B ! important;
            color: black ! important;
        }

        .type-option,
        .gender-option {
            border: 1px solid #A7A8AA;
            padding: 8px 15px;
            margin: 5px;
            border-radius: 5px;
            font-weight: bold;
            font-size: 18px;
            cursor: pointer;
            color: white;
            background-color: #A7A8AA ! important;
        }

        .type-option:hover,
        .gender-option:hover {
            background-color: #36E39B ! important;
            ;
            color: black ! important;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        select {
            width: 100%;
            padding: 10px;
            /* margin: 10px 0; */
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .submit-button {
            padding: 10px 20px;
            background-color: #36E39B;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        a {
            padding: 10px 20px;
            background-color: #36E39B;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .submit-button:hover {
            background-color: #36E39B;
        }

        label {
            font-size: 20px;
            font-weight: bold;
            color: black;
        }

        .iti {
            padding: 0px !important;
        }

        .form-fields-arabic div.iti.iti--allow-dropdown.iti--separate-dial-code {
            border: none !important;
            width: 976px ! important;
            /* font-size: 20px; */
        }

        @media only screen and (min-width: 768px) and (max-width: 820px) {
            .form-fields-arabic div.iti.iti--allow-dropdown.iti--separate-dial-code {
                border: none !important;
                width: 600px ! important;
                /* font-size: 20px; */
            }
        }

        p {
            margin-bottom: 0px !important;
        }
    </style>
@endsection
