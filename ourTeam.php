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
    <title>Our Team</title>
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
    <div class="page-banner bg-image"
      style="height:350px;background-image: url(./assets/images/banner.jpg);">
      <div class="banner-section">
        <div class="container  fadeInUp">
          <div
            style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap;">
            <div style="display: block;">
              <p class="section-subtitle2">Explore Balkan</p>
              <h2 class="hero-title2">Want to meet Our Team ?</h2>
            </div>
            <img src="./assets/images/man.png"
              style="height: 330px; padding-top: 30px;" alt>
          </div>
        </div>
      </div>
    </div>

    <center>
      <p class="section-subtitle" style="padding-top: 30px;">Our Team of
        Developers</p>
    </center>
    <br><br>
    <div class="row" style="display: flex; justify-content: space-around;align-items:flex-start;flex-wrap:  wrap;">
      <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
        <div class="advisor_thumb"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt>
          <div class="social-info"><a href="#"><i class="fa fa-facebook"></i></a><a><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
        </div>
        <div class="single_advisor_details_info">
          <h4>Lirik Rexhepi</h4>
          <p class="designation">Team Leader, Developer & Co Founder</p>
        </div>
      </div>
      <!-- Second Div -->
      <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
        <div class="advisor_thumb"><img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt>
          <div class="social-info"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
        </div>
        <div class="single_advisor_details_info">
          <h4>Edonis Bislimi</h4>
          <p class="designation">Developer & Co Founder</p>
        </div>
      </div>
      <!-- Third Div -->

      <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
        <div class="advisor_thumb"><img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt>
          <div class="social-info"><a href="#"><i class="fa fa-facebook"></i></a><a  href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
        </div>
        
        <div class="single_advisor_details_info">
          <h4>Gjin Prelvukaj <h4>
          <p class="designation">Developer & Co Founder</p>
        </div>
      </div>
  </div>
  
  <div class="row" style="display: flex; justify-content: space-around;align-items:flex-start;flex-wrap:  wrap;">
      <div class="single_advisor_profile wow fadeInUp"data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
        <div class="advisor_thumb"><img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt>
          <div class="social-info"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
        </div>
        
        <div class="single_advisor_details_info">
          <h4>Leart Ramadani</h4>
          <p class="designation">Developer & Co Founder</p>
        </div>
      </div>
      
      <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
        <div class="advisor_thumb"><img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt>
          <div class="social-info"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
        </div>

        <div class="single_advisor_details_info">
          <h4>Vesa Susuri<h4>
          <p class="designation">Developer & Co Founder</p>
        </div>
      </div>

</div>
      <?php include 'footer.php'; ?>

      <a href="#top" class="go-top" data-go-top aria-label="Go To Top">
      <ion-icon name="chevron-up-outline"></ion-icon>
      </a>

      <?php include 'script.php'; ?>
</body>
</html>