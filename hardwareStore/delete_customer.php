<?php

include 'db_connection.php';

if(isset($_GET['customer_id'])) {
    $customer_id = $_GET['customer_id'];

    $sql = "DELETE FROM customers WHERE customer_id=$customer_id";
    if ($conn->query($sql) === TRUE) {
        header("Location: customers.html");
        exit();
    } else {
        echo "Error deleting customer: " . $conn->error;
    }
} else {
    header("Location: customers.html");
    exit();
}
?>
