@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <h3>New Registration</h3>
    <div class="steps-indicator mt-5">
        <img src="{{ asset('images/Steps2.png') }}"
            alt="">
    </div>

    {{-- <form action="{{ route('registration.store') }}" id="registration-form"> --}}
        <label for="visitor-type">Visitor Type</label>

        <div class="visitor-type">
            <button class="type-option active"
                data-type="National"
                type="button">National</button>
            <button class="type-option"
                data-type="resident"
                type="button">Resident</button>
            <button class="type-option"
                data-type="tourist"
                type="button">Tourist</button>
        </div>

        <div class="form-fields text-left">
            <div class="mb-3">
                <label for="full-name">Full Name</label>
                <input id="full-name"
                    name="full-name"
                    type="text"
                    placeholder="Enter your name..."
                    required>
            </div>

            <div class="mb-3"
                id="field-id-number">
                <label for="id-number">ID Number</label>
                <input id="id-number"
                    name="id-number"
                    type="text"
                    placeholder="Enter your ID number">
            </div>

            <!-- <div class="mb-3"
                id="field-iqama-number"
                style="display: none;">
                <label for="iqama-number">Iqama Number</label>
                <input id="iqama-number"
                    type="text"
                    placeholder="Enter your Iqama number">
            </div>

            <div class="mb-3"
                id="field-passport-number"
                style="display: none;">
                <label for="passport-number">Passport Number</label>
                <input id="passport-number"
                    type="text"
                    placeholder="Enter your Passport number">
            </div> -->

            <div>
                <label for="mobile-number">Mobile Number</label>
                <input class="phone"
                    id="mobile-number"
                    name="mobile-number"
                    type="tel"
                    placeholder="Enter your mobile number"
                    required>
            </div>

            <div class="mt-3"
                id="field-nationality"
                style="display: none;">
                <label for="nationality">Nationality</label>
                <select id="nationality" name="nationality">
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
                    <option value="saudi" selected>Saudi</option>
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
            </div>
        </div>

        <div class="mb-3 text-left">
            <label for="gender">Gender</label>
            <div class="gender">
                <button class="gender-option active"
                    data-gender="Male"
                    type="button">Male</button>
                <button class="gender-option"
                    data-gender="Female"
                    type="button">Female</button>
            </div>
        </div>

        <!-- <a href="{{ route('dependents_reg') }}">
            Submit
        </a> -->
        <button class="submit-button" id="submit-button" onclick="handleSubmit(event)" type="submit">Submit</button>
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
            
            

            if (name && id_number && nationality && gender && iti.isValidNumber()) {

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
            }else{
                alert('Please fill in all fields!');
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            const typeButtons = document.querySelectorAll('.type-option');
            const idField = document.getElementById('field-id-number');
            // const iqamaField = document.getElementById('field-iqama-number');
            // const passportField = document.getElementById('field-passport-number');
            const nationalityField = document.getElementById('field-nationality');

            typeButtons.forEach(button => {
                button.addEventListener('click', () => {
                    // Reset active class
                    typeButtons.forEach(btn => btn.classList.remove('active'));
                    button.classList.add('active');

                    const type = button.getAttribute('data-type');
                    if (type === 'National') {
                        // idField.style.display = 'block';
                        // iqamaField.style.display = 'none';
                        // passportField.style.display = 'none';
                        nationalityField.style.display = 'none';
                    } else if (type === 'resident') {
                        // idField.style.display = 'none';
                        // iqamaField.style.display = 'block';
                        // passportField.style.display = 'none';
                        nationalityField.style.display = 'block';
                    } else if (type === 'tourist') {
                        // idField.style.display = 'none';
                        // iqamaField.style.display = 'none';
                        // passportField.style.display = 'block';
                        nationalityField.style.display = 'block';
                    }
                });
            });

            const genderButtons = document.querySelectorAll('.gender-option');
            genderButtons.forEach(button => {
                button.addEventListener('click', () => {
                    genderButtons.forEach(btn => btn.classList.remove('active'));
                    button.classList.add('active');
                });
            });
        });
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

        a{
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
            text-align: left ! important;
            font-weight: bold;
            color: black;
        }

        .iti {
            padding: 0px !important;
        }
    </style>
@endsection
