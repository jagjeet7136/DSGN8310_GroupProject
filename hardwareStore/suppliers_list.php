<?php
include 'db_connection.php';

$sql = "SELECT * FROM suppliers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo "<tr>";
    echo "<th>Supplier Name</th>";
    echo "<th>Contact Person</th>";
    echo "<th>Contact Number</th>";
    echo "<th>Email</th>";
    echo "<th>Address</th>";
    echo "<th>Actions</th>";
    echo "</tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["supplier_name"]."</td>";
        echo "<td>".$row["contact_person_name"]."</td>";
        echo "<td>".$row["contact_number"]."</td>";
        echo "<td>".$row["email"]."</td>";
        echo "<td>".$row["address"]."</td>";
        echo "<td>";
        echo "<a href='update_supplier.php?supplier_id=".$row["supplier_id"]."' class='action-link' style='background-color: rgb(50, 86, 112);'>Update</a>";
        echo "<a href='delete_supplier.php?supplier_id=".$row["supplier_id"]."' class='action-link delete-link'>Delete</a>";
        echo "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='3'>No customers found</td></tr>";
}
$conn->close();
?>
