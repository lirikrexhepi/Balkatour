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
                            <h2 class="hero-title2">Traditional Clothing</h2>
                        </div>
                        <img src="./assets/images/man.png"
                            style="height: 330px; padding-top: 30px;" alt>
                    </div>
                </div>
            </div>
        </div>
        
    <center>
       <p class="section-subtitle" style="padding-top: 30px;">Choose the Region.</p>
    </center>

    <br><br>

    <center>
        <div class="div-img-jewlery">
            <div class="img-jewlery">
                <img src="./assets/images/kosova-clothes.jpg" alt="">
                <center> <p>Kosova</p></center>
            </div>
            <div class="img-jewlery">
                <img src="./assets/images/albania2.jpg" alt="">
                <center><p>Albania</p></center>
            </div>
            <div class="img-jewlery">
                <img src="./assets/images/mon1.jpg" alt="">
                <center> <p>Montenegro</p></center>
            </div>
            <div class="img-jewlery">
                <img src="./assets/images/mac1.jpg" alt="">
                <center><p>North Macedonia</p></center>
            </div>
            <div class="img-jewlery">
                <img src="./assets/images/bulg1.jpg" alt="">
                <center><p>Bulgaria</p></center>
            </div>
            <div class="img-jewlery">
                <img src="./assets/images/cro1.jpg" alt="">
                <center><p>Croatia</p></center>
            </div>
            <div class="img-jewlery">
                <img src="./assets/images/gre1.jpg" alt="">
                <center><p>Greece</p></center>
            </div>
        </div>
    </center>

<br><br><br>
    <div class="div-shop">
        <div class="div-inside-shop">
            <img src="./assets/images/kos1.jpg" alt="">
            <p class="text-jew">Kosova Men's traditional clothing.</p>
            <div class="card-rating">
                <ion-icon name="star"></ion-icon>
                <data value="4">(4)</data>    
            </div> 
            <div class="cmimi2">
                <p class="p1-cmimi">120$ </p> 
                <p class="from">from</p>
                <p class="p2-cmimi">230$</p>
            </div>

            <div class="buttons-jew">
                <button class="add-to-cart">Add To Cart</button>
                <a href="#" class="more-like-this">More like this -></a>
            </div>
        </div>

        <div class="div-inside-shop">
            <img src="./assets/images/kos2.jpg" alt="">
            <p  class="text-jew">Kosova Women's traditional clothing.</p>
            <div class="card-rating">
                <ion-icon name="star"></ion-icon>
                <data value="4">(4.7)</data>     
            </div>
            <div class="cmimi2">
                <p class="p1-cmimi">132$ </p> 
                <p class="from">from</p>
                <p class="p2-cmimi">240$</p>
            </div>

            <div class="buttons-jew">
                <button class="add-to-cart">Add To Cart</button>
                <a href="#" class="more-like-this">More like this -></a>
            </div>
        </div>

        <div class="div-inside-shop">
            <img src="./assets/images/alb1.jpg" alt="">
            <p class="text-jew">Albanian Men's traditional clothing.</p>
            <div class="card-rating">
                <ion-icon name="star"></ion-icon>
                <data value="4">(4)</data>
            </div>     
            <div class="cmimi2">
                <p class="p1-cmimi">150$ </p> 
                <p class="from">from</p>
                <p class="p2-cmimi">250$</p>
            </div>
           
            <div class="buttons-jew">
                <button class="add-to-cart">Add To Cart</button>
                <a href="#" class="more-like-this">More like this -></a>
            </div>
            <br><br>
        </div>

        <div class="div-inside-shop">
            <img src="./assets/images/alb2.jpg" alt="">
            <p class="text-jew">Albanian Women's traditional clothing.</p>
            <div class="card-rating">
                <ion-icon name="star"></ion-icon>
                <data value="3.7">(3.7)</data>     
            </div>
            <div class="cmimi2">
                <p class="p1-cmimi">150$ </p> 
                <p class="from">from</p>
                <p class="p2-cmimi">300$</p>
            </div>

            <div class="buttons-jew">
                <button class="add-to-cart">Add To Cart</button>
                <a href="#" class="more-like-this">More like this -></a>
            </div>
        </div>

        <div class="div-inside-shop">
            <img src="./assets/images/mon1.jpg" alt="">
            <p class="text-jew">Montenegrian Men's traditional clothing.</p>
            <div class="card-rating">
                <ion-icon name="star"></ion-icon>
                <data value="3.5">(3.5)</data>     
            </div>
            <div class="cmimi2">
                <p class="p1-cmimi">170$ </p> 
                <p class="from">from</p>
                <p class="p2-cmimi">250$</p>
            </div>

            <div class="buttons-jew">
                <button class="add-to-cart">Add To Cart</button>
                <a href="#" class="more-like-this">More like this -></a>
            </div>
        </div>

        <div class="div-inside-shop">
            <img src="./assets/images/mon2.jpg" alt="">
            <p class="text-jew">Montenegrian Women's traditional clothing.</p>
            <div class="card-rating">
                <ion-icon name="star"></ion-icon>
                <data value="3.7">(3.7)</data>           
            </div>
            <div class="cmimi2">
                <p class="p1-cmimi">157$ </p> 
                <p class="from">from</p>
                <p class="p2-cmimi"> 230$</p>
            </div>

            <div class="buttons-jew">
                <button class="add-to-cart">Add To Cart</button>
                <a href="#" class="more-like-this">More like this -></a>
            </div>            
            <br><br>
        </div>

        <div class="div-inside-shop">
            <img src="./assets/images/bulg1.jpg" alt="">
            <p class="text-jew">Bulgarian Women's traditional clothing.</p>
            <div class="card-rating">
                <ion-icon name="star"></ion-icon>
                <data value="3.4">(3.4)</data>  
            </div>   
            <div class="cmimi2">
                <p class="p1-cmimi">200$ </p> 
                <p class="from">from</p>
                <p class="p2-cmimi">305$</p>
            </div>

            <div class="buttons-jew">
                <button class="add-to-cart">Add To Cart</button>
                <a href="#" class="more-like-this">More like this -></a>
            </div>
        </div>

        <div class="div-inside-shop">
            <img src="./assets/images/bulg2.jpg" alt="">
            <p class="text-jew">Bulgarian Woman's traditional clothing.</p>
            <div class="card-rating">
                <ion-icon name="star"></ion-icon>
                <data value="4.2">(4.2)</data>   
            </div>  
            <div class="cmimi2">
                <p class="p1-cmimi">145$ </p> 
                <p class="from">from</p>
                <p class="p2-cmimi">220$</p>
            </div>

            <div class="buttons-jew">
                <button class="add-to-cart">Add To Cart</button>
                <a href="#" class="more-like-this">More like this -></a>
            </div>
        </div>

        <div class="div-inside-shop">
            <img src="./assets/images/cro1.jpg" alt="">
            <p class="text-jew">Croatia Man's traditional clothing.</p>
            <div class="card-rating">
                <ion-icon name="star"></ion-icon>
                <data value="3.2">(3.2)</data>  
            </div>   
            <div class="cmimi2">
                <p class="p1-cmimi">212$ </p> 
                <p class="from">from</p>
                <p class="p2-cmimi"> 340$</p>
            </div>

            <div class="buttons-jew">
                <button class="add-to-cart">Add To Cart</button>
                <a href="#" class="more-like-this">More like this -></a>
            </div>
            <br><br>

        </div>

        <div class="div-inside-shop">
            <img src="./assets/images/cro2.jpg" alt="">
            <p class="text-jew">Croatia woman's traditional clothing.</p>
            <div class="card-rating">
                <ion-icon name="star"></ion-icon>
                <data value="2.5">(2.5)</data>     
            </div>
            <div class="cmimi2">
                <p class="p1-cmimi">135$ </p>
                <p class="from">from</p>
                <p class="p2-cmimi">340$</p>
            </div>

            <div class="buttons-jew">
                <button class="add-to-cart">Add To Cart</button>
                <a href="#" class="more-like-this">More like this -></a>
            </div>
        </div>

        <div class="div-inside-shop">
            <img src="./assets/images/gre1.jpg" alt="">
            <p class="text-jew">Greece Woman's traditional clothing.</p>
            <div class="card-rating">
                <ion-icon name="star"></ion-icon>
                <data value="3.5">(3.5)</data> 
            </div>    
            <div class="cmimi2">
                <p class="p1-cmimi">210$ </p> 
                <p class="from">from</p>
                <p class="p2-cmimi">315$</p>
            </div>

            <div class="buttons-jew">
                <button class="add-to-cart">Add To Cart</button>
                <a href="#" class="more-like-this">More like this -></a>
            </div>
        </div>

        <div class="div-inside-shop">
            <img src="./assets/images/gre2.jpg" alt="">
            <p class="text-jew">Greece Man's traditional clothing.</p>
            <div class="card-rating">
                <ion-icon name="star"></ion-icon>
                <data value="4.7">(4.7)</data>     
            </div>
            <div class="cmimi2">
                <p class="p1-cmimi">150$ </p> 
                <p class="from">from</p>
                <p class="p2-cmimi">220$</p>
            </div>

            <div class="buttons-jew">
                <button class="add-to-cart">Add To Cart</button>
                <a href="#" class="more-like-this">More like this -></a>
            </div>
            <br>
        </div>        
    </div>

    <br><br>
    <?php include 'footer.php'; ?>

    <a href="#top" class="go-top" data-go-top aria-label="Go To Top">
        <ion-icon name="chevron-up-outline"></ion-icon>
    </a>
    <?php include 'script.php'; ?>
</body>
</html>
<script src="./js/script.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="./js/login.js"></script>
<script src="./js/chat.js"></script>