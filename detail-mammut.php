<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mammut Waymarker - Detail produktu</title>
    <link rel="stylesheet" href="style.css">
    <script src="js/cart.js"></script>
    <link rel="stylesheet" href="login.css">
    <script src="js/common.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
</head>
<body>

    <!-- Video na pozadí -->
    <video autoplay muted loop class="video-background">
        <source src="videa/MammutVid.mp4" type="video/mp4">
    </video>

<?php
require_once 'session.php';
require_once 'header.php';
?>

    <div class="product-detail">
        <h1>Mammut Waymarker</h1>
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
            <!-- Slides -->
             
            <div class="swiper-slide"><img src="BundaMammut/1pohled.jpeg" alt="Image 1" class="image" loading="lazy"></div>
            <div class="swiper-slide"><img src="BundaMammut/2pohled.jpeg" alt="Image 2" class="image" loading="lazy"></div>
            <div class="swiper-slide"><img src="BundaMammut/3pohled.jpeg" alt="Image 3" class="image" loading="lazy"></div>
                </div>
            
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
             
            </div>
        <p class="product-description">
            Bunda Mammut Waymarker je skvělou volbou pro náročné outdoorové aktivity.
            Její lehká konstrukce, robustní materiály a vynikající ochrana proti nepříznivému počasí poskytují komfort i v extrémních podmínkách.
        </p>

        <p class="product-price">Cena: 299 $</p>


        <form method="get" action="shopingCart.php" class="product-options">
            <label for="color">Barva:</label>
            <select id="color" name="color">
                <option value="cerna">Černá</option>
                <option value="Modrozelená">Modrozelená</option>
                <option disabled="true" value="zelena">Zelená - Vyprodáno</option>
            </select>

            <label for="size">Velikost:</label>
            <select id="size" name="size">
                <option value="xs">XS</option>
                <option disabled="true" value="s">S</option>
                <option value="m">M</option>
                <option value="l">L</option>
                <option value="xl">XL</option>
            </select>

            <button id="add-to-cart" onclick="addToCart('Mammut Waymarker', document.getElementById('color').value, 7555)">Přidat do košíku</button>
        </form>
    </div>

    <footer>
        <a href="index.php">Zpět na hlavní stránku</a>
    </footer>

</body>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="js/swiperConfig.js"></script>
</html>
