<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEM -Login</title>
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
    ?> <!-- načítání headeru a footeru stránky z 1 souboru -->

    <div class="fullscreen-container">
        <div class="login-container">
            <h2>Přihlášení</h2>
            <form onsubmit="validateLogin(event)">
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" placeholder="Zadejte váš e-mail" required>
                    <div class="error" id="email-error">E-mail musí obsahovat znak @.</div>
                </div>
                <div class="form-group">
                    <label for="password">Heslo:</label>
                    <input type="password" id="password" name="password" placeholder="Zadejte vaše heslo" required>
                    <div class="error" id="password-error">Heslo nesmí být prázdné.</div>
                </div>
                <button type="submit" onclick="login()" class="login-button">Přihlásit se</button>
            </form>
        </div>
    </div>
    

</body>
</html>
