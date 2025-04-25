<nav class="navbar">
    <div class="logo">
        <a href="index.php"><img src="logo.png" alt="Začít obědnávat produkty"></a>
    </div>
    <div class="search-container">
        <img src="lupa.png" alt="Search Icon" class="search-icon">
        <input type="text" placeholder="Search..." class="search-bar" title="Vyhledejte produkty">
    </div>
    <ul class="menu">
        <li><a id="loginLink" href="login.php"><?= isset($_SESSION['user_email'])? $_SESSION['user_email']: "Přihlásit se" ?> </a></li>
        <li>
            <a href="shopingCart.php">
                <img src="menu.png" alt="Menu Icon" class="menu-icon">
            </a>
        </li>
        <li class="dropdown">
            <a href="menu.php" class="dropbtn">Menu</a>
            <ul class="dropdown-content">
                <li><a href="produkty.php">Produkty</a></li>
                <li><a href="#">Služby</a></li>
                <li><a href="kontakt.php">Kontakt</a></li>
            </ul>
        </li>
        <li><a href="produkty.php">Produkty</a></li>
        <li><a href="#">Služby</a></li>
        <li><a href="kontakt.php">Kontakt</a></li>
    </ul>
</nav>