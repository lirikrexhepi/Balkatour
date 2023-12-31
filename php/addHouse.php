<?php
require '../config.php';

$state_sql = "SELECT * FROM states ORDER BY name ASC";
$state_prep = $con->prepare($state_sql);
$state_prep->execute();
$state_data = $state_prep->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en" style="height: 100%; background-color: white !important;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add house</title>
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="../css/addHouse.css">
    <link rel="stylesheet" href="../css/pop-up.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Comforter+Brush&family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Tailwind library -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/rippleui@1.12.1/dist/css/styles.css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body style="height: 100%; ">

    <div class="buildingWrapper">
        <!-- if user is not signed in -->
        <?php if (!isset($_SESSION['user'])) { ?>
            <h1 style="color:black; margin-bottom:1%; font-weight: semibold;">You need to sign in to host a building for rent!</h1>
            <div class="popup-container notSigned" style="margin-right: 5%;">
                <label class=" loginAddHouse" for="login-popup">Login</label>
                <input type="checkbox" id="login-popup">
                <div class="popup">
                    <label for="login-popup" class="transparent-label"></label>
                    <div class="popup-inner">
                        <div class="popup-title">
                            <h6 style="color: black;">Login</h6>
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
                                    <center><a style="color: black;" href="./php/register.php">You don't have an account?</a></center>

                                    <center><a style="color: black;" href="#">Forgot Password</a></center>
                                </ul>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- if its signed in -->
            <?php } else {  ?>

                <div class="buildingTab hidden">
                    <h1 class="text-4xl">Type of the building that you want to host!</h1>
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
                        <p class="text-rose-500 w-full font-semibold hidden building-type-error">*Building type is required!</p>
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
                        <p class="text-rose-500 w-full mt-2 font-semibold hidden rooms-error"></p>
                        <div class="rooms mt-3">
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
                        <p class="text-rose-500 w-full mt-2 font-semibold hidden beds-error"></p>
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
                        <div class="mapWrapper-select">

                            <div>
                                <select class="state">
                                    <option value="" selected disabled>Select state</option>
                                    <?php foreach ($state_data as $state) : ?>
                                        <option value="<?= $state['name'] ?>"><?= $state['name'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <p class="text-rose-500 w-full font-semibold hidden location-state-error">*State is required</p>
                            </div>

                            <div>
                                <select class="city">
                                    <option value="">Select city</option>
                                </select>
                                <p class="text-rose-500 w-full font-semibold hidden location-city-error">*City is required</p>
                            </div>
                        </div>


                    </div>

                    <div class="adressInpWrapper hidden">
                        <div class="w-full">
                            <input type="text" class="adres adress-input" placeholder="adress">
                            <p class="text-rose-500 w-full mt-1 hidden font-semibold address-error"></p>
                        </div>


                        <div class="w-full">
                            <select class="address_state">
                                <option value="" selected disabled>Select state</option>
                                <?php foreach ($state_data as $state) : ?>
                                    <option value="<?= $state['name'] ?>"><?= $state['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <p class="text-rose-500 w-full mt-1 hidden font-semibold address-state-error"></p>
                        </div>

                        <div class="w-full">
                            <select class="address_city_select">
                                <option value="">Select city</option>
                            </select>
                            <p class="text-rose-500 w-full mt-1 hidden font-semibold address-city-error"></p>

                        </div>
                    </div>
                </div>

                <div class="buildingTab hidden">
                    <h1 class="text-4xl">Add images</h1>
                    <input type="file" id="file" multiple style="display: none;">
                    <label for="file" class="fileLabel">
                        <img src="../assets/logo/icons/add-image.png" alt="">
                        Add images
                    </label>
                    <p class="text-rose-500 font-semibold mt-1 hidden images-error"></p>
                    <div class="file-preview" id="filePreview">
                        <!-- Images will be displayed here -->
                    </div>
                </div>

                <div class="buildingTab hidden post-last-info">
                    <h1 class="text-4xl">Fill the information</h1>
                    <div class="w-full">
                        <input type="text" placeholder="Title" class="post-title">
                        <p class="text-rose-500 font-semibold mt-1 w-full title-error hidden"></p>
                    </div>

                    <div class="description-wrapper">
                        <label for="description">Description</label>
                        <textarea cols="40" rows="8" id="description" class="post-description"></textarea>
                        <p class="text-rose-500 font-semibold mt-1 w-full description-error hidden"></p>
                    </div>
                    <div class="price-wrapper">
                        <label for="">Price per night</label>
                        <div>
                            <input type="text" id="price" class="post-price">
                            <label for="price">&euro;</label>
                        </div>
                        <p class="text-rose-500 font-semibold mt-1 w-full price-error hidden"></p>
                    </div>
                    <div class="available-dates">
                        <div class="available-from-wrapper">
                            <label for="">Available from</label>
                            <input type="date" class="available-from" id="date">
                            <p class="text-rose-500 font-semibold mt-1 w-full avail-from-error hidden"></p>
                        </div>

                        <script>
                            function getTodayDate() {
                                const today = new Date();
                                const year = today.getFullYear();
                                const month = String(today.getMonth() + 1).padStart(2, '0'); // Months are zero-based
                                const day = String(today.getDate()).padStart(2, '0');
                                return `${year}-${month}-${day}`;
                            }

                            // Set the min attribute to today's date when the page loads
                            const dateInput = document.getElementById('date');
                            dateInput.min = getTodayDate();
                        </script>
    

                        <div class="available-until-wrapper">
                            <label for="">Available until</label>
                            <input type="date" class="available-until" id="untilDate">
                            <p class="text-rose-500 font-semibold mt-1 w-full avail-until-error hidden"></p>
                        </div>

                        <script>
                            const untilDate = document.getElementById('untilDate');
                            untilDate.min = getTodayDate();
                        </script>
                    </div>
                </div>

                <div class="buildingTab hidden post-last-info">
                    <h1 class="text-4xl">Place offers:</h1>
                    <div class="place-offers">
                        <div>
                            <label for="wifi">
                                <img src="../assets/logo/icons/wifi.png">
                                Wi-fi
                            </label>
                            <input type="checkbox" id="wifi" data-place-offers="wifi">
                        </div>
                        <div>
                            <label for="parking">
                                <img src="../assets/logo/icons/parked-car.png">
                                Parking
                            </label>
                            <input type="checkbox" id="parking" data-place-offers="parking">
                        </div>
                        <div>
                            <label for="heating">
                                <img src="../assets/logo/icons/heating.png">
                                Heating
                            </label>
                            <input type="checkbox" id="heating" data-place-offers="heating">
                        </div>
                        <div>
                            <label for="tv">
                                <img src="../assets/logo/icons/tv.png">
                                TV
                            </label>
                            <input type="checkbox" id="tv" data-place-offers="tv">
                        </div>
                        <div>
                            <label for="lightningProof">
                                <img src="../assets/logo/icons/electricity.png">
                                Lightning proof
                            </label>
                            <input type="checkbox" id="lightningProof" data-place-offers="lightningProof">
                        </div>
                        <div>
                            <label for="printer">
                                <img src="../assets/logo/icons/printer.png">Printer
                            </label>
                            <input type="checkbox" id="printer" data-place-offers="printer">
                        </div>
                    </div>
                </div>

                <div class="buildingTab hidden">
                    <h1 class="text-4xl textBlack">Please wait...</h1>
                    <div class="loader"></div>
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