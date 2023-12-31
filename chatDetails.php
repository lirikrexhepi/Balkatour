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
  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Comforter+Brush&family=Heebo:wght@400;500;600;700&display=swap"rel="stylesheet">
</head>
<body id="top">
  <?php include 'navbar.php' ?>
    <div class="page-banner bg-image" style="height:350px;background-image: url(./assets/images/banner.jpg);">
      <div class="banner-section">
        <div class="container  fadeInUp">
          <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap;">
            <div style="display: block;">
              <p class="section-subtitle2">Explore Balkan</p>
              <h2 class="hero-title2">Chat to locals!</h2>
            </div>
            <img src="./assets/images/man.png" style="height: 330px; padding-top: 30px;" alt="">
          </div>
        </div> 
      </div>
    </div> 

    <center>
      <p class="section-subtitle" style="padding-top: 30px;">Chat here with a local from Prizren</p>
    </center>
    <section class="about-us">
      <div class="about">
        <img src="./assets/images/faces/face1.jpg" class="pic">
        <div class="text">
          <h2>About <span>Leart Ramadani</span></h2>
          <h5>Prizren, Kosova</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita natus ad sed harum itaque ullam enim quas, veniam accusantium, quia animi id eos adipisci iusto molestias asperiores explicabo cum vero atque amet corporis! Soluta illum facere consequuntur magni. </p>
          <a href="https://www.instagram.com/"><button class="hire">Follow on Social Media</button></a>
        </div>
      </div>
    </section>

    <script>
        (function(t,a,l,k,j,s){
        s=a.createElement('script');s.async=1;s.src="https://cdn.talkjs.com/talk.js";a.head.appendChild(s)
        ;k=t.Promise;t.Talk={v:3,ready:{then:function(f){if(k)return new k(function(r,e){l.push([f,r,e])});l
        .push([f])},catch:function(){return k&&new k()},c:l}};})(window,document,[]);
    </script>

    <br><br>
    <?php include 'footer.php'?>
    <a href="#top" class="go-top" data-go-top aria-label="Go To Top">
        <ion-icon name="chevron-up-outline"></ion-icon>
    </a>
    <?php include 'script.php'?>

</body>
</html>