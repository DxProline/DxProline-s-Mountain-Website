<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEM -Komplexní Formulář</title>
    <link rel="stylesheet" href="style.css">
    <script src="cart.js"></script>
    <link rel="stylesheet" href="login.css">
    <script src="login.js"></script>
    <script>
        window.onload = function() {
            loadCurrentUser();
            loadCart();
            document.getElementById('email').value = localStorage.getItem('currentUser');
        };
        function validateForm(event) {

            event.preventDefault();
            const nameInput = document.getElementById('name');
            const emailInput = document.getElementById('email');
            const phoneInput = document.getElementById('phone');
            let isValid = true;

            
            // Reset warnings
            const warnings = document.querySelectorAll('.warning');
            warnings.forEach(warning => warning.style.display = 'none');

            // Validate email
            if (!emailInput.value.includes('@')) {
                document.getElementById('email-warning').style.display = 'block';
                emailInput.style.borderColor = 'red';
                isValid = false;
            } else {
                emailInput.style.borderColor = '';
            }

            // Validate phone number
            if (!/^\d{9}$/.test(phoneInput.value)) {
                document.getElementById('phone-warning').style.display = 'block';
                phoneInput.style.borderColor = 'red';
                isValid = false;
            } else {
                phoneInput.style.borderColor = '';
            }

            if (isValid) {
                alert('Formulář byl úspěšně odeslán');
                document.getElementById('contact-form').reset();
            }
        }
    </script>
</head>
<body>
<?php
require_once 'header.php';
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
            <form id="contact-form" onsubmit="validateForm(event)" method="post">
                <div class="form-group">
                    <label for="name">Jméno</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                    <div class="warning" id="email-warning">Email musí obsahovat znak @</div>
                </div>
                <div class="form-group">
                    <label for="adress">Adress</label>
                    <input type="adress" id="adress" name="adress" required>
                    <div class="warning" id="email-warning">Email musí obsahovat znak @</div>
                </div>
                <div class="form-group">
                    <label for="phone">Telefonní číslo</label>
                    <input type="text" id="phone" name="phone" required>
                    <div class="warning" id="phone-warning">Telefonní číslo musí obsahovat 9 číslic.</div>
                </div>
                <button type="submit">Odeslat</button>
            </form>
        </div>
        </main>
</body>
</html>
