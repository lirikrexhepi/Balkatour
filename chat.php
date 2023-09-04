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
      <p class="section-subtitle" style="padding-top: 30px;">Chat Here</p>
    </center>

    <form action="">
      <div class="search-input">
        <input id="search" type="text" placeholder="location" />
      </div>
      <div class="search-button">
        <button class="btn-search" type="button">Search</button>
      </div>
    </form>

    <br>
    <div class="team-container">
      <div class="team-card">
        <center><img src="./assets/images/faces/face1.jpg" alt="Person 1"></center>
        <h2>Leart Ramadani</h2>
        <p>Kosova</p>
        <center><button id="chat" style="width: auto; background-color: #1BBC9B; padding: 10px 20px; color: white; border-radius: 5px; margin-top: 10px;">Chat Here</button></center>
      </div>
      <div class="team-card">
        <center><img src="./assets/images/faces/face2.jpg" alt="Person 2"></center>
        <h2>Gjin Prelvukaj</h2>
        <p>Bosnia</p>
        <center><button id="chat" style="width: auto; background-color: #1BBC9B; padding: 10px 20px; color: white; border-radius: 5px; margin-top: 10px;">Chat Here</button></center>
      </div>
    </div>

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