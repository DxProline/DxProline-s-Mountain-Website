<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEM -Komplexní Formulář</title>
    <link rel="stylesheet" href="style.css">
    <script src="js/cart.js"></script>
    <link rel="stylesheet" href="login.css">
    <script src="js/komplexniForm.js"></script>
</head>
<body>
<?php
require_once 'session.php';
require_once 'header.php';
require_once 'database.php';

// htmlspecialchars brání XSS útokům
$name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : '';
$email = isset($_GET['email']) ? htmlspecialchars($_GET['email']) : '';
$address = isset($_GET['address']) ? htmlspecialchars($_GET['address']) : '';
$phone = isset($_GET['phone']) ? htmlspecialchars($_GET['phone']) : '';
$remark = isset($_GET['remark']) ? htmlspecialchars($_GET['remark']) : '';

if ($email == ""){
    $email = isset($_SESSION['user_email']) ? $_SESSION['user_email'] : '';
}


    ?>
    <main class="site-center">
        <div class="header-container">
            <h1>Košík</h1>
            <table id="cart-table">
                <thead>
                    <tr>
                        <th>Název: </th>
                        <th>Barva: </th>
                        <th>Počet: </th>
                        <th>Cena(Kč): </th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Obsah košíku se načte zde -->
                </tbody>
            </table>
    
            <h2 id="total-price"></h2>
        </div>
    
        <div class="form-container">
            <h2>Objednávka</h2>
            <form id="contact-form" onsubmit="validateForm(event)" method="post" action="action/createOrder.php">
                <div class="form-group">
                    <label for="name">Jméno</label>
                    <!--Neztrácí se uživatelem vyplněné hodnty -->
                    <input type="text" id="name" name="name" required value="<?= $name ?>">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required value="<?= $email ?>">
                    <div class="warning" id="email-warning">Email musí obsahovat znak @</div>
                </div>
                <div class="form-group">
                    <label for="address">Adresa</label>
                    <input type="address" id="address" name="address" required value="<?= $address ?>">
                    <div class="warning" id="email-warning">Email musí obsahovat znak @</div>
                </div>
                <div class="form-group">
                    <label for="phone">Telefonní číslo</label>
                    <input type="text" id="phone" name="phone" required value="<?= $phone ?>">
                    <div class="warning" id="phone-warning">Telefonní číslo musí obsahovat 9 číslic.</div>
                </div>
                <div class="form-group">
                    <label for="remark">Poznámka *Nepovinné</label>
                    <input type="text" id="remark" name="remark" value="<?= $remark ?>">
                </div>
                <button type="submit">Odeslat</button>
            </form>
        </div>
        </main>
</body>
</html>
