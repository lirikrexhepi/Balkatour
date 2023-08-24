<?php
require '../config.php';

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
        $birthdayErr = '*Birthday must be filled.';
    } else {

        $birthdayDate = new DateTime($birthday);
        $currentDate = new DateTime();

        $age = $currentDate->diff($birthdayDate)->y;

        if ($age <= 18) {
            $birthdayErr = 'young age';
        } else {
            $birthdayErr = '';
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
