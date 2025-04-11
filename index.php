

<?php
require_once 'session.php';
require_once 'header.php';
    ?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEM -Eshop</title>
    <meta name="description" content="Eshop s horolezeckým vybavením">
    <meta name="keywords" content="MoutainEquipment, Mountain, Equipment, Eshop">
    <meta name="author" content="Dlabal Jiří">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/login.css">
</head>
<body>

    <div class="products-section">
        <h1>Produkty týdne:</h1>
        <div class="products">
            <div class="product">
                <a href="detail-arcteryx.php">
                    <h3>ArcTeryx Beta LT</h3>
                    <img src="img/others/ArcTeryxBetaLT.png" alt="ArcTeryx Beta LT" class="product-image">
                </a>
            </div>
            <div class="product">
                <a href="detail-mammut.php">
                    <h3>Mammut Waymarker</h3>
                    <img src="img/others/Mammut.png" alt="Mammut Waymarker" class="product-image">
                </a>
            </div>
            <div class="product">
                <a href="detail-patagonia.php">
                    <h3>Patagonia SV</h3>
                    <img src="img/others/Patagonia.png" alt="Patagonia SV" class="product-image">
                </a>
            </div>
        </div>
    </div>

</body>
</html>
