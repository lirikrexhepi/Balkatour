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
  <title>Chat</title>
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
        <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap;">
          <div style="display: block;">
            <p class="section-subtitle2">Explore Balkan</p>
            <h2 class="hero-title2">U don't have a place to stay? </h2>
          </div>
          <img src="./assets/images/man.png" style="height: 330px; padding-top: 30px;" alt="">
        </div>
      </div>
    </div>
  </div>

  <center>
    <p class="section-subtitle" style="padding-top: 30px;">Rent Apartament's Here</p>
  </center>
  <section class="section popular">
    <div class="container">
      <ul class="popular-list"> 
        <li>
          <div class="popular-card">

            <figure class="card-banner">
              <a href="#">
                <img src="./assets/images/rent/house1.jpg" width="740" height="518" loading="lazy" alt="Kuala Lumpur, Malaysia" class="img-cover">
              </a>
            </figure>

            <div class="card-content">
              <div class="card-wrapper">
                <h3 class="card-title"  style="margin-top: -10px;">
                  <a href="#">HAVANA HOUSE 4</a>
                </h3>
                <div class="card-rating" style="margin-top: -30px; margin-left: 50px;">
                  <ion-icon name="star"></ion-icon>
                  <data value="2">3.7</data>
                </div>
              </div>
        
              <address class="card-location" style="margin-top: -10px;">Lezhe Shkoder, Albania</address>
              
              <address class="card-location" style="margin-top: 5px;">113€ for a night</address>
              
              
            </div>

          </div>
        </li>
      </ul>

    </div>
  </section>
  <?php include 'footer.php'; ?>
  <a href="#top" class="go-top" data-go-top aria-label="Go To Top">
    <ion-icon name="chevron-up-outline"></ion-icon>
  </a>

  <?php include 'script.php'; ?>

</body>

</html>