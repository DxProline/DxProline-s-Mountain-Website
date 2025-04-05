<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEM -Eshop</title>
    <meta name="description" content="Eshop s horolezeckým vybavením">
    <meta name="keywords" content="MoutainEquipment, Mountain, Equipment, Eshop">
    <meta name="author" content="Dlabal Jiří">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login.css">
    <script src="login.js"></script>
    <script>
        window.onload = loadCurrentUser;
    </script>
</head>
<body>

    <div data-include="header.php"></div> <!-- načítání headeru a footeru stránky z 1 souboru -->
    <div data-include="footer.php"></div> <!-- načítání headeru a footeru stránky z 1 souboru -->
    <nav class="navbar">
        <div class="logo">
            <a href="index.php"><img src="logo.png" alt="Logo"></a>
        </div>
        <div class="search-container">
            <img src="lupa.png" alt="Search Icon" class="search-icon">
            <input type="text" placeholder="Search..." class="search-bar">
        </div>
        <ul class="menu">
            <li><a id="loginLink" href="login.php">Přihlásit se</a></li>
            <li>
                <a href="shopingCart.php">
                    <img src="menu.png" alt="Menu Icon" class="menu-icon">
                </a>
            </li>
            
            <li><a href="menu.php">Menu</a></li>
            <li><a href="produkty.php">Produkty</a></li>
            <li><a href="#">Služby</a></li>
            <li><a href="kontakt.php">Kontakt</a></li>
        </ul>
    </nav>

    <div class="products-section">
        <h1>Produkty týdne:</h1>
        <div class="products">
            <div class="product">
                <a href="detail-arcteryx.php">
                    <h3>ArcTeryx Beta LT</h3>
                    <img src="ArcTeryxBetaLT.png" alt="ArcTeryx Beta LT" class="product-image">
                </a>
            </div>
            <div class="product">
                <a href="detail-mammut.php">
                    <h3>Mammut Waymarker</h3>
                    <img src="Mammut.png" alt="Mammut Waymarker" class="product-image">
                </a>
            </div>
            <div class="product">
                <a href="detail-patagonia.php">
                    <h3>Patagonia SV</h3>
                    <img src="Patagonia.png" alt="Patagonia SV" class="product-image">
                </a>
            </div>
        </div>
    </div>

</body>
</html>
