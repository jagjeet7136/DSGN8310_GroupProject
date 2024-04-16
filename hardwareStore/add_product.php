<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $description = $_POST['description'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $supplier_id = $_POST['supplier_id'];

    $sql = "INSERT INTO products (product_id, product_name, description, quantity, price, supplier_id) 
            VALUES ('$product_id', '$product_name', '$description', $quantity, $price, '$supplier_id')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: products.html");
        exit();
    } else {
        echo "Error adding product: " . $conn->error;
    }
} else {
    header("Location: products.html");
    exit();
}

$conn->close();
?>
