<?php
include 'db_connection.php';
if(isset($_GET['customer_id'])) {
    $customer_id = $_GET['customer_id'];
    $sql = "SELECT * FROM customers WHERE customer_id=$customer_id";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $name = $row['first_name'];
        $email = $row['email'];
    } else {
        header("Location: customers.html");
        exit();
    }
} else {
    header("Location: customers.html");
    exit();
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_name = $_POST['name'];
    $new_email = $_POST['email'];
    $sql = "UPDATE customers SET first_name='$new_name', email='$new_email' WHERE customer_id=$customer_id";
    if ($conn->query($sql) === TRUE) {
        header("Location: customers.html");
        exit();
    } else {
        echo "Error updating customer: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Customer</title>
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

    <div class="container">
        <div class="content">
            <h2>Update Customer</h2>
            <form method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="<?php echo $name; ?>"><br><br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo $email; ?>"><br><br>
                
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($conn->error)) {
                    echo '<div class="error-message">Error updating customer: ' . $conn->error . '</div>';
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
