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
                            <h2 class="hero-title2">Shop Here </h2>
                        </div>
                        <img src="./assets/images/man.png"
                            style="height: 330px; padding-top: 30px;" alt>
                    </div>
                </div>
            </div>
        </div>
        
        <center>
            <p class="section-subtitle" style="padding-top: 30px;">Choose what you want to shop.</p>
        </center>

        <section class="section destination">
            <div class="container">
                <ul class="destination-list">
                    <li>
                        <a href="./handmade.html" class="destination-card">
                            <figure class="card-banner">
                                <img src="./assets/images/hand.jpg" width="1110" height="480" loading="lazy" alt="Kuala Lumpur, Malaysia"  class="img-cover">
                            </figure>
                            <div class="card-content">
                                <h3 class="h3 card-title">Handmade Jewlery</h3>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="./traditionalClothes.html" class="destination-card">
                            <figure class="card-banner">
                                <img src="./assets/images/kosova-clothes.jpg" width="1110" height="480" loading="lazy" alt="Kuala Lumpur, Malaysia"  class="img-cover">
                            </figure>
                            <div class="card-content">
                                <h3 class="h3 card-title">Traditional Clothes</h3>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="destination-card">
                            <figure class="card-banner">
                                <img src="./assets/images/shoe.jpeg" width="1110" height="480" loading="lazy" alt="Kuala Lumpur, Malaysia"  class="img-cover">
                            </figure>
                            <div class="card-content">
                                <h3 class="h3 card-title">Handmade Shoe's</h3>
                            </div>
                        </a>
                    </li>
                    
                    <li>
                        <a href="#" class="destination-card">
                            <figure class="card-banner">
                                <img src="./assets/images/ticket.jpg" width="1110" height="480" loading="lazy" alt="Kuala Lumpur, Malaysia"  class="img-cover">
                            </figure>
                            <div class="card-content">
                                <h3 class="h3 card-title">Concert Tickets</h3>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="destination-card">
                            <figure class="card-banner">
                                <img src="./assets/images/movie.jpg" width="1110" height="480" loading="lazy" alt="Kuala Lumpur, Malaysia"  class="img-cover">
                            </figure>
                            <div class="card-content">
                                <h3 class="h3 card-title">Film Festival Tickets</h3>
                            </div>
                        </a>
                    </li>
                    
                    <li>
                        <a href="#" class="destination-card">
                            <figure class="card-banner">
                                <img src="./assets/images/footy.jpg" width="1110" height="480" loading="lazy" alt="Kuala Lumpur, Malaysia"  class="img-cover">
                            </figure>
                            <div class="card-content">
                                <h3 class="h3 card-title">Football Tickets</h3>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="destination-card">
                            <figure class="card-banner">
                                <img src="./assets/images/basket2.jpg" width="1110" height="480" loading="lazy" alt="Kuala Lumpur, Malaysia"  class="img-cover">
                            </figure>
                            <div class="card-content">
                                <h3 class="h3 card-title">Basketball Tickets</h3>
                            </div>
                        </a>
                    </li>
                 
                </ul>
            </div>
        </section>
    <br><br>
    <?php include 'footer.php'; ?>

    <a href="#top" class="go-top" data-go-top aria-label="Go To Top">
        <ion-icon name="chevron-up-outline"></ion-icon>
    </a>
    <?php include 'script.php'; ?>
</body>
</html>