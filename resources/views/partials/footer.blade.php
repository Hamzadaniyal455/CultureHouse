<!-- <script src="https://cdn.tutorialjinni.com/intl-tel-input/17.0.19/js/intlTelInput.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput.min.js"></script> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput.min.js"></script>
<!-- Include the required metadata -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js"></script>

<script>
    var input = document.querySelector("#phone");

    // Initialize intlTelInput
    var iti = window.intlTelInput(input, {
        separateDialCode: true,
        preferredCountries: ["sa", "jp", "pk", "no"],
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js"
    });

    document.querySelector("#phoneForm").addEventListener("submit", async function(e) {
        e.preventDefault();
        if (iti.isValidNumber()) {
            var fullNumber = iti.getNumber();
            try {
                const response = await fetch("{{ route('login.submit') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content // For Laravel CSRF token
                    },
                    body: JSON.stringify({
                        phone: fullNumber
                    })
                });

                const result = await response.json();

                // console.log("Response:", result);

                if (result.code == "1") {
                    window.location = "/information";
                } else {
                    alert("Error: " + result.message);
                }
            } catch (error) {
                // console.error("AJAX error:", error);
                alert("An error occurred. Please try again.");
            }
        } else {
            alert("Invalid phone number. Please check your input.");
            
        }
    });
</script>

<script>
    // document.addEventListener('DOMContentLoaded', () => {
    //     const addCompanionButton = document.getElementById('add-companion');
    //     const companionForm = document.getElementById('companion-form');
    //     const saveCompanionButton = document.getElementById('save-companion');
    //     const companionsList = document.getElementById('companions-list');

    //     // Show the companion form
    //     addCompanionButton.addEventListener('click', () => {
    //         companionForm.classList.toggle('hidden');
    //     });

    //     // Save the companion and add it to the list
    //     saveCompanionButton.addEventListener('click', () => {
    //         const name = document.getElementById('companion-name').value;
    //         const gender = document.getElementById('companion-gender').value;
    //         const age = document.getElementById('companion-age').value;

    //         if (name && gender && age) {
    //             const companionCard = document.createElement('div');
    //             companionCard.classList.add('companion-card');
    //             companionCard.innerHTML = `
    //     <p><strong>${name}</strong></p>
    //     <p>Gender: ${gender}</p>
    //     <p>Age: ${age} years</p>
    //   `;
    //             companionsList.appendChild(companionCard);

    //             // Clear form inputs
    //             document.getElementById('companion-name').value = '';
    //             document.getElementById('companion-gender').value = 'Male';
    //             document.getElementById('companion-age').value = '';

    //             // Hide the form
    //             companionForm.classList.add('hidden');
    //         } else {
    //             alert('Please fill in all fields!');
    //         }
    //     });
    // });

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
        addCompanionButton.addEventListener('click', () => {
            const name = document.getElementById('companion-name').value;
            const age = ageInput.value;
            const gender = maleButton.classList.contains('active') ? 'Male' : 'Female';

            if (name && age) {
                alert(`Companion added: \nName: ${name} \nAge: ${age} \nGender: ${gender}`);
                $('#exampleModal').modal('hide');
            } else {
                alert('Please fill in all the fields.');
            }
        });
    });
</script>