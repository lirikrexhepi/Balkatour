<?php
require '../config.php';

// Fetches the state names
$state_sql = "SELECT * FROM states ORDER BY name ASC";
$state_prep = $con->prepare($state_sql);
$state_prep->execute();
$state_data = $state_prep->fetchAll(PDO::FETCH_ASSOC);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <title>Register</title>
</head>

<body>

    <main class="main_register">
        <article>
            <h1 class="register_h1">Create an account</h1>
            <div class="tab">
                <div>
                    <input type="text" placeholder="Full name" class="fullName">
                    <p class="nameError"></p>
                </div>

                <div>
                    <input type="date" placeholder="Birthday" class="birthday">
                    <p class="birthdayError"></p>
                </div>

                <div>
                    <select class="gender">
                        <option value="">Select gender</option>
                        <option value="">Male</option>
                        <option value="">Female</option>
                    </select>
                    <p class="genderError"></p>
                </div>
            </div>

            <div class="tab">
                <div>
                    <input type="email" placeholder="Email" class="email">
                    <p class="emailError"></p>
                </div>

                <div>
                    <select class="state">
                        <option value="">Select state</option>
                        <?php foreach ($state_data as $state) : ?>
                            <option value="<?= $state['name'] ?>"><?= $state['name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <p class="stateError"></p>
                </div>

                <div>
                    <select class="city">
                        <option value="">Select city</option>
                    </select>
                    <p class="cityError"></p>
                </div>
            </div>

            <div class="tab">
                <div>
                    <input type="text" class="username" placeholder="Username">
                    <p class="usernameError"></p>
                </div>

                <div>
                    <input type="password" class="password" placeholder="Password">
                    <p class="passwordError"></p>
                </div>

                <div>
                    <input type="password" class="confirm_pass" placeholder="Confirm password">
                    <p class="confirmPass_error"></p>
                </div>
            </div>

            <div class="spin">
                <div class="tab loader"></div>
            </div>


            <div class="register_btn">
                <button class="prev_btn">Prev</button>
                <button class="next_btn">Next</button>
            </div>
        </article>
    </main>






    <!-- External links -->

    <!-- JQuery link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <!-- Register js script -->
    <script src="../js/register.js"></script>
</body>

</html>