<?php
// db.php
try {
    $db = new PDO('sqlite:ecom.db');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $db->exec("CREATE TABLE IF NOT EXISTS products (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        name TEXT,
        description TEXT,
        price REAL,
        image TEXT
    )");
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    die();
}
?>
