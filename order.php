<?php
// Example: Handle order processing
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['order'])) {
    // Retrieve and sanitize inputs (if needed)
    $productId = $_POST['order']; // Example: Product ID from form

    // Example: Perform database operations (replace with your actual database logic)
    // Connect to your MySQL database (example assumes you've already connected)
    // $db_connection = mysqli_connect("localhost", "username", "password", "database");

    // Example: Insert order details into orders table
    // $query = "INSERT INTO orders (product_id, user_id, order_date) VALUES ('$productId', '$userId', NOW())";
    // $result = mysqli_query($db_connection, $query);

    // Example: Redirect back to product.php after order is processed
    header("Location: product.php?order=success");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Processing</title>
    
    <style>
        body{
            background-color: antiquewhite;
        }
        .order-confirmation {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color:black;
            font-style: italic;
            font-size: larger;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            opacity: 0;
            transition: opacity 0.3s, transform 0.3s;
            z-index: 1000;
        }

        .order-confirmation.show {
            opacity: 1;
            transform: translate(-50%, -50%) scale(1.1);
        }
    </style>
</head>
<body>
    <!-- Order confirmation message -->
    <div class="order-confirmation" id="orderConfirmation">
        <h1>Order has been placed!</h1>
    </div>

    <!-- Optional: Redirect back to product.php or another page after a delay -->
    <script>
        // Simulate order confirmation message display
        document.addEventListener('DOMContentLoaded', function() {
            const confirmationBox = document.getElementById('orderConfirmation');
            confirmationBox.classList.add('show');

            setTimeout(function() {
                confirmationBox.classList.remove('show');
                setTimeout(function() {
                    window.location.href = "product.php";
                }, 300); // Redirect after message fades out
            }, 3000); // Display message for 3 seconds (3000 milliseconds)
        });
    </script>
</body>
</html>
