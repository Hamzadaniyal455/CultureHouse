<!-- <script src="https://cdn.tutorialjinni.com/intl-tel-input/17.0.19/js/intlTelInput.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput.min.js"></script> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput.min.js"></script>
<!-- Include the required metadata -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js"></script>

<script>
    var input = document.querySelector(".phone");

    // Initialize intlTelInput
    var iti = window.intlTelInput(input, {
        separateDialCode: true,
        preferredCountries: ["sa", "jp", "pk", "no"],
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js"
    });

    let lang = localStorage.getItem('language');
    const loginError = document.getElementById('loginError');

    document.querySelector("#phoneForm").addEventListener("submit", async function(e) {
        e.preventDefault();
        if (iti.isValidNumber()) {
            var fullNumber = iti.getNumber();
            try {
                const response = await fetch("{{ route('login.submit') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]')
                            .content // For Laravel CSRF token
                    },
                    body: JSON.stringify({
                        phone: fullNumber
                    })
                });


                const result = await response.json();

                // Page redirect to information
                if (result.code == "1") {
                    window.location = "/information";
                } else {
                    if (lang === 'en') {
                        var errortext = result.message;
                    } else {
                        var errortext = "لم يتم العثور على رقم الهاتف.";
                    }

                    loginError.textContent = errortext;
                }
            } catch (error) {
                if (lang === 'en') {
                    var errortext = "An error occurred. Please try again.";
                } else {
                    var errortext = "حدث خطأ. يرجى المحاولة مرة أخرى.";
                }
                errorElement.textContent = loginError;
                console.log("An error occurred. Please try again.");
            }
        } else {
            if (lang === 'en') {
                var invalidPhone = "Invalid phone number. Please check your input.";
            } else {
                var invalidPhone = "رقم الهاتف غير صالح. يرجى التحقق من المدخلات الخاصة بك."
            }
            loginError.textContent = invalidPhone;
            console.log("Invalid phone number. Please check your input.");
        }
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const ageInput = document.getElementById('companion-age');
        // const ageIncrement = document.getElementById('age-increment');
        // const ageDecrement = document.getElementById('age-decrement');
        const maleButton = document.getElementById('male-btn');
        const femaleButton = document.getElementById('female-btn');
        const addCompanionButton = document.getElementById('add-companion-btn');

        // Increment age
        // ageIncrement.addEventListener('click', () => {
        //     const currentAge = parseInt(ageInput.value, 10);
        //     if (currentAge < 100) {
        //         ageInput.value = currentAge + 1;
        //     }
        // });

        // Decrement age
        // ageDecrement.addEventListener('click', () => {
        //     const currentAge = parseInt(ageInput.value, 10);
        //     if (currentAge > 0) {
        //         ageInput.value = currentAge - 1;
        //     }
        // });

        // Toggle gender selection
        maleButton.addEventListener('click', () => {
            maleButton.classList.add('active');
            femaleButton.classList.remove('active');
        });

        femaleButton.addEventListener('click', () => {
            femaleButton.classList.add('active');
            maleButton.classList.remove('active');
        });

        // Add companion logic
        addCompanionButton.addEventListener('click', async () => {
            const name = document.getElementById('companion-name').value;
            const year = document.getElementById('birth_year').value;
            const gender = maleButton.classList.contains('active') ? maleButton.value : femaleButton
                .value;
            const page_nam = document.getElementById('page_name').value;
            const pageType = document.getElementById('page').value;

            if (name && year) {
                if (pageType == 'login') {
                    const response = await fetch("{{ route('dependents.add') }}", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                            "X-CSRF-TOKEN": document.querySelector(
                                    'meta[name="csrf-token"]')
                                .content // For Laravel CSRF token
                        },
                        body: JSON.stringify({
                            name: name,
                            year: year,
                            gender: gender
                        })
                    });
                    const result = await response.json();
                    if (result.code == "1") {
                        window.location = "/" + page_nam;
                    } else {
                        // alert("Error: " + result.message);
                    };
                    $('#exampleModal').modal('hide');
                } else if (pageType == 'register') {
                    const response = await fetch("{{ route('dependents.add') }}", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                            "X-CSRF-TOKEN": document.querySelector(
                                    'meta[name="csrf-token"]')
                                .content // For Laravel CSRF token
                        },
                        body: JSON.stringify({
                            name: name,
                            year: year,
                            gender: gender
                        })
                    });
                    const result = await response.json();
                    if (result.code == "1") {
                        window.location = "/" + page_nam;
                    } else {
                        // alert("Error: " + result.message);
                    };
                    $('#exampleModal').modal('hide');
                };

                // const response = await fetch("{{ route('dependents.add') }}", {
                //     method: "POST",
                //     headers: {
                //         "Content-Type": "application/json",
                //         "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]')
                //             .content // For Laravel CSRF token
                //     },
                //     body: JSON.stringify({
                //         name: name,
                //         year: year,
                //         gender: gender
                //     })
                // });

                // const result = await response.json();

                // console.log("Response:", result);

                // if (result.code == "1") {
                //     window.location = "/" + page_nam;
                // } else {
                //     alert("Error: " + result.message);
                // }
                // $('#exampleModal').modal('hide');
            } else {
                // alert('Please fill in all the fields.');
            }
        });

    });

    const languageToggleButton = document.getElementById('language-toggle');

    if (languageToggleButton) {
        // Initialize the language value from localStorage or default to 'ar'
        let language = localStorage.getItem('language') || 'ar';

        // Update the button text based on the saved language
        updateButtonText(language);

        // Add click event listener
        languageToggleButton.addEventListener('click', () => {
            // Toggle the language value
            language = language === 'en' ? 'ar' : 'en';

            // Save the new value in localStorage
            localStorage.setItem('language', language);

            // Use AJAX to pass language to the controller
            $.ajax({
                url: "{{ route('change-language') }}", // Replace with your actual route
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}' // Add CSRF token for Laravel
                },
                data: {
                    language: language
                },
                success: function(response) {
                    console.log('Language changed successfully:', response);
                    // Reload the page to reflect language changes
                    window.location.reload();
                },
                error: function(xhr, status, error) {
                    console.error('Error changing language:', error);
                }
            });
        });

        // Function to update button text
        function updateButtonText(language) {
            languageToggleButton.textContent = language === 'en' ? 'عربي' : 'English';
            languageToggleButton.style.fontSize = '25px';
        }
    }
</script>
