const veri_code = document.querySelectorAll(".veri_code");
let otp = "";

veri_code[0].focus();

const otpPaste = e => {
    const data = e.clipboardData.getData("text");
    const value = data.split("");
    if (value.length === veri_code.length) {
        veri_code.forEach((input, index) => {
            input.value = value[index]
            veri_code[veri_code.length - 1].focus();
        });
    }
}

veri_code.forEach((code, index) => {
    code.addEventListener("keydown", (e) => {
        if (e.key >= 0 && e.key <= 9) {
            veri_code[index].value = "";
            setTimeout(() => veri_code[index + 1].focus(), 10);
        } else if (e.key === "Backspace") {
            setTimeout(() => veri_code[index - 1].focus(), 10);
        }
    });
    code.addEventListener("paste", otpPaste)
});


const verifyBtn = document.querySelector('.verify');
const btnLoader = document.querySelector('.btnLoader');
const btnText = document.querySelector('.btnText');


const sendOtp = () => {
    let otpCode = '';
    veri_code.forEach(code => {
        otpCode += code.value;
    });
    if(otpCode.length == 6){
        btnLoader.style.display = 'block';
        btnText.innerHTML = 'Verifying...';
        $.ajax({
            url: '../php/verifyLogic.php',
            type: 'POST',
            data: {
                otpCode: otpCode
            }, 
            success: response => {
                console.log(response);
                if (response == 'verified'){
                    btnLoader.style.display = 'none';
                    btnText.innerHTML = 'Verified';
                    setTimeout(() => {
                        window.location.replace('../index.html');
                    }, 1000)
                } else if (response == 'something went wrong'){
                    btnLoader.style.display = 'none';
                    btnText.innerHTML = 'Something went wrong';
                } else if (response == 'expierd code'){
                    btnLoader.style.display = 'none';
                    btnText.innerHTML = 'Code has expierd';
                } else if (response == 'wrong code'){
                    btnLoader.style.display = 'none';
                    btnText.innerHTML = 'Wrong code';
                }
            }
        });
    }
    
}

verifyBtn.addEventListener('click', sendOtp);