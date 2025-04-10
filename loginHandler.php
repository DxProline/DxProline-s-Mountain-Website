<?php
require_once 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Zabezpečení vstupů
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Neplatný email.";
        exit;
    }

    $db = new Database();
    $conn = $db->getConnection();

    try {
        // Zkontroluj, zda uživatel existuje
        $query = "SELECT password_hash FROM user WHERE email = :email";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            // Uživatel existuje, zkontroluj heslo
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if (password_verify($password, $row['password_hash'])) {
                header('Location: index.php');
            } else {
                echo "Špatné přihlašovací údaje.";
            }
        } else {
            // Uživatel neexistuje, vytvoř nového
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);
            $insertQuery = "INSERT INTO user (email, password_hash) VALUES (:email, :password_hash)";
            $insertStmt = $conn->prepare($insertQuery);
            $insertStmt->bindParam(':email', $email);
            $insertStmt->bindParam(':password_hash', $passwordHash);
            $insertStmt->execute();
            header('Location: index.php');
        }
    } catch (PDOException $e) {
        echo "Chyba při zpracování požadavku: " . $e->getMessage();
    }
}
?>