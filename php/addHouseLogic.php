<?php
    include '../config.php';
    
    if(isset($_POST['action']) && $_POST['action'] == 'insertData'){
        $buildingType = $_POST['buildingType'];
        $roomsInp = $_POST['roomsInp'];
        $bedInp = $_POST['bedInp'];
        $location = $_POST['location'];
        $image = $_POST['image'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $availableFrom = $_POST['availableFrom'];
        $availableUntil = $_POST['availableUntil'];
        $placeOffers = $_POST['placeOffers'];

        echo "insert test";
    }
?>