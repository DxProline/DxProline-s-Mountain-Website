<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEM -Login</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/login.css">
    <script src="scripts/login.js"></script>
</head>
<body>

<?php
require_once 'share/header.php';
    ?> <!-- načítání headeru a footeru stránky z 1 souboru -->

    <div class="fullscreen-container">
        <div class="login-container">
            <h2>Přihlášení</h2>
            <form action="loginHandler.php" method="POST">
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" placeholder="Zadejte váš e-mail" required>
                    <div class="error" id="email-error">E-mail musí obsahovat znak @.</div>
                    <span id="email-error" class="error" style="display:none;">Neplatný email.</span>
                </div>
                <div class="form-group">
                    <label for="password">Heslo:</label>
                    <input type="password" id="password" name="password" placeholder="Zadejte vaše heslo" required>
                    <div class="error" id="password-error">Heslo nesmí být prázdné.</div>
                    <span id="password-error" class="error" style="display:none;">Heslo je povinné.</span>
                </div>
                <button type="submit" class="login-button">Přihlásit se</button>
            </form>
        </div>
    </div>
    

</body>
</html>
