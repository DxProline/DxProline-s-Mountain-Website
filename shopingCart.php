    <!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEM -shopingCart</title>
    <link rel="stylesheet" href="style.css">
    <script src="cart.js"></script>
    <link rel="stylesheet" href="login.css">
    <script src="login.js"></script>
    <script>
        window.onload = function() {
            loadCurrentUser();
            loadCart();
        };
    </script>
</head>
<body>
<?php
require_once 'header.php';
    ?>
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

<h2 id="total-price">Celková cena: 0 Kč</h2>

<div class="button-container">
    <button onclick="proceedToCheckout()">Checkout</button>
    <button id="clear-button" onclick="clearCart()">Clear</button>
</div>
</body>

