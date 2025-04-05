<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEM -Produkty</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login.css">
    <script src="login.js"></script>
    <script>
        window.onload = loadCurrentUser;
    </script>
</head>
<body>

<?php
require_once 'header.php';
    ?>
    
    <section class="products-section">
        <h2>Produkty</h2>
        <div class="products">
            <div class="product">
                <img src="/Praxe_Web/produkty/xeros.jpg" alt="spacak" class="product-image">
                <p>Spacák Xeros</p>
                <p>Xeros je špičkový lezecký spacák značky Mountain Equipment vhodný pro klasický alpinismus. Lehký, voděodolný a dostatečně teplý, pro lezení ve velké stěně.</p>
            </div>
            <div class="product">
                
                <img src="/Praxe_Web/produkty/Svycarak.jpg" alt="svycarak" class="product-image">
                <p>Švýcarský Nůž Spartan</p>
                <p>Kapesní nůž s odtlačnou pojistkou čepele. Délka v zavřeném stavu 9,1 cm. 11 funkcí.</p>
            </div>
            <div class="product">
                <img src="/Praxe_Web/produkty/batoh.jpg" alt="batoh" class="product-image">
                <p>Batoh CIRQUE</p>
                <p>Batoh CIRQUE od značky Black Diamond je objemnější člen rodiny Cirque, díky čemuž zvládne i dvoudenní skialpinistické výzvy.</p>
            </div>
        </div>
    </section>
    

</body>
</html>
