<?php
include 'db_connection.php';

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo "<tr>";
    echo "<th>Product Name</th>";
    echo "<th>Description</th>";
    echo "<th>Quantity</th>";
    echo "<th>Price</th>";
    echo "<th>Actions</th>";
    echo "</tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["product_name"]."</td>";
        echo "<td>".$row["description"]."</td>";
        echo "<td>".$row["quantity"]."</td>";
        echo "<td>".$row["price"]."</td>";
        echo "<td>";
        echo "<a href='update_product.php?product_id=".$row["product_id"]."' class='action-link' style='background-color: rgb(50, 86, 112);'>Update</a>";
        echo "<a href='delete_product.php?product_id=".$row["product_id"]."' class='action-link delete-link'>Delete</a>";
        echo "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='3'>No customers found</td></tr>";
}
$conn->close();
?>
