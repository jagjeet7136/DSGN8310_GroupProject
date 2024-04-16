<?php
include 'db_connection.php';
if(isset($_GET['supplier_id'])) {
    $supplier_id = $_GET['supplier_id'];
    $sql = "SELECT * FROM suppliers WHERE supplier_id=$supplier_id";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $supplier_name = $row['supplier_name'];
        $contact_person_name = $row['contact_person_name'];
        $contact_number = $row['contact_number'];
        $email = $row['email'];
        $address = $row['address'];
    } else {
        header("Location: supplier.html");
        exit();
    }
} else {
    header("Location: supplier.html");
    exit();
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_supplier_name = $_POST['supplier_name'];
    $new_contact_person_name = $_POST['contact_person_name'];
    $new_contact_number = $_POST['contact_number'];
    $new_email = $_POST['email'];
    $new_address = $_POST['address'];
    $sql_update = "UPDATE suppliers SET supplier_name='$new_supplier_name', contact_person_name='$new_contact_person_name', contact_number='$new_contact_number', email='$new_email', address='$new_address' WHERE supplier_id=$supplier_id";
    if ($conn->query($sql_update) === TRUE) {
        header("Location: supplier.html");
        exit();
    } else {
        echo "Error updating supplier: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Supplier</title>
    <style>
        * {
            padding: 0px;
            margin: 0px;
        }
        body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 100vh;
        }
        header {
            background-color: rgb(50, 86, 112);
            color: #fff;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .logo img {
            max-width: 100px;
        }
        nav {
            margin-top: 10px;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }
        .container {
            display: flex;
            flex-direction: column;
        }
        .content {
            flex: 1;
            padding: 20px;
        }
        h2 {
            margin-bottom: 20px;
        }
        form {
            margin-bottom: 20px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f9f9f9;
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: rgb(50, 86, 112);
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #1e5373;
        }
        .error-message {
            color: red;
            margin-top: 10px;
        }
        footer {
            background-color: rgb(50, 86, 112);
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }
        footer p {
            margin: 5px 0;
        }
        footer a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="logo">
            <img src="./images/logo.jpeg" alt="Hardware Store Logo" />
        </div>
        <nav>
            <a href="customers.html">Customers</a>
            <a href="#">Orders</a>
            <a href="#">Suppliers</a>
            <a href="#">Products</a>
        </nav>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="content">
            <h2>Update Supplier</h2>
            <form method="post">
                <label for="supplier_name">Supplier Name:</label>
                <input type="text" id="supplier_name" name="supplier_name" value="<?php echo $supplier_name; ?>"><br><br>
                <label for="contact_person_name">Contact Person Name:</label>
                <input type="text" id="contact_person_name" name="contact_person_name" value="<?php echo $contact_person_name; ?>"><br><br>
                <label for="contact_number">Contact Number:</label>
                <input type="text" id="contact_number" name="contact_number" value="<?php echo $contact_number; ?>"><br><br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo $email; ?>"><br><br>
                <label for="address">Address:</label>
                <textarea id="address" name="address"><?php echo $address; ?></textarea><br><br>
                
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($conn->error)) {
                    echo '<div class="error-message">Error updating supplier: ' . $conn->error . '</div>';
                }
                ?>
                
                <input type="submit" value="Update">
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <nav>
            <a href="#">Customers</a>
            <a href="#">Orders</a>
            <a href="#">Suppliers</a>
            <a href="#">Products</a>
        </nav>
        <p>Follow us on social media:</p>
        <nav>
            <a href="#">Facebook</a>
            <a href="#">Twitter</a>
            <a href="#">Instagram</a>
            <a href="#">LinkedIn</a>
        </nav>
        <p>Email: info@hardwarestore.com</p>
        <p>Address: 123 Main Street, City, Country</p>
        <p>Phone: +1234567890</p>
        <p>&copy; 2024 Hardware Store. All rights reserved.</p>
    </footer>
</body>
</html>
