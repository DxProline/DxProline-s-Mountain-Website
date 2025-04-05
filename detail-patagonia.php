<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patagonia SV - Detail produktu</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login.css">
    <script src="cart.js"></script>
    <script src="login.js"></script>
    <script src="common.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
</head>
<body>

    <!-- Video na pozadí -->
    <video autoplay muted loop class="video-background">
        <source src="patagoniaVid.mp4" type="video/mp4">
    </video>

<?php
require_once 'header.php';
    ?>

    <div class="product-detail">
        <h1>Patagonia SV</h1>
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
        <!-- Slides -->
         
        <div class="swiper-slide"><img src="BundaPatagonia/1pohled.webp" alt="Image 1" class="image" loading="lazy"></div>
        <div class="swiper-slide"><img src="BundaPatagonia/2pohled.webp" alt="Image 2" class="image" loading="lazy"></div>
        <div class="swiper-slide"><img src="BundaPatagonia/3pohled.webp" alt="Image 3" class="image" loading="lazy"></div>
            </div>
        
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
         
        </div>
        <p class="product-description">
            Bunda Patagonia SV je perfektní volbou pro expedice a outdoorové dobrodružství.
            Kombinuje lehkost, vysokou odolnost a skvělou ochranu proti dešti a větru, což ji činí ideální pro náročné podmínky.
        </p>

        <p class="product-price">Cena: 399 $</p>


        <form method="get" action="shopingCart.php" class="product-options">
            <label for="color">Barva:</label>
            <select id="color" name="color">
                <option value="oranzova">Oranžová</option>
                <option value="modra">Černá</option>
                <option value="zelena">Zelená</option>
            </select>

            <label for="size">Velikost:</label>
            <select id="size" name="size">
                <option value="s">S</option>
                <option value="m">M</option>
                <option value="l">L</option>
                <option value="xl">XL</option>
            </select>

            <button id="add-to-cart" onclick="addToCart('Patagonia SV', document.getElementById('color').value, 9672)">Přidat do košíku</button>
        </form>
    </div>

    <footer>
        <a href="index.php">Zpět na hlavní stránku</a>
    </footer>

</body>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="swiperConfig.js"></script>
</html>
