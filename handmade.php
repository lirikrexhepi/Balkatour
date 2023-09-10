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
                            <h2 class="hero-title2">Handmade Jewlery</h2>
                        </div>
                        <img src="./assets/images/man.png"
                            style="height: 330px; padding-top: 30px;" alt>
                    </div>
                </div>
            </div>
        </div>
        
    <center>
       <p class="section-subtitle" style="padding-top: 30px;">Handmade Jewlery.</p>
    </center>

    <br><br>

    <center>
        <div class="div-img-jewlery">
            <div class="img-jewlery">
                <img src="./assets/images/ringw.avif" alt="">
                <center> <p>Rings</p></center>
            </div>
            <div class="img-jewlery">
                <img src="./assets/images/jew.jpg" alt="">
                <center><p>Necklace</p></center>
            </div>
            <div class="img-jewlery">
                <img src="./assets/images/earrings.jpg" alt="">
                <center> <p>Earrings</p></center>
            </div>
            <div class="img-jewlery">
                <img src="./assets/images/name-necklace.jpeg" alt="">
                <center><p>Name Necklace</p></center>
            </div>
            <div class="img-jewlery">
                <img src="./assets/images/a.jpg" alt="">
                <center><p>Initial Necklace</p></center>
            </div>
            <div class="img-jewlery">
                <img src="./assets/images/braclet.jpg" alt="">
                <center><p>Braclet</p></center>
            </div>
        </div>
    </center>

    <!-- <div class="selcet-div">
        <select name="" id="" class="select-jew">
            <option value="price">Price ($)</option>
            <option>Under 25$</option>
            <option>25$ to 75$</option>
            <option>75$ to 100$</option>
            <option>Over 100$</option>
        </select>
    
        <select name="" id="" class="select-jew">
            <option value="sellers">Sellers</option>
            <option>All Sellers</option>
            <option>Star Sellers Only</option>
        </select>
    </div> -->

<br><br><br>
    <div class="div-shop">
        <div class="div-inside-shop">
            <img src="./assets/images/jew1.jpg" alt="">
            <p class="text-jew">Beaded jewelry. Pearl bead necklace.</p>
            <div class="card-rating">
                <ion-icon name="star"></ion-icon>
                <data value="1.8">(1.8)</data>    
            </div> 
            <div class="cmimi">
                <p class="p1-cmimi">20$ </p> 
                <p class="from">from</p>
                <p class="p2-cmimi">30$</p>
            </div>

            <div class="buttons-jew">
                <button class="add-to-cart">Add To Cart</button>
                <a href="#" class="more-like-this">More like this -></a>
            </div>
        </div>

        <div class="div-inside-shop">
            <img src="./assets/images/jew2.jpg" alt="">
            <p  class="text-jew">Beaded jewelry. Flower necklace.</p>
            <div class="card-rating">
                <ion-icon name="star"></ion-icon>
                <data value="2.7">(2.7)</data>     
            </div>
            <div class="cmimi">
                <p class="p1-cmimi">32$ </p> 
                <p class="from">from</p>
                <p class="p2-cmimi">40$</p>
            </div>

            <div class="buttons-jew">
                <button class="add-to-cart">Add To Cart</button>
                <a href="#" class="more-like-this">More like this -></a>
            </div>
        </div>

        <div class="div-inside-shop">
            <img src="./assets/images/jew4.jpg" alt="">
            <p class="text-jew">Beaded jewelry. White and gold bead braclet.</p>
            <div class="card-rating">
                <ion-icon name="star"></ion-icon>
                <data value="4.7">(4.7)</data>
            </div>     
            <div class="cmimi">
                <p class="p1-cmimi">15$ </p> 
                <p class="from">from</p>
                <p class="p2-cmimi">25$</p>
            </div>
           
            <div class="buttons-jew">
                <button class="add-to-cart">Add To Cart</button>
                <a href="#" class="more-like-this">More like this -></a>
            </div>
            <br><br>
        </div>

        <div class="div-inside-shop">
            <img src="./assets/images/jew3.jpg" alt="">
            <p class="text-jew">Beaded jewelry. Pearl and gold bead necklace.</p>
            <div class="card-rating">
                <ion-icon name="star"></ion-icon>
                <data value="4.2">(4.2)</data>     
            </div>
            <div class="cmimi">
                <p class="p1-cmimi">15$ </p> 
                <p class="from">from</p>
                <p class="p2-cmimi">30$</p>
            </div>

            <div class="buttons-jew">
                <button class="add-to-cart">Add To Cart</button>
                <a href="#" class="more-like-this">More like this -></a>
            </div>
        </div>

        <div class="div-inside-shop">
            <img src="./assets/images/jew5.jpg" alt="">
            <p class="text-jew">Beaded jewelry. White pearls braclet.</p>
            <div class="card-rating">
                <ion-icon name="star"></ion-icon>
                <data value="2.3">(2.3)</data>     
            </div>
            <div class="cmimi">
                <p class="p1-cmimi">17$ </p> 
                <p class="from">from</p>
                <p class="p2-cmimi">25$</p>
            </div>

            <div class="buttons-jew">
                <button class="add-to-cart">Add To Cart</button>
                <a href="#" class="more-like-this">More like this -></a>
            </div>
        </div>

        <div class="div-inside-shop">
            <img src="./assets/images/jew6.jpg" alt="">
            <p class="text-jew">Beaded jewelry. Gold Wire and white pearl rings</p>
            <div class="card-rating">
                <ion-icon name="star"></ion-icon>
                <data value="3.7">(3.7)</data>           
            </div>
            <div class="cmimi">
                <p class="p1-cmimi">12$ </p> 
                <p class="from">from</p>
                <p class="p2-cmimi"> 20$</p>
            </div>

            <div class="buttons-jew">
                <button class="add-to-cart">Add To Cart</button>
                <a href="#" class="more-like-this">More like this -></a>
            </div>            <br><br>

        </div>

        <div class="div-inside-shop">
            <img src="./assets/images/jew8.jpg" alt="">
            <p class="text-jew">Beaded jewlery. Gold Wire and white bead earrings.</p>
            <div class="card-rating">
                <ion-icon name="star"></ion-icon>
                <data value="3.4">(3.4)</data>  
            </div>   
            <div class="cmimi">
                <p class="p1-cmimi">20$ </p> 
                <p class="from">from</p>
                <p class="p2-cmimi">35$</p>
            </div>

            <div class="buttons-jew">
                <button class="add-to-cart">Add To Cart</button>
                <a href="#" class="more-like-this">More like this -></a>
            </div>
        </div>

        <div class="div-inside-shop">
            <img src="./assets/images/jew7.jpg" alt="">
            <p class="text-jew">Gold Wire rings</p>
            <div class="card-rating">
                <ion-icon name="star"></ion-icon>
                <data value="4.2">(4.2)</data>   
            </div>  
            <div class="cmimi">
                <p class="p1-cmimi">15$ </p> 
                <p class="from">from</p>
                <p class="p2-cmimi">20$</p>
            </div>

            <div class="buttons-jew">
                <button class="add-to-cart">Add To Cart</button>
                <a href="#" class="more-like-this">More like this -></a>
            </div>
        </div>

        <div class="div-inside-shop">
            <img src="./assets/images/jew9.jpg" alt="">
            <p class="text-jew">Beaded jewlery. Colorful Sunflower earrings.</p>
            <div class="card-rating">
                <ion-icon name="star"></ion-icon>
                <data value="2.5">(2.5)</data>  
            </div>   
            <div class="cmimi">
                <p class="p1-cmimi">22$ </p> 
                <p class="from">from</p>
                <p class="p2-cmimi"> 40$</p>
            </div>

            <div class="buttons-jew">
                <button class="add-to-cart">Add To Cart</button>
                <a href="#" class="more-like-this">More like this -></a>
            </div>
            <br><br>

        </div>

        <div class="div-inside-shop">
            <img src="./assets/images/jew10.jpg" alt="">
            <p class="text-jew">Beaded jewlery. White pearl sunflower earrings.</p>
            <div class="card-rating">
                <ion-icon name="star"></ion-icon>
                <data value="2.5">(2.5)</data>     
            </div>
            <div class="cmimi">
                <p class="p1-cmimi">15$ </p>
                <p class="from">from</p>
                <p class="p2-cmimi">30$</p>
            </div>

            <div class="buttons-jew">
                <button class="add-to-cart">Add To Cart</button>
                <a href="#" class="more-like-this">More like this -></a>
            </div>
        </div>

        <div class="div-inside-shop">
            <img src="./assets/images/jew12.jpg" alt="">
            <p class="text-jew">Beaded jewlery. Gold wire and white pearl ring.</p>
            <div class="card-rating">
                <ion-icon name="star"></ion-icon>
                <data value="3.2">(3.2)</data> 
            </div>    
            <div class="cmimi">
                <p class="p1-cmimi">10$ </p> 
                <p class="from">from</p>
                <p class="p2-cmimi">  15$</p>
            </div>

            <div class="buttons-jew">
                <button class="add-to-cart">Add To Cart</button>
                <a href="#" class="more-like-this">More like this -></a>
            </div>
        </div>

        <div class="div-inside-shop">
            <img src="./assets/images/jew11.jpg" alt="">
            <p class="text-jew">Gold Wire Wrapped Crystal Teardrop Dangles</p>
            <div class="card-rating">
                <ion-icon name="star"></ion-icon>
                <data value="5">(5)</data>     
            </div>
            <div class="cmimi">
                <p class="p1-cmimi">10$ </p> 
                <p class="from">from</p>
                <p class="p2-cmimi">20$</p>
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