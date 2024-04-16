<?php
require('fpdf184/fpdf.php');

function connectDB() {
    $servername = "localhost:3306";
    $username = "root";
    $password = "";
    $dbname = "hardwarestore";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

function generateTopSpendingCustomersReport() {
    $conn = connectDB();

    $sql = "SELECT CONCAT(c.first_name, ' ', c.last_name) AS customer_name, SUM(oi.quantity * oi.unit_price) AS total_spending
            FROM orders o
            JOIN customers c ON o.customer_id = c.customer_id
            JOIN order_items oi ON o.order_id = oi.order_id
            GROUP BY c.customer_id
            ORDER BY total_spending DESC
            LIMIT 10";
    $result = $conn->query($sql);

    if (!$result) {
        die("Error: " . $conn->error);
    }

    $pdf = new FPDF();
    $pdf->AddPage();

    $pdf->SetFont('Arial', 'B', 13);
    $pdf->SetTextColor(0, 0, 0);

    $pdf->Cell(0, 10, '', 0, 1);
    $pdf->Image('./images/logo.jpeg', 10, 10, 30);
    $pdf->Cell(0, 10, 'Top 10 Spending Customers Report', 0, 0, 'C');
    $pdf->Cell(0, 10, date('Y-m-d'), 0, 1, 'R');
    $pdf->Ln(20);

    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(0, 10, 'Company Information', 0, 1);
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(0, 10, 'Company Name: Hardware Store', 0, 1);
    $pdf->Cell(0, 10, 'Address: 123 Main Street, City, Country', 0, 1);
    $pdf->Cell(0, 10, 'Phone: +1234567890', 0, 1);
    $pdf->Ln(10);

    $pdf->SetFillColor(200, 200, 200);
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(80, 10, 'Customer Name', 1, 0, 'C', true);
    $pdf->Cell(80, 10, 'Total Spending', 1, 1, 'C', true);

    $pdf->SetFont('Arial', '', 12);
    while ($row = $result->fetch_assoc()) {
        $pdf->Cell(80, 10, $row['customer_name'], 1, 0, 'C');
        $pdf->Cell(80, 10, '$' . number_format($row['total_spending'], 2), 1, 1, 'C');
    }

    $totalAmount = 0;
    $result->data_seek(0);
    while ($row = $result->fetch_assoc()) {
        $totalAmount += $row['total_spending'];
    }
    $pdf->Ln(10);
    $pdf->Cell(0, 10, 'Total Amount: $' . number_format($totalAmount, 2), 0, 1);

    $pdf->SetFillColor(50, 86, 112);
    $pdf->Rect(0, $pdf->GetPageHeight() - 20, $pdf->GetPageWidth(), 20, 'F');

    $pdf->Output();

    $conn->close();
}

function generateInvoice($customer_id) {
    $conn = connectDB();

    $customer_query = "SELECT c.*, a.street, a.city, a.state, a.country, a.postal_code 
                        FROM customers c 
                        INNER JOIN address a ON c.address_id = a.address_id
                        WHERE c.customer_id = $customer_id";
    $customer_result = $conn->query($customer_query);

    if (!$customer_result) {
        die("Error: " . $conn->error);
    }

    $order_query = "SELECT * FROM orders WHERE customer_id = $customer_id";
    $order_result = $conn->query($order_query);

    if (!$order_result) {
        die("Error: " . $conn->error);
    }

    $customer_info = "";
    $product_info = "";
    $total_amount = 0;

    if ($customer_row = $customer_result->fetch_assoc()) {
        $customer_info .= "Customer Name: " . $customer_row['first_name'] . " " . $customer_row['last_name'] . "\n";
        $customer_info .= "Address: " . $customer_row['street'] . ", " . $customer_row['city'] . ", " . $customer_row['state'] . ", " . $customer_row['country'] . " " . $customer_row['postal_code'] . "\n";
    }

    while ($order_row = $order_result->fetch_assoc()) {
        $order_id = $order_row['order_id'];
        $order_date = $order_row['order_date'];

        $order_items_query = "SELECT * FROM order_items WHERE order_id = $order_id";
        $order_items_result = $conn->query($order_items_query);

        if (!$order_items_result) {
            die("Error: " . $conn->error);
        }

        while ($order_item_row = $order_items_result->fetch_assoc()) {
            $product_id = $order_item_row['product_id'];
            $quantity = $order_item_row['quantity'];

            $product_query = "SELECT * FROM products WHERE product_id = $product_id";
            $product_result = $conn->query($product_query);

            if (!$product_result) {
                die("Error: " . $conn->error);
            }

            if ($product_row = $product_result->fetch_assoc()) {
                $product_name = $product_row['product_name'];
                $unit_price = $product_row['price'];
                $subtotal = $unit_price * $quantity;
                $total_amount += $subtotal;

                $product_info .= "Product Name: $product_name | Quantity: $quantity | Unit Price: $unit_price | Subtotal: $subtotal\n";
            }
        }
    }

    $tax_rate = 0.13;
    $tax_amount = $total_amount * $tax_rate;
    $total_amount_with_tax = $total_amount + $tax_amount;

    $pdf = new FPDF();
    $pdf->AddPage();

    $pdf->SetFont('Arial', 'B', 13);
    $pdf->SetTextColor(0, 0, 0);

    $pdf->Cell(0, 10, '', 0, 1);
    $pdf->Image('./images/logo.jpeg', 10, 10, 30);
    $pdf->Cell(0, 10, 'Invoid PDF', 0, 0, 'C');
    $pdf->Cell(0, 10, date('Y-m-d'), 0, 1, 'R');
    $pdf->Ln(20);

    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(0, 10, 'Company Information:', 0, 1);
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(0, 10, 'Company Name: Hardware Store', 0, 1);
    $pdf->Cell(0, 10, 'Address: 123 Main Street, City, Country', 0, 1);
    $pdf->Cell(0, 10, 'Phone: +1234567890', 0, 1);
    $pdf->Ln(10);

    $pdf->SetFont('Arial', '', 12);

    $pdf->Cell(0, 10, "Invoice Date: " . date('Y-m-d'), 0, 1);
    $pdf->Ln();
    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(0, 10, "Customer Information:", 0, 1);
    $pdf->SetFont('Arial', '', 12);
    $pdf->MultiCell(0, 10, $customer_info);

    $pdf->Ln(10);

    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(0, 10, "Order Information:", 0, 1);
    $pdf->SetFont('Arial', '', 12);
    $pdf->MultiCell(0, 10, $product_info);
    $pdf->Cell(0, 10, "Total Amount: $" . number_format($total_amount_with_tax, 2) . " (including 13% tax)", 0, 1);

    $pdf->SetFillColor(50, 86, 112);
    $pdf->Rect(0, $pdf->GetPageHeight() - 20, $pdf->GetPageWidth(), 20, 'F');

    $pdf->Output();

    $conn->close();
}

function generateOrderReportBetweenDates($startDate, $endDate) {
    $conn = connectDB();

    $sql = "SELECT o.order_id, CONCAT(c.first_name, ' ', c.last_name) AS customer_name, o.order_date, o.total_amount
            FROM orders o
            JOIN customers c ON o.customer_id = c.customer_id
            WHERE o.order_date BETWEEN ? AND ?
            ORDER BY o.order_date";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $startDate, $endDate);
    $stmt->execute();
    $result = $stmt->get_result();

    if (!$result) {
        die("Error: " . $conn->error);
    }

    $pdf = new FPDF();
    $pdf->AddPage();

    $pdf->SetFont('Arial', 'B', 13);
    $pdf->SetTextColor(0, 0, 0);

    $pdf->Cell(0, 10, '', 0, 1);
    $pdf->Image('./images/logo.jpeg', 10, 10, 20);
    $pdf->Cell(0, 10, 'Orders Between ' . $startDate . ' and ' . $endDate, 0, 0, 'C');
    $pdf->Cell(0, 10, date('Y-m-d'), 0, 1, 'R');
    $pdf->Ln(20);

    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(0, 10, 'Company Information:', 0, 1);
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(0, 10, 'Company Name: Hardware Store', 0, 1);
    $pdf->Cell(0, 10, 'Address: 123 Main Street, City, Country', 0, 1);
    $pdf->Cell(0, 10, 'Phone: +1234567890', 0, 1);
    $pdf->Ln(10);

    $pdf->SetFillColor(200, 200, 200);
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(30, 10, 'Order ID', 1, 0, 'C', true);
    $pdf->Cell(60, 10, 'Customer Name', 1, 0, 'C', true);
    $pdf->Cell(40, 10, 'Order Date', 1, 0, 'C', true);
    $pdf->Cell(50, 10, 'Total Amount', 1, 1, 'C', true);

    $totalAmount = 0;
    $pdf->SetFont('Arial', '', 12);
    while ($row = $result->fetch_assoc()) {
        $pdf->Cell(30, 10, $row['order_id'], 1, 0, 'C');
        $pdf->Cell(60, 10, $row['customer_name'], 1, 0, 'C');
        $pdf->Cell(40, 10, $row['order_date'], 1, 0, 'C');
        $pdf->Cell(50, 10, '$' . number_format($row['total_amount'], 2), 1, 1, 'C');
        $totalAmount += $row['total_amount'];
    }

    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(130, 10, 'Total Amount:', 1, 0, 'R');
    $pdf->Cell(50, 10, '$' . number_format($totalAmount, 2), 1, 1, 'C');
    $pdf->Ln(10);

    $pdf->SetFillColor(50, 86, 112);
    $pdf->Rect(0, $pdf->GetPageHeight() - 20, $pdf->GetPageWidth(), 20, 'F');


    $pdf->Output();

    $conn->close();
}

if (isset($_POST['generate_report'])) {
    $reportType = $_POST['report_type'];
    switch ($reportType) {
        case 'total_sales':
            generateTotalSalesReport();
            break;
        case 'top_spending_customers':
            generateTopSpendingCustomersReport();
            break;
        case 'invoice':
            if(isset($_POST['customer_id'])){
                generateInvoice($_POST['customer_id']);
            } else {
                echo "Customer ID is required to generate an invoice!";
            }
            break;
        case 'order_report':
            if (isset($_POST['start_date']) && isset($_POST['end_date'])) {
                generateOrderReportBetweenDates($_POST['start_date'], $_POST['end_date']);
            } else {
                echo "Start Date and End Date are required to generate an order report!";
            }
            break;
        default:
            echo "Invalid report type!";
    }
}

?>
