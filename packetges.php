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
    <title>Packetges</title>
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="./css/pop-up.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Comforter+Brush&family=Heebo:wght@400;500;600;700&display=swap"
      rel="stylesheet">
    <link
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      rel="stylesheet" />
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
              <h2 class="hero-title2">You dont know which place to visit?</h2>
            </div>
            <img src="./assets/images/man.png"
              style="height: 330px; padding-top: 30px;" alt>
          </div>
        </div>
      </div>
    </div>

    <center>
      <p class="section-subtitle" style="padding-top: 30px;">Choose our Packetges</p>
    </center>

    <br><br>
    <section class="section popular">
        <div class="container">

          <ul class="popular-list">

            <li>
              <div class="popular-card">

                <figure class="card-banner">
                  <a href="#">
                    <img src="./assets/images/croatia2.jpg" width="740" height="518" loading="lazy" alt="Kuala Lumpur, Malaysia" class="img-cover">
                  </a>

                  <span class="card-badge">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="P12D">7 Days</time>
                  </span>
                </figure>

                <div class="card-content">

                  <div class="card-wrapper">
                    <div class="card-price">From 350.00€</div>

                    <div class="card-rating">
                      <data value="2">3.7</data>
                    </div>
                  </div>

                  <h3 class="card-title">
                    <a href="#">Visit tourist places in Croatia</a>
                  </h3>

                  <address class="card-location">Zlatni Rat, Brač</address>
                  <br>
                  <button style="padding:10px 20px; background-color:#FFD205; color:white; border-radius:5px">View Details</button>
                </div>

              </div>
            </li>

            <li>
              <div class="popular-card">

                <figure class="card-banner">
                  <a href="#">
                    <img src="./assets/images/kruje.jpg" width="740" height="518" loading="lazy" alt="Kuala Lumpur, Malaysia" class="img-cover">
                  </a>

                  <span class="card-badge">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="P12D">6 Days</time>
                  </span>
                </figure>

                <div class="card-content">
                  <div class="card-wrapper">
                    <div class="card-price">From 150.00€</div>
                    <div class="card-rating">
                      <data value="3">4.5</data>
                    </div>
                  </div>
                  <h3 class="card-title">
                    <a href="#">Visit tourist places in Albania</a>
                  </h3>
                  <address class="card-location">Kruje, Albania</address>
                  <br>
                  <button style="padding:10px 20px; background-color:#FFD205; color:white; border-radius:5px">View Details</button>
                </div>
              </div>
            </li>

            <li>
              <div class="popular-card">

                <figure class="card-banner">
                  <a href="#">
                    <img src="./assets/images/bulgaria.jpg" width="740" height="518" loading="lazy" alt="Kuala Lumpur, Malaysia" class="img-cover">
                  </a>

                  <span class="card-badge">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="P12D">12 Days</time>
                  </span>
                </figure>

                <div class="card-content">

                  <div class="card-wrapper">
                    <div class="card-price">From 450.00€</div>

                    <div class="card-rating">
                      <data value="2">5.0</data>
                    </div>
                  </div>

                  <h3 class="card-title">
                    <a href="#">Visit tourist places in Bulgaria.</a>
                  </h3>

                  <address class="card-location">Sozopol, Bulgaria</address>
                  <br>
                  <button style="padding:10px 20px; background-color:#FFD205; color:white; border-radius:5px">View Details</button>
                </div>

              </div>
            </li>
          </ul>
        </div>
      </section>
      <br><br>

      <center><button style="padding:10px 20px; background-color:#FFD205; color:white; border-radius:5px">Load More</button></center>



    <br><br>
    <?php include 'footer.php'; ?>
    <a href="#top" class="go-top" data-go-top aria-label="Go To Top">
      <ion-icon name="chevron-up-outline"></ion-icon>
    </a>

    <?php include 'script.php'; ?>
</body>
</html>