
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
    <title>About BalkaTour</title>
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
              <p class="section-subtitle2 testB">Explore Balkan</p>
              <h2 class="hero-title2">Want to know more about BalkaTour ?</h2>
            </div>
            <img src="./assets/images/man.png"
              style="height: 330px; padding-top: 30px;" alt>
          </div>
        </div>
      </div>
    </div>
    

    <section class="section about">
        <div class="container">

          <div class="about-content">

            <p class="section-subtitle">About BalkaTour</p>

            <h2 class="h2 section-title">Explore all tour of the balkan with us.</h2>

            <ul class="about-list">

              <li class="about-item">

               

                <div class="about-item-content">
                  <h3 class="h3 about-item-title">BalkaTour </h3>

                  <p class="about-item-text">
                  Say goodbye to generic tourist traps. We're here to guide you towards authentic experiences that will create lasting memories.
                  </p>
                </div>

              </li>

            </ul>

            <a href="#" class="btn btn-primary">Begin Your Journey</a>

          </div>

          <figure class="about-banner">
            <img src="./assets/images/About Us/foto2.avif" width="756" height="342" loading="lazy" alt="" class="w-100 rounded">
          </figure>

        </div>
      </section>


      <h1 id="down" class="section-subtitle">WHY   CHOOSE    US</h1>
      <section id="chooseUs">	
<article class="CU">
		<img class="zvogloj" src="./assets/images/About Us/rocket.png">
		<center><h1 >Discover</h1></center>
		<center><p >Uncover hidden gems effortlessly with BalkaTour, your ultimate travel companion.</p></center>
	</article>
		
	<article class="CU">
		<img class="zvogloj" src="./assets/images/About Us/certificate.png">
		<center><h1 >Accessible</h1></center>
		<center><p >Unlock a world of destinations with our user-friendly platform, simplifying your journey.</p></center>
	</article>
		
	<article class="CU">
		
		<img class="zvogloj"  src="./assets/images/About Us/light.png">
		<center><h1 >Comprehensive</h1></center>
		<center><p >Explore, dine, and stay – all in one place, making travel planning a breeze.</p></center>
	</article>
</section >

<?php include 'footer.php'; ?>

<a href="#top" class="go-top" data-go-top aria-label="Go To Top">
<ion-icon name="chevron-up-outline"></ion-icon>
</a>

<?php include 'script.php'; ?>


</body>
</html>