<?php
include '../config.php';

if (!isset($_SESSION['verify'])) {
    header("Location: register.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/rippleui@1.12.1/dist/css/styles.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Verify</title>
    <style>
        .input-small {
            width: 50px;
            /* Adjust the width as needed */
            text-align: center;
        }

        .center {
            text-align: center;
        }

        .mt-100 {
            margin-top: 100px;
        }

        .mt-25 {
            margin-top: 25px;
        }

        input:focus {
            border-color: lightskyblue;
        }
    </style>

</head>

<body>
    <main class="mx-auto flex w-full max-w-sm flex-col gap-6 ">
        <div class="flex flex-col items-center bordered mt-100 ">
            <form autocomplete="off" class="veri_form">
                <h1 class="center text-3xl font-semibold">Verify your account</h1>
                <p class="mt-25 center text-sm">Write down the code that was sent in your email!</p>
                <br>
                <div class="column">
                    <input class="veri_code input input-rounded input-small" type="text" maxlength="1" placeholder="0"
                        id="otp1">
                    <input class="veri_code input input-rounded input-small" type="text" maxlength="1" placeholder="0"
                        id="otp2">
                    <input class="veri_code input input-rounded input-small" type="text" maxlength="1" placeholder="0"
                        id="otp3">
                    <input class="veri_code input input-rounded input-small" type="text" maxlength="1" placeholder="0"
                        id="otp4">
                    <input class="veri_code input input-rounded input-small" type="text" maxlength="1" placeholder="0"
                        id="otp5">
                    <input class="veri_code input input-rounded input-small" type="text" maxlength="1" placeholder="0"
                        id="otp6">
                </div>
                <div class="center mt-25">
                    <button type="button" class="verify" id="verify">
                        <div class="btnLoader "></div><span class="btnText btn btn-outline-primary ">Verify</span>
                    </button>
                </div>
                <br>
                <div class="center">
                    <a class="countdown text-3xl font-semibold"><span class="restart"> Resend code:</span> <span
                            class="timer"> </span></a>
                </div>
            </form>
        </div>
    </main>

    <script>
        const timeLimit = 150000;
        const timeLimit2 = 10000;

        const startTime = Date.now();

        const endTime = startTime + timeLimit;
        const endTime2 = startTime + timeLimit2;

        let resend = document.querySelector('.countdown');

        let codeValid = true;

        function displayTimeRemaining() {
            const currentTime = Date.now();

            const timeRemaining = endTime - currentTime;

            const secondsRemaining = Math.round(timeRemaining / 1000);

            let minutes = Math.floor(secondsRemaining / 60);

            let seconds = secondsRemaining % 60;

            if (minutes < 10) {
                minutes = 0 + "" + minutes;
            }

            if (seconds < 10) {
                seconds = 0 + "" + seconds;
            }

            document.querySelector(".timer").innerHTML = `${minutes}:${seconds}`;

            let verifyBtn = document.querySelector('#verify');
            let veri_code = document.querySelectorAll('.veri_code');

            if (currentTime >= endTime2) {
                document.querySelector(".restart").style.opacity = 1;
                resend.href = "./resendCode.php";
            }

            if (currentTime >= endTime) {
                document.querySelector(".restart").style.opacity = 1;
                clearInterval(timer);
                resend.href = "./resendCode.php";
                verifyBtn.disabled = true;
                veri_code.forEach(code => {
                    code.disabled = true;
                    code.style.borderColor = '';
                });

                alert("Code has expired. Please click on the resend code link to resend the code!");
            } else {
                verifyBtn.disabled = false;
                veri_code.forEach(code => {
                    code.disabled = false;
                });
            }
        }

        const timer = setInterval(displayTimeRemaining, 1000);

        window.onload = displayTimeRemaining;
    </script>

    <!-- External links -->

    <!-- JQuery link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="../js/verify.js"></script>
</body>

</html>