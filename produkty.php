<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEM -Produkty</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login.css">
    <script src="js/imageOpener.js"></script>
</head>
<body>

<?php
require_once 'session.php';
require_once 'header.php';
require_once 'database.php';

// Připojení k databázi
$db = new Database();
$conn = $db->getConnection();
//filtrované seznamy položek
// Načtení kategorií
$categoryQuery = "SELECT id, name FROM category";
$categoryStmt = $conn->prepare($categoryQuery);
$categoryStmt->execute();
$categories = $categoryStmt->fetchAll(PDO::FETCH_ASSOC);

// Získání vybrané kategorie z GET parametru
$selectedCategory = isset($_GET['category_id']) ? (int)$_GET['category_id'] : null;

// Načtení produktů podle vybrané kategorie
$productQuery = "SELECT * FROM product";
if ($selectedCategory) {
    $productQuery .= " WHERE category_id = :category_id";
}
$productStmt = $conn->prepare($productQuery);

if ($selectedCategory) {
    $productStmt->bindParam(':category_id', $selectedCategory, PDO::PARAM_INT);
}

$productStmt->execute();
$products = $productStmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="filter-section">
    <form method="GET" action="produkty.php">
        <label for="category">Filtrovat podle kategorie:</label>
        <select name="category_id" id="category" onchange="this.form.submit()">
            <!-- dropdown menu -->
            <option value="">Všechny kategorie</option>
            <?php foreach ($categories as $category): ?>
                <option value="<?= htmlspecialchars($category['id']) ?>" <?= $selectedCategory == $category['id'] ? 'selected' : '' ?>>
                    <?= htmlspecialchars($category['name']) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </form>
</div>

    <div class="imagefull" id="fullimgbox">
        <span onclick="closefullimg()" class="closeonclick">X</span>
        <span onclick="nextImage()" class="next-button">&#62;</span>
        <span onclick="ImageBefore()" class="before-button">&lt;</span>
        <img src="" alt="Full Image" id="fullimg">
    </div>
    
    <section class="products-section">
        <h2>Produkty</h2>
        <div class="products">
        <?php foreach ($products as $product):  ?>


            <div class="product">
                <img src="<?= htmlspecialchars($product['image_path']) ?>" onclick="openImgOnfull(this.src)" alt="<?= htmlspecialchars($product['name']) ?>" class="product-image">
                <h2><?= htmlspecialchars($product['name']) ?></h2>
                <p><?= htmlspecialchars($product['description']) ?></p>
            </div>


            <?php endforeach; ?>



        </div>
    </section>
    

</body>
</html>
