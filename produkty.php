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

// Načtení dat o produktech
$query = "SELECT * FROM product";
$stmt = $conn->prepare($query);
$stmt->execute();
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>



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
