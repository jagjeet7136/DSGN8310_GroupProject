<?php
include 'db_connection.php';

$sql = "SELECT * FROM orders";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo "<tr>";
    echo "<th>Customer Id</th>";
    echo "<th>Order Date</th>";
    echo "<th>Amount</th>";
    echo "<th>Status</th>";
    echo "<th>Action</th>";
    echo "</tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["customer_id"]."</td>";
        echo "<td>".$row["order_date"]."</td>";
        echo "<td>".$row["total_amount"]."</td>";
        echo "<td>".$row["status"]."</td>";
        echo "<td>";
        echo "<a href='update_order.php?order_id=".$row["order_id"]."' class='action-link' style='background-color: rgb(50, 86, 112);'>Update</a>";
        echo "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='3'>No customers found</td></tr>";
}
$conn->close();
?>
