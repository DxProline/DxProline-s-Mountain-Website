<?php
require_once '../database.php'; // Připojení k databázi

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Získání dat z formuláře
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $remark = isset($_POST['remark']) ? $_POST['remark'] : null;

    $db = new Database();
    $conn = $db->getConnection();

    // Příprava SQL dotazu
    $sql = "INSERT INTO orders (name, email, address, phone, remark) VALUES (:name, :email, :address, :phone, :remark)";
    $stmt = $conn->prepare($sql);

    // Bind parametrů a provedení dotazu
    $stmt->bindValue(':name', $name);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':address', $address);
    $stmt->bindValue(':phone', $phone);
    $stmt->bindValue(':remark', $remark);


    if ($stmt->execute()) {
        header('Location: ../komplexniForm.php?success=1');

    } else {
        echo "Chyba při ukládání objednávky: " . $stmt->error;
    }

    // Uzavření statementu a připojení
    $stmt= null;
    $conn= null;


}
?>