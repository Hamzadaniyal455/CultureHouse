@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <h3 id="registration">New Registration</h3>
    <div class="steps-indicator mt-5">
        <img src="{{ asset('images/Steps2_eng.png') }}"
            alt="">
    </div>

    {{-- <form action="{{ route('registration.store') }}" id="registration-form"> --}}
    <label id="visitor-type"
        for="visitor-type">Visitor Type</label>

    <div class="visitor-type">
        <button class="type-option active"
            id="citizen"
            data-type="Citizen"
            type="button">National</button>
        <button class="type-option"
            id="resident"
            data-type="resident"
            type="button">Resident</button>
        <button class="type-option"
            id="tourist"
            data-type="tourist"
            type="button">Tourist</button>
    </div>

    <div class="form-fields"
        id="form-fields">
        <div class="mb-3">
            <label id="full-name2"
                for="full-name">Full Name</label>
            <input id="full-name"
                name="full-name"
                type="text"
                {{-- placeholder="Enter your name..." --}}
                required>
        </div>

        <div class="mb-3">
            <label id="field-id-number"
                for="id-number">
                ID Number
            </label>
            <label class="residence-number"
                id="field-iqama-number"
                for="id-number">Residence Number
            </label>

            <input id="id-number"
                name="id-number"
                type="text">
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
                for="mobile-number">Mobile Number</label>
            <input class="phone"
                id="mobile-number"
                name="mobile-number"
                type="tel"
                {{-- placeholder="Enter your mobile number" --}}
                required>
        </div>

        <div class="mt-3"
            id="field-nationality"
            style="display: none;">
            <label id="nationalityLabel"
                for="nationality">Nationality</label>
            <select id="nationality"
                name="nationality">
                <option value="">-- select one --</option>
                <option value="afghan">Afghan</option>
                <option value="albanian">Albanian</option>
                <option value="algerian">Algerian</option>
                <option value="american">American</option>
                <option value="andorran">Andorran</option>
                <option value="angolan">Angolan</option>
                <option value="antiguans">Antiguans</option>
                <option value="argentinean">Argentinean</option>
                <option value="armenian">Armenian</option>
                <option value="australian">Australian</option>
                <option value="austrian">Austrian</option>
                <option value="azerbaijani">Azerbaijani</option>
                <option value="bahamian">Bahamian</option>
                <option value="bahraini">Bahraini</option>
                <option value="bangladeshi">Bangladeshi</option>
                <option value="barbadian">Barbadian</option>
                <option value="barbudans">Barbudans</option>
                <option value="batswana">Batswana</option>
                <option value="belarusian">Belarusian</option>
                <option value="belgian">Belgian</option>
                <option value="belizean">Belizean</option>
                <option value="beninese">Beninese</option>
                <option value="bhutanese">Bhutanese</option>
                <option value="bolivian">Bolivian</option>
                <option value="bosnian">Bosnian</option>
                <option value="brazilian">Brazilian</option>
                <option value="british">British</option>
                <option value="bruneian">Bruneian</option>
                <option value="bulgarian">Bulgarian</option>
                <option value="burkinabe">Burkinabe</option>
                <option value="burmese">Burmese</option>
                <option value="burundian">Burundian</option>
                <option value="cambodian">Cambodian</option>
                <option value="cameroonian">Cameroonian</option>
                <option value="canadian">Canadian</option>
                <option value="cape verdean">Cape Verdean</option>
                <option value="central african">Central African</option>
                <option value="chadian">Chadian</option>
                <option value="chilean">Chilean</option>
                <option value="chinese">Chinese</option>
                <option value="colombian">Colombian</option>
                <option value="comoran">Comoran</option>
                <option value="congolese">Congolese</option>
                <option value="costa rican">Costa Rican</option>
                <option value="croatian">Croatian</option>
                <option value="cuban">Cuban</option>
                <option value="cypriot">Cypriot</option>
                <option value="czech">Czech</option>
                <option value="danish">Danish</option>
                <option value="djibouti">Djibouti</option>
                <option value="dominican">Dominican</option>
                <option value="dutch">Dutch</option>
                <option value="east timorese">East Timorese</option>
                <option value="ecuadorean">Ecuadorean</option>
                <option value="egyptian">Egyptian</option>
                <option value="emirian">Emirian</option>
                <option value="equatorial guinean">Equatorial Guinean</option>
                <option value="eritrean">Eritrean</option>
                <option value="estonian">Estonian</option>
                <option value="ethiopian">Ethiopian</option>
                <option value="fijian">Fijian</option>
                <option value="filipino">Filipino</option>
                <option value="finnish">Finnish</option>
                <option value="french">French</option>
                <option value="gabonese">Gabonese</option>
                <option value="gambian">Gambian</option>
                <option value="georgian">Georgian</option>
                <option value="german">German</option>
                <option value="ghanaian">Ghanaian</option>
                <option value="greek">Greek</option>
                <option value="grenadian">Grenadian</option>
                <option value="guatemalan">Guatemalan</option>
                <option value="guinea-bissauan">Guinea-Bissauan</option>
                <option value="guinean">Guinean</option>
                <option value="guyanese">Guyanese</option>
                <option value="haitian">Haitian</option>
                <option value="herzegovinian">Herzegovinian</option>
                <option value="honduran">Honduran</option>
                <option value="hungarian">Hungarian</option>
                <option value="icelander">Icelander</option>
                <option value="indian">Indian</option>
                <option value="indonesian">Indonesian</option>
                <option value="iranian">Iranian</option>
                <option value="iraqi">Iraqi</option>
                <option value="irish">Irish</option>
                <option value="israeli">Israeli</option>
                <option value="italian">Italian</option>
                <option value="ivorian">Ivorian</option>
                <option value="jamaican">Jamaican</option>
                <option value="japanese">Japanese</option>
                <option value="jordanian">Jordanian</option>
                <option value="kazakhstani">Kazakhstani</option>
                <option value="kenyan">Kenyan</option>
                <option value="kittian and nevisian">Kittian and Nevisian</option>
                <option value="kuwaiti">Kuwaiti</option>
                <option value="kyrgyz">Kyrgyz</option>
                <option value="laotian">Laotian</option>
                <option value="latvian">Latvian</option>
                <option value="lebanese">Lebanese</option>
                <option value="liberian">Liberian</option>
                <option value="libyan">Libyan</option>
                <option value="liechtensteiner">Liechtensteiner</option>
                <option value="lithuanian">Lithuanian</option>
                <option value="luxembourger">Luxembourger</option>
                <option value="macedonian">Macedonian</option>
                <option value="malagasy">Malagasy</option>
                <option value="malawian">Malawian</option>
                <option value="malaysian">Malaysian</option>
                <option value="maldivan">Maldivan</option>
                <option value="malian">Malian</option>
                <option value="maltese">Maltese</option>
                <option value="marshallese">Marshallese</option>
                <option value="mauritanian">Mauritanian</option>
                <option value="mauritian">Mauritian</option>
                <option value="mexican">Mexican</option>
                <option value="micronesian">Micronesian</option>
                <option value="moldovan">Moldovan</option>
                <option value="monacan">Monacan</option>
                <option value="mongolian">Mongolian</option>
                <option value="moroccan">Moroccan</option>
                <option value="mosotho">Mosotho</option>
                <option value="motswana">Motswana</option>
                <option value="mozambican">Mozambican</option>
                <option value="namibian">Namibian</option>
                <option value="nauruan">Nauruan</option>
                <option value="nepalese">Nepalese</option>
                <option value="new zealander">New Zealander</option>
                <option value="ni-vanuatu">Ni-Vanuatu</option>
                <option value="nicaraguan">Nicaraguan</option>
                <option value="nigerien">Nigerien</option>
                <option value="north korean">North Korean</option>
                <option value="northern irish">Northern Irish</option>
                <option value="norwegian">Norwegian</option>
                <option value="omani">Omani</option>
                <option value="pakistani">Pakistani</option>
                <option value="palauan">Palauan</option>
                <option value="panamanian">Panamanian</option>
                <option value="papua new guinean">Papua New Guinean</option>
                <option value="paraguayan">Paraguayan</option>
                <option value="peruvian">Peruvian</option>
                <option value="polish">Polish</option>
                <option value="portuguese">Portuguese</option>
                <option value="qatari">Qatari</option>
                <option value="romanian">Romanian</option>
                <option value="russian">Russian</option>
                <option value="rwandan">Rwandan</option>
                <option value="saint lucian">Saint Lucian</option>
                <option value="salvadoran">Salvadoran</option>
                <option value="samoan">Samoan</option>
                <option value="san marinese">San Marinese</option>
                <option value="sao tomean">Sao Tomean</option>
                <option value="saudi"
                    selected>Saudi</option>
                <option value="scottish">Scottish</option>
                <option value="senegalese">Senegalese</option>
                <option value="serbian">Serbian</option>
                <option value="seychellois">Seychellois</option>
                <option value="sierra leonean">Sierra Leonean</option>
                <option value="singaporean">Singaporean</option>
                <option value="slovakian">Slovakian</option>
                <option value="slovenian">Slovenian</option>
                <option value="solomon islander">Solomon Islander</option>
                <option value="somali">Somali</option>
                <option value="south african">South African</option>
                <option value="south korean">South Korean</option>
                <option value="spanish">Spanish</option>
                <option value="sri lankan">Sri Lankan</option>
                <option value="sudanese">Sudanese</option>
                <option value="surinamer">Surinamer</option>
                <option value="swazi">Swazi</option>
                <option value="swedish">Swedish</option>
                <option value="swiss">Swiss</option>
                <option value="syrian">Syrian</option>
                <option value="taiwanese">Taiwanese</option>
                <option value="tajik">Tajik</option>
                <option value="tanzanian">Tanzanian</option>
                <option value="thai">Thai</option>
                <option value="togolese">Togolese</option>
                <option value="tongan">Tongan</option>
                <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
                <option value="tunisian">Tunisian</option>
                <option value="turkish">Turkish</option>
                <option value="tuvaluan">Tuvaluan</option>
                <option value="ugandan">Ugandan</option>
                <option value="ukrainian">Ukrainian</option>
                <option value="uruguayan">Uruguayan</option>
                <option value="uzbekistani">Uzbekistani</option>
                <option value="venezuelan">Venezuelan</option>
                <option value="vietnamese">Vietnamese</option>
                <option value="welsh">Welsh</option>
                <option value="yemenite">Yemenite</option>
                <option value="zambian">Zambian</option>
                <option value="zimbabwean">Zimbabwean</option>
            </select>

            <select id="nationality-arabic"
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
                <option value="saudi">سعودي</option>
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
                for="gender">Gender</label>
            <div class="gender">
                <button class="gender-option active"
                    id="male"
                    data-gender="Male"
                    type="button">Male</button>
                <button class="gender-option"
                    id="female"
                    data-gender="Female"
                    type="button">Female</button>
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
            onclick="handleSubmit(event)">Continue Registration</button>
    </div>
    {{-- </form> --}}

    <script>
        async function handleSubmit(event) {
            event.preventDefault();
            const name = document.getElementById('full-name').value;
            const id_number = document.getElementById('id-number').value;
            const nationality = document.getElementById('nationality').value;
            const gender = document.querySelector('.gender-option.active').getAttribute('data-gender');
            const type = document.querySelector('.type-option.active').getAttribute('data-type');

            if (!iti.isValidNumber()) {
                alert("Please enter a valid phone number.");
                return;
            }



            if (name && id_number && nationality && gender) {

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
                console.log(check_registration);
                if (check_registration.code == "1") {
                    alert(check_registration.message);
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
                    alert("Error: " + result.message);
                }
            } else {
                alert('Please fill in all fields!');
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            const typeButtons = document.querySelectorAll('.type-option');
            const idField = document.getElementById('field-id-number');
            const iqamaField = document.getElementById('field-iqama-number');
            // const passportField = document.getElementById('field-passport-number');
            const nationalityField = document.getElementById('field-nationality');
            const nationality = document.getElementById('nationality');
            const nationalityArabic = document.getElementById('nationality-arabic');


            typeButtons.forEach(button => {
                iqamaField.style.display = 'none';
                button.addEventListener('click', () => {
                    // Reset active class
                    typeButtons.forEach(btn => btn.classList.remove('active'));
                    button.classList.add('active');

                    const type = button.getAttribute('data-type');
                    if (type === 'Citizen') {
                        idField.style.display = 'block';
                        iqamaField.style.display = 'none';
                        // passportField.style.display = 'none';
                        nationalityField.style.display = 'none';
                    } else if (type === 'resident') {
                        idField.style.display = 'none';
                        iqamaField.style.display = 'block';
                        $(document).ready(function() {
                            function updateLanguageContent(language) {
                                if (language === 'en') {
                                    iqamaField.textContent = 'Residence Number';
                                    nationality.style.display = 'block';
                                    nationalityArabic.style.display = 'none';
                                    nationalityField.style.display = 'block';
                                    // nationalityField.textContent = 'Nationality';
                                } else {
                                    iqamaField.textContent = 'رقم الإقامة';
                                    nationality.style.display = 'none';
                                    nationalityArabic.style.display = 'block';
                                    nationalityField.style.display = 'block';
                                    // nationalityField.textContent = 'الجنسية';
                                    // nationalityField.style.display = 'block';
                                }
                            }
                            const savedLanguage = localStorage.getItem('language') || 'en';

                            // Apply the saved language
                            updateLanguageContent(savedLanguage);
                        });


                        // passportField.style.display = 'none';
                    } else if (type === 'tourist') {
                        idField.style.display = 'block';
                        iqamaField.style.display = 'none';
                        // $(document).ready(function() {
                        //     function updateLanguageContent(language) {
                        //         if (language === 'en') {
                        //             nationalityField.textContent = 'Nationality';
                        //         } else {
                        //             nationalityField.textContent = 'الجنسية';
                        //         }
                        //     }
                        //     const savedLanguage = localStorage.getItem('language') || 'en';

                        //     // Apply the saved language
                        //     updateLanguageContent(savedLanguage);
                        // });
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

        // Translation
        const registration = document.getElementById('registration');
        const visitorType = document.getElementById('visitor-type');
        const citizen = document.getElementById('citizen');
        const resident = document.getElementById('resident');
        const tourist = document.getElementById('tourist');
        const fullName = document.getElementById('full-name2');
        const idNumber = document.getElementById('field-id-number');
        const residenceNumber = document.getElementsByClassName('field-iqama-number');
        const mobileNumber = document.getElementById('mobile');
        const nationalityLabel = document.getElementById('nationalityLabel');
        const gender = document.getElementById('gender');
        const male = document.getElementById('male');
        const female = document.getElementById('female');
        const contReg = document.getElementById('submit-button');
        const formFields = document.getElementById('form-fields');


        $(document).ready(function() {
            function updateLanguageContent(language) {
                if (language === 'en') {
                    document.body.style.direction = 'ltr';
                    registration.textContent = 'New Registration';
                    visitorType.textContent = 'Type of Visitor';
                    citizen.textContent = 'Citizen';
                    resident.textContent = 'Resident';
                    tourist.textContent = 'Tourist';
                    fullName.textContent = 'Full Name';
                    idNumber.textContent = 'ID Number';
                    residenceNumber.textContent = 'Residence Number';
                    mobileNumber.textContent = 'Mobile Number';
                    nationalityLabel.textContent = 'Nationality';
                    gender.textContent = 'Gender';
                    male.textContent = 'Male';
                    female.textContent = 'Female';
                    contReg.textContent = 'Continue Registration';
                    // text align left
                    formFields.style.textAlign = 'left';
                    console.log('Language is English');

                } else {
                    document.body.style.direction = 'rtl';
                    registration.textContent = 'تسجيل جديد';
                    visitorType.textContent = 'نوع الزائر';
                    citizen.textContent = 'مواطن';
                    resident.textContent = 'مقيم';
                    tourist.textContent = 'سائح';
                    fullName.textContent = 'الاسم الكامل';
                    idNumber.textContent = 'رقم الهوية';
                    residenceNumber.textContent = 'رقم الإقامة';
                    mobileNumber.textContent = 'رقم الجوال';
                    nationalityLabel.textContent = 'الجنسية';
                    gender.textContent = 'الجنس';
                    male.textContent = 'ذكر';
                    female.textContent = 'انثى';
                    contReg.textContent = 'متابعة التسجيل';
                    // text align right
                    formFields.style.textAlign = 'right';
                    document.getElementById('male').setAttribute('data-gender','ذكر')
                    document.getElementById('female').setAttribute('data-gender','انثى')

                    console.log('Language is Arabic');
                }
            }

            // Retrieve language from localStorage or default to 'en'
            const savedLanguage = localStorage.getItem('language') || 'en';

            // Apply the saved language
            updateLanguageContent(savedLanguage);
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

        div.iti.iti--allow-dropdown.iti--separate-dial-code {
            border: none !important;
            width: 600px ! important;
            /* font-size: 20px; */
        }

        p {
            margin-bottom: 0px !important;
        }
    </style>
@endsection
