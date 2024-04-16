<?php
include 'db_connection.php';
if(isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];
    $sql = "SELECT * FROM products WHERE product_id=$product_id";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $product_name = $row['product_name'];
        $description = $row['description'];
        $quantity = $row['quantity'];
        $price = $row['price'];
    } else {
        header("Location: products.html");
        exit();
    }
} else {
    header("Location: products.html");
    exit();
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_product_name = $_POST['product_name'];
    $new_description = $_POST['description'];
    $new_quantity = $_POST['quantity'];
    $new_price = $_POST['price'];
    $sql = "UPDATE products SET product_name='$new_product_name', description='$new_description', quantity='$new_quantity', price='$new_price' WHERE product_id=$product_id";
    if ($conn->query($sql) === TRUE) {
        header("Location: products.html");
        exit();
    } else {
        echo "Error updating product: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
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
            max-width: 800px;
            margin: auto;
            padding: 0 20px;
        }

        .content {
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f9f9f9;
        }

        h2 {
            margin-bottom: 20px;
        }

        form {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        textarea {
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
            margin-top: 20px;
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
    <header>
        <div class="logo">
            <img src="./images/logo.jpeg" alt="Hardware Store Logo">
        </div>
        <nav>
            <a href="customers.html">Customers</a>
            <a href="#">Orders</a>
            <a href="#">Suppliers</a>
            <a href="#">Products</a>
        </nav>
    </header>

    <div class="container">
        <div class="content">
            <h2>Update Product</h2>
            <form method="post">
                <label for="product_name">Product Name:</label>
                <input type="text" id="product_name" name="product_name" value="<?php echo $product_name; ?>"><br><br>
                <label for="description">Description:</label>
                <textarea id="description" name="description"><?php echo $description; ?></textarea><br><br>
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" value="<?php echo $quantity; ?>"><br><br>
                <label for="price">Price:</label>
                <input type="number" id="price" name="price" value="<?php echo $price; ?>"><br><br>
                
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($conn->error)) {
                    echo '<div class="error-message">Error updating product: ' . $conn->error . '</div>';
                }
                ?>
                
                <input type="submit" value="Update">
            </form>
        </div>
    </div>

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
