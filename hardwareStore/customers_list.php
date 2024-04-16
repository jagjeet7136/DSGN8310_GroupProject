<?php

include 'db_connection.php';

$sql = "SELECT * FROM customers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo "<tr>";
    echo "<th>Customer Name</th>";
    echo "<th>Email</th>";
    echo "<th>Actions</th>";
    echo "</tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["first_name"]."</td>";
        echo "<td>".$row["email"]."</td>";
        echo "<td>";
        echo "<a href='update_customer.php?customer_id=".$row["customer_id"]."' class='action-link' style='background-color: rgb(50, 86, 112);'>Update</a>";
        echo "<a href='delete_customer.php?customer_id=".$row["customer_id"]."' class='action-link delete-link'>Delete</a>";
        echo "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='3'>No customers found</td></tr>";
}
$conn->close();
?>
