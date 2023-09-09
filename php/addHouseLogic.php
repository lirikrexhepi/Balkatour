<?php
require_once('../config.php');

// if (isset($_POST['action']) && $_POST['action'] == 'insertData') {


//     $buildingType = $_POST['buildingType'];
//     $roomsInp = $_POST['roomsInp'];
//     $bedInp = $_POST['bedInp'];
//     $location = $_POST['location'];
//     $state = $_POST['state'];
//     $city = $_POST['city'];
//     $title = $_POST['title'];
//     $description = $_POST['description'];
//     $price = $_POST['price'];
//     $availableFrom = $_POST['availableFrom'];
//     $availableUntil = $_POST['availableUntil'];
//     $placeOffers = $_POST['placeOffers'];
    
//     // Initialize an array to store base64 image data
//     $imageData = array();

//     // Loop through and process each base64 image
//     for ($i = 1; $i <= 10; $i++) {
//         $fieldName = 'image_' . $i;

//         if (isset($_POST[$fieldName])) {
//             // Decode base64 data and store it
//             $imageData[$i - 1] = base64_decode($_POST[$fieldName]);
//         }
//     }


//     $sqlImage = "INSERT INTO images (image_1, image_2, image_3, image_4, image_5, image_6, image_7, image_8, image_9, image_10) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

//     $stmtImage = $con->prepare($sqlImage);

//     if ($stmtImage) {
//         // Bind parameters for image columns
//         for ($i = 1; $i <= count($imageData); $i++) {
//             $stmtImage->bind_param("b", $imageData[$i - 1]);
//         }

//         if ($stmtImage->execute()) {
//             echo 'Image data inserted successfully!';
//         } else {
//             echo 'Execute error for image data: ' . $stmtImage->error;
//         }

//     } else {
//         echo 'Prepare error for image data: ' . $con->error;
//     }

// }
