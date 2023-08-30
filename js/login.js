const username = document.querySelector('.username');
const password = document.querySelector('.password');
const userErr = document.querySelector('.usernameError');
const passErr = document.querySelector('.passwordError');
const login_btn = document.querySelector('.login');
const popupContainer = document.querySelector('.popup-inner');

const logIn = () =>{
    if(username.value.length == 0 && password.value.length == 0){
        userErr.innerText = '*Username required';
        passErr.innerText = '*Password required';

        username.classList.add('is-invalid');
        password.classList.add('is-invalid');

    } else{
        if (username.value.length == 0){
            userErr.innerText = '*Username required';
            passErr.innerText = '';

            username.classList.add('is-invalid');
            password.classList.remove('is-invalid');
        } else if (password.value.length == 0){
            userErr.innerText = '';
            passErr.innerText = '*Password required';

            username.classList.remove('is-invalid');
            password.classList.add('is-invalid');
        } else{
            userErr.innerText = '';
            passErr.innerText = '';

            username.classList.remove('is-invalid');
            password.classList.remove('is-invalid');


            $.ajax({
                url: './php/loginLogic.php',
                type: 'POST',
                data: {
                    action: 'login',
                    username: username.value,
                    password: password.value
                },
                success: response => {
                    response = JSON.parse(response);

                    response.forEach(error => {
                        if (error == 'username error'){
                            userErr.innerText = "*This username doesn't exists!";
                            passErr.innerText = '';
                            username.classList.add('is-invalid');
                            password.classList.remove('is-invalid');
                        } else if (error == 'pass error'){
                            userErr.innerText = '';
                            passErr.innerText = '*Incorrect password!';

                            username.classList.remove('is-invalid');
                            password.classList.add('is-invalid');
                        } else if (error == 'account not verified'){
                            popupContainer.style.width = '300px';
                            popupContainer.style.height = '100px';
                            popupContainer.style.display = 'flex';
                            popupContainer.style.alignItems = 'center';
                            
                            popupContainer.innerHTML = "<div class='popUpNotification'><h3>This account isn't verificated!</h3></div>";
                            setTimeout(() => {
                                window.location.replace('./php/verify.php');
                            }, 1000)
                        } else if(error == 'logged'){
                            let currentURL = window.location.href;
                            window.location.replace(currentURL);
                        }
                    });
                }
            });
        }
    }
}

const inputs = document.querySelectorAll('.input');

inputs.forEach(input => {
    input.addEventListener('keyup', e => {
        if (e.key === 'Enter') {
            logIn();
        }
    });
});

login_btn.addEventListener('click', logIn);