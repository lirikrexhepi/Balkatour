<?php
require './config.php';

if (isset($_POST['logout'])) {
unset($_SESSION['user']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="./css/pop-up.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Comforter+Brush&family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body id="top">
    <?php include 'navbar.php'; ?>
        <div class="page-banner bg-image" style="height:350px;background-image: url(./assets/images/banner.jpg);">
            <div class="banner-section">
                <div class="container  fadeInUp">
                    <div
                        style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap;">
                        <div style="display: block;">
                            <p class="section-subtitle2">Explore Balkan</p>
                            <h2 class="hero-title2">Concert Tickets</h2>
                        </div>
                        <img src="./assets/images/man.png" style="height: 330px; padding-top: 30px;" alt>
                    </div>
                </div>
            </div>
        </div>
        
    <center>
       <p class="section-subtitle" style="padding-top: 30px;">Choose the Artist you love.</p>
    </center>

    <br><br>

    
    <br><br>
    <?php include 'footer.php'; ?>

    <a href="#top" class="go-top" data-go-top aria-label="Go To Top">
        <ion-icon name="chevron-up-outline"></ion-icon>
    </a>
    <?php include 'script.php'; ?>
</body>
</html>
<script src="./js/script.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="./js/login.js"></script>
<script src="./js/chat.js"></script>