<?php
include 'db_connection.php';

if(isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];

    $sql = "DELETE FROM products WHERE product_id=$product_id";
    if ($conn->query($sql) === TRUE) {
        header("Location: products.html");
        exit();
    } else {
        echo "Error deleting product: " . $conn->error;
    }
} else {
    header("Location: products.html");
    exit();
}
?>
