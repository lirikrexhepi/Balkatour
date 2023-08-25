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
const passwordError = document.querySelector('.passwordError');
const confirmPass_error = document.querySelector('.confirmPass_error');

// The function that check if the data is valid
const validate = () => {
    if (tabNumber == 0) {
        return new Promise((resolve, reject) => {
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
                        // Check the fullName input
                        if(error == 'empty name'){
                            nameValid = false;
                            nameError.innerHTML = '*Full name is required';
                            fullName.classList.add('is-invalid');
                        } else if(error == 'invalid name'){
                            nameValid = false;
                            nameError.innerHTML = '*This name is invalid';
                            fullName.classList.add('is-invalid');
                        }

                        // Check the birthday input
                        if(error == 'empty birthday'){
                            birthdayValid = false;
                            birthdayError.innerHTML = '*Birthday is requierd';
                            birthday.classList.add('is-invalid');
                        } else if(error == 'young age') {
                            birthdayValid = false;
                            birthdayError.innerHTML = '*You have to be older than 18 years old';
                            birthday.classList.add('is-invalid');
                        }

                        // Check the gender input
                        if(error == 'empty gender'){
                            genderValid = false;
                            genderError.innerHTML = '*Gender is required';
                            gender.classList.add('is-invalid');
                        }
                    });

                    if(nameValid){
                        nameError.innerHTML = '';
                        fullName.classList.remove('is-invalid');
                    }
                    if(birthdayValid){
                        birthdayError.innerHTML = '';
                        birthday.classList.remove('is-invalid');
                    }
                    if(genderValid){
                        genderError.innerHTML = '';
                        gender.classList.remove('is-invalid');
                    }

                    if(nameValid && birthdayValid && genderValid){
                        resolve(true);
                    } else{
                        resolve(false);
                    }
                }
            });
        })
    }


    // Validate the second tab
    if(tabNumber == 1){
        return new Promise ((resolve, reject) => {
            $.ajax({
                url: '../php/registerLogic.php',
                type: 'POST',
                data: {
                    action: 'secondTab',
                    email: email.value,
                    state: state.value,
                    city: city_select.value
                }, 
                success: response => {
                    response = JSON.parse(response);

                    let emailValid = true;
                    let stateValid = true;
                    let cityValid = true;

                    response.forEach(error => {
                        if(error == 'empty email'){
                            emailValid = false;
                            emailError.innerHTML = '*Email is required';
                            email.classList.add('is-invalid');
                        } else if(error == 'invalid email'){
                            emailValid = false;
                            emailError.innerHTML = '*This email is invalid';
                            email.classList.add('is-invalid');
                        } else if(error == 'email exists'){
                            emailValid = false;
                            emailError.innerHTML = '*An account is using this email';
                            email.classList.add('is-invalid');
                        }

                        if(error == 'empty state'){
                            stateValid = false;
                            stateError.innerHTML = '*State is required';
                            state.classList.add('is-invalid')
                        }

                        if(error == 'empty city'){
                            cityValid = false;
                            cityError.innerHTML = '*City is required';
                            city_select.classList.add('is-invalid');
                        }
                    });

                    if (emailValid) {
                        emailError.innerHTML = '';
                        email.classList.remove('is-invalid');
                    }
                    if (stateValid) {
                        stateError.innerHTML = '';
                        state.classList.remove('is-invalid')
                    }
                    if (cityValid) {
                        cityError.innerHTML = '';
                        city_select.classList.remove('is-invalid');
                    }

                    if (emailValid && stateValid && cityValid) {
                        resolve(true);
                    } else {
                        resolve(false);
                    }
                }
            });
        });
    }

    // Check the third tab
    if(tabNumber == 2){
        return new Promise ((resolve, reject) => {
            $.ajax({
                url: '../php/registerLogic.php',
                type: 'POST',
                data: {
                    action: 'thirdTab',
                    fullName: fullName.value,
                    birthday: birthday.value,
                    gender: gender.value,
                    email: email.value,
                    state: state.value,
                    city: city_select.value,
                    username: username.value,
                    password: password.value,
                    confirm_pass: confirm_pass.value
                },
                success: response => {
                    response = JSON.parse(response);
                    console.log(response);
                    
                    let usernameValid = true;
                    let passValid = true;
                    let con_passValid = true;

                    response.forEach(error => {
                        if (error == 'empty username'){
                            usernameValid = false;
                            usernameError.innerHTML = '*Username is required';
                            username.classList.add('is-invalid');
                        } else if (error == 'username exists'){
                            usernameValid = false;
                            usernameError.innerHTML = '*An account is using this username';
                            username.classList.add('is-invalid');
                        }

                        if (error == 'empty password'){
                            passValid = false;
                            passwordError.innerHTML = '*Password is required';
                            password.classList.add('is-invalid');
                        }

                        if (error == 'confirm pass'){
                            con_passValid = false;
                            confirmPass_error.innerHTML = '*You must confirm the password';
                            confirm_pass.classList.add('is-invalid');
                        } else if (error == "pass doesn't match"){
                            con_passValid = false;
                            confirmPass_error.innerHTML = "*Password doesn't match";
                            confirm_pass.classList.add('is-invalid');
                        }
                    });

                    if(usernameValid){
                        usernameError.innerHTML = '';
                        username.classList.remove('is-invalid');
                    }
                    if(passValid){
                        passwordError.innerHTML = '';
                        password.classList.remove('is-invalid');
                    }
                    if (con_passValid){
                        confirmPass_error.innerHTML = "";
                        confirm_pass.classList.remove('is-invalid');
                    }

                    if(usernameValid && passValid && con_passValid){
                        resolve(true);
                    } else{
                        resolve(false);
                    }
                }
            });
        });
    }
}


const nextTab = () => {
    validate().then(isValid => {
        if(!isValid){
            return false;
        }
        tabs[tabNumber].style.display = 'none';

        tabNumber++;

        if(tabNumber == tabs.length - 1){
            $.ajax({
                url: '../php/registerLogic.php',
                type: 'POST',
                data: {
                    action: 'insert',
                    fullName: fullName.value,
                    birthday: birthday.value,
                    gender: gender.value,
                    email: email.value,
                    state: state.value,
                    city: city_select.value,
                    username: username.value,
                    password: password.value,
                },
                success: response => {
                    console.log(response);
                    if (response == "Registerd") {
                        window.location.replace('./verify.php');
                    } else if (response == "Something went wrong") {
                        alert('Problems with server or internet');
                    }
                },
            });
        }

        showTab(tabNumber);

    });
}

const prevTab = () => {
    tabs[tabNumber].style.display = 'none';

    tabNumber--;

    showTab(tabNumber);
}

nextBtn.addEventListener('click', nextTab);
prevBtn.addEventListener('click', prevTab);