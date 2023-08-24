const state = document.querySelector('.state');
const city_select = document.querySelector('.city');

state.addEventListener('change', () => {
    if (state.value.length != 0) {
        $.ajax({
            url: '../php/registerLogic.php',
            type: 'POST',
            data: {
                action: 'getCities',
                state: state.value
            },
            success: response => {
                response = JSON.parse(response);

                city_select.innerHTML = "<option value=''>Select city</option>";

                response.forEach(city => {
                    let optionElement = document.createElement('option');
                    optionElement.textContent = city;
                    optionElement.value = city;
                    city_select.appendChild(optionElement);
                });
            },
            error: (xhr, status, error) => {
                console.log("AJAX Error: " + error);
            }
        });
    }
});



const tabs = document.querySelectorAll('.tab');
const nextBtn = document.querySelector('.next_btn');
const prevBtn = document.querySelector('.prev_btn');
const register_h1 = document.querySelector('.register_h1');

tabNumber = 0;

const showTab = n => {
    tabs[n].style.display = 'flex';

    if (n == 0) {
        prevBtn.style.display = 'none';
    } else {
        prevBtn.style.display = 'block';
    }

    if (n == (tabs.length - 2)) {
        nextBtn.innerHTML = 'Register';
        nextBtn.style.width = '90px';
    } else {
        nextBtn.innerHTML = 'Next';
        nextBtn.style.width = '70px';
    }

    if (n == (tabs.length - 1)) {
        nextBtn.style.display = 'none';
        prevBtn.style.display = 'none';
        register_h1.innerHTML = 'Please wait...';
    }
}

showTab(tabNumber);

// Getting the inputes
const fullName = document.querySelector('.fullName');
const birthday = document.querySelector('.birthday');
const gender = document.querySelector('.gender');
const email = document.querySelector('.email');
// state and city are declared at the top of the file
const username = document.querySelector('.username');
const password = document.querySelector('.password');
const confirm_pass = document.querySelector('.confirm_pass');

// Getting the error text
const nameError = document.querySelector('.nameError');
const birthdayError = document.querySelector('.birthdayError');
const genderError = document.querySelector('.genderError');
const emailError = document.querySelector('.emailError');
const stateError = document.querySelector('.stateError');
const cityError = document.querySelector('.cityError');
const usernameError = document.querySelector('.usernameError');
const passwordError = document.querySelector('.password');
const confirmPass_error = document.querySelector('.confirmPass_error');

// The function that check if the data is valid
const validate = () => {
    if (tabNumber == 0) {
        // return new Promise((resolve, reject) => {
            $.ajax({
                url: '../php/registerLogic.php',
                type: 'POST',
                data: {
                    action: 'firstTab',
                    fullName: fullName.value,
                    birthday: birthday.value,
                    gender: gender.value
                },
                success: response => {
                    response = JSON.parse(response);
                    let nameValid = true;
                    let birthdayValid = true;
                    let genderValid = true;
                    response.forEach(error => {
                        if(error == 'empty name'){
                            nameValid = false;
                            nameError.innerHTML = '*Name is required';
                        }
                    });
                }
            });
        // })
    }
}


const nextTab = () => {
    tabs[tabNumber].style.display = 'none';

    tabNumber++;

    showTab(tabNumber);
}

const prevTab = () => {
    tabs[tabNumber].style.display = 'none';

    tabNumber--;

    showTab(tabNumber);
}

nextBtn.addEventListener('click', nextTab);
prevBtn.addEventListener('click', prevTab);