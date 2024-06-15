<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
    $stmt = $db->prepare("SELECT * FROM products WHERE id = ?");
    $stmt->execute([$id]);
    $product = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($product) {
        echo "<h2>" . htmlspecialchars($product['name']) . "</h2>";
        echo "<p><strong>Name:</strong> " . htmlspecialchars($product['name']) . "</p>";
        echo "<p><strong>Description:</strong> " . htmlspecialchars($product['description']) . "</p>";
        echo "<p><strong>Price:</strong> " . htmlspecialchars($product['price']) . " €</p>";
    } else {
        echo "Product not found.";
    }
}
?>
