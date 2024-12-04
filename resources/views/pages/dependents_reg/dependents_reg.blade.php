@extends('layouts.app')

@section('title', 'Home Page')

@section('content')

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
            // console.log(genderDisplay);
            function updateLanguageContent(language) {
                if (language === 'en') {
                    document.body.style.direction = 'ltr';
                    register.style.fontSize = '35px';
                    selectCompCont.style.fontSize = '14px';
                    selectCompStyle.classList.add('text-left');
                    textEnd.style.textAlign = 'left';
                    for (i = 0; i < gender.length; i++) {
                        if (genderDisplay[i].textContent === 'Male' || genderDisplay[i].textContent ===
                            'ذكـــــر') {
                            genderDisplay[i].textContent = 'Male';
                        } else if (genderDisplay[i].textContent === 'Female' || genderDisplay[i].textContent ===
                            'انثـــــى') {
                            genderDisplay[i].textContent = 'Female';
                        }
                    }

                    addComp2.style.textAlign = 'left';
                    modalNameAlign.style.textAlign = 'left';
                    birthYearAlign.style.textAlign = 'left';
                    comp_card.style.textAlign = 'left';
                } else {
                    document.body.style.direction = 'rtl';
                    register.textContent = 'تسجيـــــل جديـــــد';
                    register.style.fontSize = '45px';
                    selectComp.textContent = 'تسجيـــــل المُرافقِيـــــن';
                    selectComp.style.fontSize = '35px';
                    selectCompStyle.classList.add('text-right');
                    selectCompCont.textContent = 'حدد المرافقين المتواجدين معك حاليا، أو أضف مرافق جديد';
                    selectCompCont.style.fontSize = '18px';
                    // console.log('123');
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

                    // addComp.textContent = '+ اضافة مرافق';
                    // addComp2.textContent = 'اضافة مرافق';
                    // addComp2.style.textAlign = 'right';
                    // modalName.textContent = 'الاسم';
                    // modalNameAlign.style.textAlign = 'right';
                    // birthYearAlign.style.textAlign = 'right';
                    // birthYear.textContent = 'سنة الميلاد';
                    // male.textContent = 'ذكـــــر';
                    // female.textContent = 'أنثـــــى';
                    // addButton.textContent = 'إضافـــــة';
                    // cancelButton.textContent = 'إلغـــــاء';
                    // contRegButton.textContent = 'مُتابعة التّسجيل';
                    // comp_card.style.textAlign = 'right';
                    // document.getElementById('male-btn').value = 'ذكر';
                    // document.getElementById('female-btn').value = 'انثى';

                    addComp.textContent = '+ اضافة مرافق';
                    addComp.style.fontSize = '20px';
                    addComp2.textContent = 'اضافة مرافق';
                    addComp2.style.fontSize = '31px';
                    addComp2.style.textAlign = 'right';
                    modalName.textContent = 'الاسم';
                    modalName.style.fontSize = '20px';
                    modalNameAlign.style.textAlign = 'right';
                    modalNameAlign.style.fontSize = '20px';
                    birthYearAlign.style.textAlign = 'right';
                    birthYear.textContent = 'سنة الميلاد';
                    birthYear.style.fontSize = '20px';
                    male.textContent = 'ذكـــــر';
                    male.style.fontSize = '20px';
                    female.textContent = 'أنثـــــى';
                    female.style.fontSize = '20px';
                    addButton.textContent = 'إضافـــــة';
                    addButton.style.fontSize = '20px';
                    cancelButton.textContent = 'إلغـــــاء';
                    cancelButton.style.fontSize = '20px';
                    contRegButton.textContent = 'مُتابعة التّسجيل';
                    contRegButton.style.fontSize = '20px';
                    document.getElementById('male-btn').value = 'ذكر';
                    document.getElementById('female-btn').value = 'انثى';
                }
            }

            // Retrieve language from localStorage or default to 'en'
            const savedLanguage = localStorage.getItem('language') || 'en';

            // Apply the saved language
            updateLanguageContent(savedLanguage);
        })
    </script>

@endsection
