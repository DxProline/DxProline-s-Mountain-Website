<?php
require_once '../database.php';
require_once '../mailer.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['success' => false, 'message' => 'Neplatný formát e-mailu.']);
        exit;
    }

    $db = new Database();
    $conn = $db->getConnection();

    try {
        // Ověření existence e-mailu
        $query = "SELECT email FROM user WHERE email = :email";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            // Generování nového hesla
            $newPassword = bin2hex(random_bytes(4)); // 8 znaků
            $passwordHash = password_hash($newPassword, PASSWORD_DEFAULT);

            // Aktualizace hesla v databázi
            $updateQuery = "UPDATE user SET password_hash = :password_hash WHERE email = :email";
            $updateStmt = $conn->prepare($updateQuery);
            $updateStmt->bindParam(':password_hash', $passwordHash);
            $updateStmt->bindParam(':email', $email);
            $updateStmt->execute();

            // Odeslání e-mailu
            if (sendResetRecoveryPassword($email, $newPassword)) {
                echo json_encode(['success' => true, 'message' => 'Zkontrolujte svůj e-mail pro nové heslo.']);
            } else {
                echo json_encode(['success' => false, 'message' => 'Nepodařilo se odeslat e-mail.']);
            }
        } else {
            echo json_encode(['success' => false, 'message' => 'E-mail nebyl nalezen.']);
        }
    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'message' => 'Chyba serveru: ' . $e->getMessage()]);
    }
}
?>