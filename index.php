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
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BalkaTour</title>
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
  <link rel="stylesheet" href="./css/pop-up.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Comforter+Brush&family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body id="top">
  <?php include 'navbar.php' ?>
  <main>
    <article>
      <section class="section hero" style="background-image: url('./assets/images/hero-bg-bottom.png') url('./assets/images/hero-bg-top.png')">
        <div class="container">

          <img src="./assets/images/shape-1.png" width="61" height="61" alt="Vector Shape" class="shape shape-1">

          <!-- <img src="./assets/images/shape-2.png" width="56" height="74" alt="Vector Shape" class="shape shape-2"> -->

          <img src="./assets/images/shape-3.png" width="57" height="72" alt="Vector Shape" class="shape shape-3">

          <div class="hero-content">

            <p class="section-subtitle">Explore Balkan</p>

            <h2 class="hero-title">Trusted Travel Agency</h2>

            <p class="hero-text">
              Balkatour is the platform you need while traveling Balkan, with tons of futures to see. Download our app for iOS and Android.
            </p>

            <div class="btn-group">
              <a href="#" class="btn btn-primary">Contact Us</a>

              <a href="#" class="btn btn-outline">Learn More</a>
            </div>

          </div>

          <figure class="hero-banner">
            <img src="./assets/images/hero-banner.png" width="686" height="812" loading="lazy" alt="hero banner" class="w-100">
          </figure>

        </div>
      </section>


      <!-- Destination start -->
      <section class="section destination">
        <div class="container">

          <p class="section-subtitle">Destinations</p>

          <h2 class="h2 section-title">Choose Your Place</h2>

          <ul class="destination-list">

            <li class="w-50">
              <a href="#" class="destination-card">

                <figure class="card-banner">
                  <img src="./assets/images/croatia.jpeg" width="1140" height="1100" loading="lazy" alt="Malé, Maldives" class="img-cover">
                </figure>

                <div class="card-content">
                  <p class="card-subtitle">Zlatni Rat</p>

                  <h3 class="h3 card-title">Croatia</h3>
                </div>

              </a>
            </li>

            <li class="w-50">
              <a href="#" class="destination-card">

                <figure class="card-banner">
                  <img src="./assets/images/kosovo.jpg" width="1140" height="1100" loading="lazy" alt="Bangkok, Thailand" class="img-cover">
                </figure>

                <div class="card-content">
                  <p class="card-subtitle">Prizren</p>

                  <h3 class="h3 card-title">Kosova</h3>
                </div>

              </a>
            </li>

            <li>
              <a href="#" class="destination-card">

                <figure class="card-banner">
                  <img src="./assets/images/montenegro.jpg" width="1110" height="480" loading="lazy" alt="Kuala Lumpur, Malaysia" class="img-cover">
                </figure>

                <div class="card-content">
                  <p class="card-subtitle">Kotor</p>

                  <h3 class="h3 card-title">Montenegro</h3>
                </div>

              </a>
            </li>

            <li>
              <a href="#" class="destination-card">

                <figure class="card-banner">
                  <img src="./assets/images/greece.jpg" width="1110" height="480" loading="lazy" alt="Kathmandu, Nepal" class="img-cover">
                </figure>

                <div class="card-content">
                  <p class="card-subtitle">Santorini</p>

                  <h3 class="h3 card-title">Greece</h3>
                </div>

              </a>
            </li>

            <li>
              <a href="#" class="destination-card">

                <figure class="card-banner">
                  <img src="./assets/images/albania.jpeg" width="1110" height="480" loading="lazy" alt="Jakarta, Indonesia" class="img-cover">
                </figure>

                <div class="card-content">
                  <p class="card-subtitle">Vlore</p>

                  <h3 class="h3 card-title">Albania</h3>
                </div>

              </a>
            </li>

          </ul>

        </div>
      </section>
      <!-- End Destination Section -->

      <!-- About us start -->
      <br><br>
      <section class="section about">
        <div class="container">

          <div class="about-content">

            <p class="section-subtitle">About Us</p>

            <h2 class="h2 section-title">Explore all tour of the balkan with us.</h2>

            <ul class="about-list">

              <li class="about-item">

                <div class="about-item-icon">
                  <ion-icon name="compass"></ion-icon>
                </div>

                <div class="about-item-content">
                  <h3 class="h3 about-item-title">Tour guide</h3>

                  <p class="about-item-text">
                    Lorem Ipsum available, but the majority have suffered alteration in some.
                  </p>
                </div>

              </li>

              <li class="about-item">

                <div class="about-item-icon">
                  <ion-icon name="briefcase"></ion-icon>
                </div>

                <div class="about-item-content">
                  <h3 class="h3 about-item-title">Friendly price</h3>

                  <p class="about-item-text">
                    Lorem Ipsum available, but the majority have suffered alteration in some.
                  </p>
                </div>

              </li>

              <li class="about-item">

                <div class="about-item-icon">
                  <ion-icon name="umbrella"></ion-icon>
                </div>

                <div class="about-item-content">
                  <h3 class="h3 about-item-title">Reliable tour</h3>

                  <p class="about-item-text">
                    Lorem Ipsum available, but the majority have suffered alteration in some.
                  </p>
                </div>

              </li>

            </ul>

            <a href="#" class="btn btn-primary">Booking Now</a>

          </div>

          <figure class="about-banner">
            <img src="./assets/images/about-banner.png" width="756" height="842" loading="lazy" alt="" class="w-100">
          </figure>

        </div>
      </section>

      <!-- About Us end -->

      <!-- Banner with data -->
      <br><br><br><br><br>
      <!-- <div class="banner3-background" alt="banner">
        <div class="top-circle-image">
          <p class="p-banner4 animate__animated animate__zoomIn">Why BALKATOUR is the best platform for traveling?</p>
          <center>
            <p class="p-banner04 animate__animated animate__zoomIn">The pourpes of this platform is to help tourist feel safe while visiting a new country, shop handmade pieces by locals, view where the bus is from your location etc. </p>
          </center>
          <div class="div-circle-image">
            <img src="./assets/images/100.png" class="circle-image animate__animated animate__zoomIn">
            <img src="./assets/images/20.1.png" class="circle-image animate__animated animate__zoomIn">
            <img src="./assets/images/20.2.png" class="circle-image animate__animated animate__zoomIn">
            <img src="./assets/images/40.png" class="circle-image animate__animated animate__zoomIn">
          </div>
        </div>
      </div> -->
      <!-- end of banner with data -->
      <!-- Tours -->
      <br><br><br>
      <section class="section popular">
        <div class="container">

          <p class="section-subtitle">Featured Tours</p>

          <h2 class="h2 section-title">Most Popular Tours</h2>

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
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>

                      <data value="2">(2)</data>
                    </div>
                  </div>

                  <h3 class="card-title">
                    <a href="#">A trip to Croatia's beaches is all you need to experience in this lifetime.</a>
                  </h3>

                  <address class="card-location">Zlatni Rat, Brač</address>

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
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                      <data value="3">(3)</data>
                    </div>
                  </div>
                  <h3 class="card-title">
                    <a href="#">Learn more about Albania's culture by visiting historical places. </a>
                  </h3>
                  <address class="card-location">Kruje, Albania</address>
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
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>

                      <data value="2">(7)</data>
                    </div>
                  </div>

                  <h3 class="card-title">
                    <a href="#">A good traveler has no fixed plans and is not intent on arriving.</a>
                  </h3>

                  <address class="card-location">Sozopol, Bulgaria</address>

                </div>

              </div>
            </li>
          </ul>

        </div>
      </section>
    </article>
  </main>



  <!-- 
    - #GO TO TOP
  -->
  <br><br>
  <?php include 'footer.php'?>

  <a href="#top" class="go-top" data-go-top aria-label="Go To Top">
    <ion-icon name="chevron-up-outline"></ion-icon>
  </a>
  <?php include 'script.php'?>
</body>

</html>