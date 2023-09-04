<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="./css/pop-up.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Comforter+Brush&family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
<header class="header" data-header>
    <div class="container">

      <a href="index.php">
        <h1 class="logo">BalkaTour</h1>
      </a>

      <button class="nav-toggle-btn" data-nav-toggle-btn aria-label="Toggle Menu">
        <ion-icon name="menu-outline" class="open"></ion-icon>
        <ion-icon name="close-outline" class="close"></ion-icon>
      </button>

      <nav class="navbar">

        <ul class="navbar-list" style="margin-top:-20px">

          <li>
            <a href="index.php" class="navbar-link">Home</a>
          </li>

          <li>
            <div class="dropdown">
              <button class="dropbtn" style="font-weight: 600;">About Us
                <ion-icon name="caret-down-outline"></ion-icon>
              </button>
              <div class="dropdown-content">
                <a href="ourTeam.php">BalkaTour</a>
                <a href="ourTeam.php">Our Team</a>
              </div>
            </div>
          </li>


          <li>
            <div class="dropdown">
              <button class="dropbtn" style="font-weight: 600;">Travel
                <ion-icon name="caret-down-outline"></ion-icon>
              </button>
              <div class="dropdown-content">
                <a href="tours.php">Tours</a>
                <a href="packetges.php">Packages</a>
                <a href="shop.php">Shop</a>
              </div>
            </div>
          </li>

          <li>
            <div class="dropdown" style="font-weight: 600;">
              <a class="dropbtn">Rent
                <ion-icon name="caret-down-outline"></ion-icon>
              </a>
              <div class="dropdown-content">
                <a href="./php/addHouse.php">Add a house</a>
                <a href="house.php">House</a>
                <a href="motel.php">Motel</a>
                <a href="apartament.php">Apartament</a>
              </div>
            </div>
          </li>

          <li>
            <a href="chat.php" class="navbar-link">Chat</a>
          </li>

        </ul>

        <div class="popup-container" style="margin-right: 5%;">
          <?php
          if (!isset($_SESSION['user'])) {
          ?>
            <label class="button-outline2" for="login-popup">Login</label>
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
      </nav>

    </div>
  </header>
</body>
</html>

