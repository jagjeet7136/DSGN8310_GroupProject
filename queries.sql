-- generateTopSpendingCustomersReport
SELECT CONCAT(c.first_name, ' ', c.last_name) AS customer_name, SUM(oi.quantity * oi.unit_price) AS total_spending
            FROM orders o
            JOIN customers c ON o.customer_id = c.customer_id
            JOIN order_items oi ON o.order_id = oi.order_id
            GROUP BY c.customer_id
            ORDER BY total_spending DESC
            LIMIT 10;


-- generateInvoice
SELECT c.*, a.street, a.city, a.state, a.country, a.postal_code 
                        FROM customers c 
                        INNER JOIN address a ON c.address_id = a.address_id
                        WHERE c.customer_id = $customer_id;


-- generateOrderReportBetweenDates
SELECT o.order_id, CONCAT(c.first_name, ' ', c.last_name) AS customer_name, o.order_date, o.total_amount
            FROM orders o
            JOIN customers c ON o.customer_id = c.customer_id
            WHERE o.order_date BETWEEN ? AND ?
            ORDER BY o.order_date
