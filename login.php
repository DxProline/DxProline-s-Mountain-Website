<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEM -Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login.css">
    <script src="js/login.js" defer></script>
</head>
<body>

<?php
require_once 'header.php';
    ?> <!-- načítání headeru a footeru stránky z 1 souboru -->

    <div class="fullscreen-container">
        <div class="login-container">
            <h2>Přihlášení</h2>
            <form action="action/loginHandler.php" method="POST">
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <!-- htmlspecialchars brání XSS útokům -->
                    <input type="email" id="email" name="email" placeholder="Zadejte váš e-mail" required
                           value="<?php echo isset($_GET['email']) ? htmlspecialchars($_GET['email']) : ''; ?>">
                    <?php if (isset($_GET['error']) && $_GET['error'] === 'invalid_email'): ?>
                        <div class="error-message">
                            Nesprávný formát emailu.
                        </div>
                    <?php endif; ?>
                    <div class="error" id="email-error">E-mail musí obsahovat znak @.</div>
                    <span id="email-error" class="error" style="display:none;">Neplatný email.</span>
                </div>
                <div class="form-group">
                    <label for="password">Heslo:</label>
                    <input type="password" id="password" name="password" placeholder="Zadejte vaše heslo" required>
                    <?php if (isset($_GET['error']) && $_GET['error'] === 'invalid_password'): ?>
                        <div class="error-message">
                            Nesprávné heslo. Zkuste to prosím znovu.
                        </div>
                    <?php endif; ?>
                    <div class="error" id="password-error">Heslo nesmí být prázdné.</div>
                    <span id="password-error" class="error" style="display:none;">Heslo je povinné.</span>
                </div>
                <button type="submit" class="login-button">Přihlásit se</button>
            </form>
            <div class="form-group">
                <a href="forgotPassword.php" class="forgot-password-link">Zapomněli jste heslo?</a>
            </div>
        </div>
        <div class="form-group">
            <button id="theme-toggle" class="login-button">Změna na černý styl</button>
        </div>
    </div>


</body>
</html>
