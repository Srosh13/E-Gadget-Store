<?php
include 'db.php';

$sql = "SELECT id, name, description, price, company FROM products";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Products</title>
    <link rel="stylesheet" href="product.css">
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Function to animate product cards on hover
            const products = document.querySelectorAll('.product');
            products.forEach(product => {
                product.addEventListener('mouseenter', function() {
                    this.style.transform = 'scale(1.05)';
                    this.style.boxShadow = '0 8px 16px rgba(0, 0, 0, 0.2)';
                });
                product.addEventListener('mouseleave', function() {
                    this.style.transform = 'scale(1)';
                    this.style.boxShadow = '0 4px 8px rgba(0, 0, 0, 0.1)';
                });
            });

            // Function to handle order button click
            const orderButtons = document.querySelectorAll('.order-button');
            orderButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    const productId = this.value;
                    // Redirect to order.php with product ID
                    window.location.href = `order.php?productId=${productId}`;
                });
            });
        });
    </script>
</head>
<body>
    <div class="product-grid">
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<div class="product">';
                echo '<div class="details">';
                echo '<h3>' . $row["name"] . '</h3>';
                echo '<p>' . $row["description"] . '</p>';
                echo '<p class="price">$' . $row["price"] . '</p>';
                echo '<p>Company: ' . $row["company"] . '</p>';
                echo '<button type="button" name="order" value="' . $row["id"] . '" class="order-button">Order Now</button>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo '<p style="text-align: center; width: 100%;">No products available</p>';
        }
        ?>
    </div>
</body>
</html>
