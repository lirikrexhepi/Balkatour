<?php
require '../config.php';
require '../emailData.php';
// PHP Mailer files
require("./PHPMailer-master/src/Exception.php");
require("./PHPMailer-master/src/PHPMailer.php");
require("./PHPMailer-master/src/SMTP.php");
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$nameErr = $birthdayErr = $genderErr = $emailErr = $stateErr = $cityErr = $usernameErr = $passErr = $confirmPassErr = '';

if (isset($_POST['action']) && $_POST['action'] == 'getCities') {
    // Gets the state value from the ajax sent request
    $state = $_POST['state'];

    $cities_sql = "SELECT 
            c.id, 
            c.state, 
            c.city, 
            s.name 
            FROM city as c 
            INNER JOIN states AS s 
            ON c.state=s.id 
            WHERE s.name=:state";
    $cities_prep = $con->prepare($cities_sql);
    $cities_prep->bindParam(':state', $state);
    $cities_prep->execute();
    $cities_data = $cities_prep->fetchAll(PDO::FETCH_ASSOC);


    $response = [];

    foreach ($cities_data as $cities_data) {
        $response[] = $cities_data['city'];
    }

    echo json_encode($response);
}


// Checking the first tab if its valid
if (isset($_POST['action']) && $_POST['action'] == 'firstTab') {
    $fullName = $_POST['fullName'];
    $birthday = $_POST['birthday'];
    $gender = $_POST['gender'];

    if (empty($fullName)) {
        $nameErr = 'empty name';
    } else {
        if (!preg_match("/^[a-z A-z]*$/", $fullName)) {
            $nameErr = 'invalid name';
        } else {
            $nameErr = '';
        }
    }

    if (empty($birthday)) {
        $birthdayErr = 'empty birthday';
    } else {


        // Define the two dates to compare
        $dateOfBirth = new DateTime($birthday); // Replace this with the actual date of birth
        $currentDate = new DateTime();

        // Calculate the difference between the two dates
        $interval = $currentDate->diff($dateOfBirth);

        // Check if the difference is at least 18 years
        if ($interval->y > 18 || ($interval->y == 18 && $interval->m > 0) || ($interval->y == 18 && $interval->m == 0 && $interval->d >= 0)) {
            $birthdayErr = '';
        } else {
            $birthdayErr = 'young age';
        }
    }


    if (empty($gender)) {
        $genderErr = 'empty gender';
    } else {
        $genderErr = '';
    }

    $response = [$nameErr, $birthdayErr, $genderErr];

    echo json_encode($response);
}

// Check second tab
if (isset($_POST['action']) && $_POST['action'] == 'secondTab') {
    $email = $_POST['email'];
    $state = $_POST['state'];
    $city = $_POST['city'];

    if (empty($email)) {
        $emailErr = 'empty email';
    } else {
        $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
        if (!preg_match($pattern, $email)) {
            $emailErr = 'invalid email';
        } else {
            $check_email = "SELECT email FROM users WHERE userType=1 AND email=:email";
            $check_email_prep = $con->prepare($check_email);
            $check_email_prep->bindParam(':email', $email);
            $check_email_prep->execute();
            $check_email_data = $check_email_prep->fetch();

            if ($check_email_data) {
                $emailErr = 'email exists';
            } else {
                $emailErr = '';
            }
        }
    }

    if (empty($state)) {
        $stateErr = 'empty state';
    } else {
        $stateErr = '';
    }

    if (empty($city)) {
        $cityErr = 'empty city';
    } else {
        $cityErr = '';
    }

    $response = [$emailErr, $stateErr, $cityErr];

    echo json_encode($response);
}


// Check third tab
if (isset($_POST['action']) && $_POST['action'] == 'thirdTab') {
    $fullName = $_POST['fullName'];
    $birthday = $_POST['birthday'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPass = $_POST['confirm_pass'];

    if (empty($username)) {
        $usernameErr = 'empty username';
    } else {

        $check_username = "SELECT username FROM users WHERE userType=1 AND username=:username";
        $check_username_prep = $con->prepare($check_username);
        $check_username_prep->bindParam(':username', $username);
        $check_username_prep->execute();
        $check_username_data = $check_username_prep->fetch();

        if ($check_username_data) {
            $usernameErr = 'username exists';
        } else {
            $usernameErr = '';
        }
    }

    if (empty($password)) {
        $passErr = 'empty password';
    } else {
        $passErr = '';
    }

    if (empty($confirmPass)) {
        $confirmPassErr = 'confirm pass';
    } else if ($password !== $confirmPass) {
        $confirmPassErr = "pass doesn't match";
    } else {
        $confirmPassErr = '';
    }



    $response = [$usernameErr, $passErr, $confirmPassErr];
    echo json_encode($response);
}


// Insert data 
if (isset($_POST['action']) && $_POST['action'] == 'insert') {
    $fullName = $_POST['fullName'];
    $birthday = $_POST['birthday'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $encPass = password_hash($password, PASSWORD_DEFAULT);

    if ($gender == 'Male') {
        $msg = "Dear Mr.$fullName";
    } else {
        $msg = "Dear Mrs.$fullName";
    }
    $veri_code = rand(111111, 999999);
    $userType = 1;
    $verified = false;



    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0;                                       //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = SITE_EMAIL;                            //SMTP username
        $mail->Password   = SITE_PASSWORD;                         //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('no@reply.com', 'balkatour.com');
        $mail->addAddress($email, $fullName);                           //Add a recipient


        //Content
        $mail->isHTML(true);                                        //Set email format to HTML


        $mail->Subject = 'Your Verification Code';
        $mail->Body    = "<p>
                            $msg,
                            <br><br>
                            Thank you for choosing our services. To complete your verification process, 
                            please use the following verification code:
                            <br>
                            Verification Code: <b>$veri_code</b>
                            <br><br>
                            Please be aware that this code will remain valid for the next 3 minutes.
                            After this period, you'll need to request a new verification code if needed.
                            <br><br>
                            If you have any questions or encounter any issues during the verification process, 
                            feel free to reach out to our support team.
                            <br><br>
                            Thank you for your trust.
                            <br><br>
                            Best regards,
                            <br>
                            balkatour.com
                            </p>";

        $mail->send();
        $state_sql = "SELECT id FROM states WHERE name=:name";
        $state_prep = $con->prepare($state_sql);
        $state_prep->bindParam(':name', $state);
        $state_prep->execute();
        $state_data = $state_prep->fetch(PDO::FETCH_ASSOC);
        $state_id = $state_data['id'];

        $city_sql = "SELECT id FROM city WHERE city=:city";
        $city_prep = $con->prepare($city_sql);
        $city_prep->bindParam(':city', $city);
        $city_prep->execute();
        $city_data = $city_prep->fetch(PDO::FETCH_ASSOC);
        $city_id = $city_data['id'];

        $sql = "INSERT INTO users(userType, fullName, gender, birthday, email, state, city, username, password, verification_code, verified)
        VALUES(:userType, :fullName, :gender, :birthday, :email, :state, :city, :username, :password, :verification_code, :verified)";

        $prep = $con->prepare($sql);
        $prep->bindParam(':userType', $userType, PDO::PARAM_INT);
        $prep->bindParam(':fullName', $fullName);
        $prep->bindParam(':gender', $gender);
        $prep->bindParam(':birthday', $birthday);
        $prep->bindParam(':email', $email);
        $prep->bindParam(':state', $state_id, PDO::PARAM_INT);
        $prep->bindParam(':city', $city_id, PDO::PARAM_INT);
        $prep->bindParam(':username', $username);
        $prep->bindParam(':password', $encPass);
        $prep->bindParam(':verification_code', $veri_code);
        $prep->bindParam(':verified', $verified);
        $prep->execute();

        $_SESSION['verify'] = $username;
        echo "Registerd";
    } catch (Exception $e) {
        echo "Something went wrong";
    }
}
