<?php
session_start();

// Sample cart items (Replace this with session data from the cart)
$cart_items = isset($_SESSION['cart']) ? $_SESSION['cart'] : [
    ["id" => 1, "name" => "Football", "price" => 30, "quantity" => 1, "image" => "images/product1.jpg"],
    ["id" => 2, "name" => "Running Shoes", "price" => 80, "quantity" => 1, "image" => "images/product2.jpg"],
];

$total_price = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Sports E-Commerce</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <style>
        body {
            background: #f8f9fa;
        }
        
        .checkout-container {
            max-width: 900px;
            margin: auto;
            padding: 30px;
            background: white;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .product-summary img {
            width: 80px;
            border-radius: 5px;
        }

        .total-price {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .payment-options input {
            display: none;
        }

        .payment-options label {
            display: block;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        .payment-options input:checked + label {
            border-color: #007bff;
            background: #007bff;
            color: white;
        }

        .pay-btn {
            width: 100%;
            padding: 10px;
            font-size: 1.2rem;
        }
    </style>
</head>
<body>

<?php include 'header.php'; ?>

<div class="container my-5">
    <div class="checkout-container">
        <h2 class="text-center mb-4">Order Summary</h2>

        <!-- Order Summary -->
        <div class="product-summary">
            <?php foreach ($cart_items as $item) : 
                $total_price += $item['price'] * $item['quantity'];
            ?>
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="d-flex align-items-center">
                        <img src="<?= $item['image'] ?>" alt="<?= $item['name'] ?>">
                        <div class="ms-3">
                            <h5><?= $item['name'] ?></h5>
                            <p>$<?= number_format($item['price'], 2) ?> x <?= $item['quantity'] ?></p>
                        </div>
                    </div>
                    <strong>$<?= number_format($item['price'] * $item['quantity'], 2) ?></strong>
                </div>
            <?php endforeach; ?>
        </div>

        <hr>

        <!-- Total Price -->
        <div class="d-flex justify-content-between">
            <h5>Total Amount:</h5>
            <span class="total-price">$<?= number_format($total_price, 2) ?></span>
        </div>

        <hr>

        <!-- Payment Methods -->
        <h4 class="mb-3">Choose Payment Method</h4>
        <div class="payment-options">
            <div class="mb-3">
                <input type="radio" id="creditCard" name="paymentMethod" value="Credit Card" checked>
                <label for="creditCard"><i class="fas fa-credit-card"></i> Credit/Debit Card</label>
            </div>
            <div class="mb-3">
                <input type="radio" id="paypal" name="paymentMethod" value="PayPal">
                <label for="paypal"><i class="fab fa-paypal"></i> PayPal</label>
            </div>
            <div class="mb-3">
                <input type="radio" id="upi" name="paymentMethod" value="UPI">
                <label for="upi"><i class="fas fa-mobile-alt"></i> UPI (Google Pay, PhonePe)</label>
            </div>
            <div class="mb-3">
                <input type="radio" id="cod" name="paymentMethod" value="COD">
                <label for="cod"><i class="fas fa-money-bill-wave"></i> Cash on Delivery</label>
            </div>
        </div>

        <!-- Checkout Button -->
        <button class="btn btn-primary pay-btn" id="payNowBtn">Proceed to Payment</button>
    </div>
</div>

<footer class="bg-dark text-light pt-5 pb-4">
    <div class="container text-center text-md-start">
        <div class="row">
            
            <!-- About Section -->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
                <h5 class="text-uppercase fw-bold mb-4">Sports E-Commerce</h5>
                <p>We provide the best quality sports gear for professionals and enthusiasts. Elevate your game with our premium products.</p>
            </div>
            
            <!-- Quick Links -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <h5 class="text-uppercase fw-bold mb-4">Quick Links</h5>
                <p><a href="index.php" class="text-light text-decoration-none">Home</a></p>
                <p><a href="products.php" class="text-light text-decoration-none">Products</a></p>
                <p><a href="about.php" class="text-light text-decoration-none">About Us</a></p>
                <p><a href="contact.php" class="text-light text-decoration-none">Contact</a></p>
                <p><a href="order.php" class="text-light text-decoration-none">Order</a></p>
            </div>
            
            <!-- Customer Service -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <h5 class="text-uppercase fw-bold mb-4">Customer Service</h5>
                <p><a href="faq.php" class="text-light text-decoration-none">FAQ</a></p>
                <p><a href="returns.php" class="text-light text-decoration-none">Returns & Exchanges</a></p>
                <p><a href="shipping.php" class="text-light text-decoration-none">Shipping Info</a></p>
                <p><a href="terms.php" class="text-light text-decoration-none">Terms & Conditions</a></p>
            </div>
            
            <!-- Contact -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-4">
                <h5 class="text-uppercase fw-bold mb-4">Contact</h5>
                <p><i class="fas fa-home me-2"></i> 123 Sports Street, New road, Kathmandu, Nepal</p>
                <p><i class="fas fa-envelope me-2"></i> support@sportsecommerce.com</p>
                <p><i class="fas fa-phone me-2"></i> +9726609155</p>
            </div>
        </div>
        
        <!-- Social Media -->
        <div class="row text-center mt-3">
            <div class="col">
                <a href="https://www.facebook.com/" class="text-light me-4"><i class="fab fa-facebook fa-lg"></i></a>
                <a href="#" class="text-light me-4"><i class="fab fa-twitter fa-lg"></i></a>
                <a href="https://www.instagram.com/?hl=en" class="text-light me-4"><i class="fab fa-instagram fa-lg"></i></a>
                <a href="#" class="text-light me-4"><i class="fab fa-linkedin fa-lg"></i></a>
            </div>
        </div>
        
        <!-- Copyright -->
        <div class="text-center mt-3">
            <p class="mb-0">&copy; 2025 Sports E-Commerce. All Rights Reserved.</p>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    document.getElementById('payNowBtn').addEventListener('click', function () {
        let selectedPaymentMethod = document.querySelector('input[name="paymentMethod"]:checked').value;
        alert("Payment successful using " + selectedPaymentMethod + "! Thank you for your purchase.");
        window.location.href = 'order-confirmation.php';
    });
</script>

</body>
</html>
