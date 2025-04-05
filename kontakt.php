<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEM -Kontakt</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login.css">
    <script src="login.js"></script>
    <script>
        window.onload = loadCurrentUser;
    </script>
</head>
<body>

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
    
    <div class="white-block">
        <section id="contact">
            <h2>Kontakt</h2>
            <p>HAVE A QUESTION FOR OUR TEAM?</p>
            </address>
            <p>Our Customer Service Representatives are here to support you. Currently, our estimated response time is 2-3 business days.:</p>
            <ul>
                <li><a href="https://www.facebook.com/arcteryx/?locale=cs_CZ">Facebook</a></li>
                <li><a href="https://www.instagram.com/arcteryx/?hl=cs">Instagram</a></li>
            </ul>
        </section>
    </div>

</body>
</html>
