<nav class="navbar">
    <div class="logo">
        <a href="../index.php"><img src="../img/others/logo.png" alt="Logo"></a>
    </div>
    <div class="search-container">
        <img src="../img/others/lupa.png" alt="Search Icon" class="search-icon">
        <input type="text" placeholder="Search..." class="search-bar">
    </div>
    <ul class="menu">
        <li><a id="loginLink" href="../login.php"><?= isset($_SESSION['user_email'])? $_SESSION['user_email']: "Přihlásit se" ?> </a></li>
        <li>
            <a href="../shopingCart.php">
                <img src="../img/others/menu.png" alt="Menu Icon" class="menu-icon">
            </a>
        </li>
        <li><a href="../menu.php">Menu</a></li>
        <li><a href="../produkty.php">Produkty</a></li>
        <li><a href="#">Služby</a></li>
        <li><a href="../kontakt.php">Kontakt</a></li>
    </ul>
</nav>