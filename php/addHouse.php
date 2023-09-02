<?php
require '../config.php';
?>

<!DOCTYPE html>
<html lang="en" style="height: 100%;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add house</title>
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/pop-up.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Comforter+Brush&family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Tailwind library -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/rippleui@1.12.1/dist/css/styles.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        #gmap-canvas {
            height: 100%;
            width: 100%;
            max-width: 100%;
        }

        #gmap-canvas img {
            max-height: none;
            max-width: none !important;
            background: none !important;
        }

        iframe {
            height: 100%;
            width: 100%;
            border: 0;
        }

        .mapWrapper {
            max-width: 100%;
            list-style: none;
            transition: none;
            overflow: hidden;
            width: 500px;
            height: 300px;
        }
    </style>
</head>

<body style="height: 100%; ">

    <div class="buildingWrapper">
        <!-- if user is not signed in -->
        <?php if (!isset($_SESSION['user'])) { ?>
            <h1>You need to sign in to host a building for rent!</h1>
            <div class="popup-container notSigned" style="margin-right: 5%;">
                <label class=" loginAddHouse" for="login-popup">Login</label>
                <input type="checkbox" id="login-popup">
                <div class="popup">
                    <label for="login-popup" class="transparent-label"></label>
                    <div class="popup-inner">
                        <div class="popup-title">
                            <h6>Login</h6>
                            <label for="login-popup" class="popup-close-btn">Close</label>
                        </div>
                        <div class="popup-content">
                            <form>
                                <ul>
                                    <li>
                                        <input type="text" placeholder="Username" class="username input">
                                        <p class="usernameError dataError"></p>
                                    </li>
                                    <li>
                                        <input type="password" placeholder="Password" class="password input">
                                        <p class="passwordError dataError"></p>
                                    </li>
                                    <li>
                                        <button class="login" type="button">Log in</button>
                                    </li>
                                    <center><a href="./php/register.php">You don't have an account?</a></center>

                                    <center><a href="#">Forgot Password</a></center>
                                </ul>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- if its signed in -->
            <?php } else {  ?>

                <div class="buildingTab hidden">
                    <h1 class="text-4xl">Choose the type of the building that you want to host!</h1>
                    <div class="buildingTypeWrapper">
                        <div class="buildings">
                            <div class="house buildingType" data-building-type="house">
                                <ion-icon name="home-outline"></ion-icon>
                                <p>House</p>
                            </div>
                            <div class="apartament buildingType" data-building-type="apartament">
                                <i class="fa-regular fa-building"></i>
                                <p>Apartament</p>
                            </div>
                            <div class="hotel buildingType" data-building-type="hotel">
                                <i class="fa-solid fa-hotel"></i>
                                <p>Hotel</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="buildingTab hidden">
                    <h1 class="text-4xl">Fill the information!</h1>
                    <div class="hosueInfo">
                        <div class="rooms">
                            <div class="roomIcon">
                                <i class="fa-solid fa-door-closed"></i>
                                <label for="">Rooms</label>
                            </div>
                            <div class="roomsAction">
                                <button type="button" class="decrementNum">-</button>
                                <input type="number" value="0" class="roomsInp" readonly>
                                <button type="button" class="incrementNum">+</button>
                            </div>
                        </div>
                        <div class="rooms">
                            <div class="roomIcon">
                                <i class="fa-solid fa-bed"></i>
                                <label for="">Beds</label>
                            </div>
                            <div class="roomsAction">
                                <button type="button" class="bedDec">-</button>
                                <input type="number" value="0" class="bedInp" readonly>
                                <button type="button" class="bedInc">+</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="buildingTab hidden">
                    <h1 class="text-4xl">Select the location!</h1>
                    <div class="selectLocation currentLocation">
                        <i class="fa-solid fa-location-dot"></i>
                        <p>Use my current location.</p>
                    </div>
                    <div class="selectLocation mt-2 writeLocation">
                        <i class="fa-solid fa-location-dot"></i>
                        <p>Write down the address.</p>
                    </div>

                    <div class="mapWrapper hidden">
                        <div id="gmap-canvas">
                            <iframe frameborder="0" class="mapFrame"></iframe>
                        </div>
                    </div>

                    <div class="adressInpWrapper hidden">
                        <input type="text" class="adres adress-input" placeholder="adress">
                    </div>
                </div>

                <div class="buildingTab hidden">
                    <h1 class="text-4xl">Fill the information!</h1>
                    
                </div>
                
                <div class="buildingType-action">
                    <button type="button" class="backStep">Go back</button>
                    <button type="button" class="nextStep">Next</button>
                </div>
            </div>
            


        <?php } ?>


        <!-- ionicon link -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <!-- Font-awesome script -->
        <script src="https://kit.fontawesome.com/a28016bfcd.js" crossorigin="anonymous" defer></script>

        <script src="../js/addHouse.js"></script>
        <!-- JQuery link -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="../js/login.js"></script>
</body>

</html>