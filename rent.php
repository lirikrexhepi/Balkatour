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
  <header class="header" data-header>
    <div class="container">
      <a href="#">
        <h1 class="logo">BalkaTour</h1>
      </a>

      <button class="nav-toggle-btn" data-nav-toggle-btn aria-label="Toggle Menu">
        <ion-icon name="menu-outline" class="open"></ion-icon>
        <ion-icon name="close-outline" class="close"></ion-icon>
      </button>

      <nav class="navbar">
        <ul class="navbar-list">

          <li>
            <a href="index.php" class="navbar-link">Home</a>
          </li>

          <li>
            <a href="#" class="navbar-link">About Us</a>
            <!-- <select name="" id="" class="navbar-link">
    <option value="">Our Team</option>
  </select> -->
          </li>


          <li>
            <div class="dropdown">
              <button class="dropbtn">Travel
                <ion-icon name="caret-down-outline"></ion-icon>
              </button>
              <div class="dropdown-content">
                <a href="#">Tours</a>
                <a href="#">Packages</a>
                <a href="#">Shop</a>
              </div>
            </div>
          </li>

          <li>
            <a href="chat.html" class="navbar-link">Chat</a>
          </li>

          <li>
            <div class="dropdown">
              <a class="dropbtn">Rent
                <ion-icon name="caret-down-outline"></ion-icon>
              </a>
              <div class="dropdown-content">
                <a href="#">Add a hosue</a>
                <a href="rent.php">House</a>
                <a href="#">Motel</a>
                <a href="#">Apartament</a>
              </div>
            </div>
          </li>


        </ul>

        <div class="popup-container" style="margin-right: 5%;">
          <?php
          if (!isset($_SESSION['user'])) {
          ?>
            <label class="navbar-link" for="login-popup">Login</label>
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

          <?php } else {  ?>
            <label class="navbar-link" for="login-popup"><?php echo $_SESSION['user']; ?></label>
            <input type="checkbox" id="login-popup">
            <div class="popup">
              <label for="login-popup" class="transparent-label"></label>
              <div class="popup-inner">
                <div class="popup-title">
                  <h6>Profile:<?= $_SESSION['user']; ?></h6>
                  <label for="login-popup" class="popup-close-btn">Close</label>
                </div>
                <div class="popup-content">
                  <form action="" method="POST">
                    <ul>
                      <li>
                        <button type="submit" name="logout" class="login">Log out</button>
                      </li>
                    </ul>
                  </form>
                </div>
              </div>
            <?php } ?>
            </div>
        </div>
  </header>

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


  <section class="section popular">
    <div class="container">
      <ul class="popular-list">
        <center>
          <p class="section-subtitle" style="padding-top: 30px;">Rent House's Here</p>
        </center>

        <li>
          <div class="popular-card">

            <figure class="card-banner">
              <a href="#">
                <img src="./assets/images/croatia2.jpg" width="740" height="518" loading="lazy" alt="Kuala Lumpur, Malaysia" class="img-cover">
              </a>
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
                <img src="./assets/images/rent/house1.jpg" width="740" height="518" loading="lazy" alt="Kuala Lumpur, Malaysia" class="img-cover">
              </a>
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
                <a href="#">HAVANA HOUSE 4</a>
              </h3>

              <address class="card-location">Lezhe Shkoder, Albania</address>

            </div>

          </div>
        </li>
      </ul>

    </div>
  </section>

  <br><br><br>
  <footer class="footer" style="background-image: url('./assets/images/footer-bg.png')">
    <div class="container">

      <div class="footer-top">

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Top destination</p>
          </li>

          <li>
            <a href="#" class="footer-link">Rugove, Kosova</a>
          </li>

          <li>
            <a href="#" class="footer-link">Sarande, Albania</a>
          </li>

          <li>
            <a href="#" class="footer-link">Zagreb, Croatia</a>
          </li>

          <li>
            <a href="#" class="footer-link">Mykonos, Greece</a>
          </li>

          <li>
            <a href="#" class="footer-link">Prekaz, Kosova</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Categories</p>
          </li>

          <li>
            <a href="#" class="footer-link">Travel</a>
          </li>

          <li>
            <a href="#" class="footer-link">Lifestyle</a>
          </li>

          <li>
            <a href="#" class="footer-link">Fashion</a>
          </li>

          <li>
            <a href="#" class="footer-link">Education</a>
          </li>

          <li>
            <a href="#" class="footer-link">Packetges</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Quick links</p>
          </li>

          <li>
            <a href="#" class="footer-link">About</a>
          </li>

          <li>
            <a href="#" class="footer-link">Contact</a>
          </li>

          <li>
            <a href="#" class="footer-link">Tours</a>
          </li>

          <li>
            <a href="#" class="footer-link">Booking</a>
          </li>

          <li>
            <a href="#" class="footer-link">Terms & Conditions</a>
          </li>

        </ul>

        <div class="footer-list">

          <p class="footer-list-title">Get a newsletter</p>

          <p class="newsletter-text">
            For the latest deals and tips, travel no further than your inbox
          </p>

          <form action="" class="newsletter-form">
            <input type="email" name="email" required placeholder="Email address" class="newsletter-input">

            <button type="submit" class="btn btn-primary">Subscribe</button>
          </form>

        </div>

      </div>

      <div class="footer-bottom">

        <a href="#" class="logo">BalkaTour</a>

        <p class="copyright">
          &copy; 2023 <a href="#" class="copyright-link">BalkaTour</a>. All Rights Reserved
        </p>

        <ul class="social-list">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-google"></ion-icon>
            </a>
          </li>

        </ul>

      </div>

    </div>
  </footer>
  <a href="#top" class="go-top" data-go-top aria-label="Go To Top">
    <ion-icon name="chevron-up-outline"></ion-icon>
  </a>
  <script src="./js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <!-- JQuery link -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="./js/login.js"></script>
</body>

</html>