<?php

include 'db_connection.php';

if(isset($_GET['supplier_id'])) {
    $supplier_id = $_GET['supplier_id'];

    $sql = "DELETE FROM suppliers WHERE supplier_id=$supplier_id";
    if ($conn->query($sql) === TRUE) {
        header("Location: supplier.html");
        exit();
    } else {
        echo "Error deleting supplier: " . $conn->error;
    }
} else {
    header("Location: supplier.html");
    exit();
}
?>
