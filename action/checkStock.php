<?php
require_once '../database.php';

if (isset($_GET['id'])) {
    $productId = (int)$_GET['id'];

    $db = new Database();
    $conn = $db->getConnection();

    $query = "SELECT stock FROM product WHERE id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id', $productId, PDO::PARAM_INT);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        echo json_encode(['success' => true, 'stock' => $result['stock']]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Produkt nenalezen.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Neplatný požadavek.']);
}