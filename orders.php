<?php
session_start();

// Sample products for order summary (normally fetched from cart session)
$orderItems = $_SESSION['cart_items'] ?? [];
$subtotal = 0;
$shippingCost = 5.00;  // Example flat shipping rate
$taxRate = 0.1;  // 10% tax
$promoDiscount = 0;

// Calculate the total for the order
foreach ($orderItems as $item) {
    $subtotal += $item['price'] * $item['quantity'];
}

$tax = $subtotal * $taxRate;
$total = $subtotal + $tax + $shippingCost - $promoDiscount;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Process the order form (handle form submission here)
    // Add your order processing logic here: save order to DB, send confirmation email, etc.
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Summary - Sports E-Commerce</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- FontAwesome for Icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    
    <style>
        .order-summary-card {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            background-color: #fff;
        }
        .order-summary-card h5 {
            font-size: 1.2rem;
        }
        .order-summary-card p {
            font-size: 1rem;
        }
        .order-summary-card .total {
            font-weight: bold;
            font-size: 1.5rem;
        }
        .payment-options label {
            display: block;
            margin: 5px 0;
        }
    </style>
</head>
<body>

<!-- Navbar (optional, can include your website navigation) -->
<?php include 'header.php'; ?>

<div class="container my-5">
    <h2 class="text-center mb-4">Order Summary</h2>
    
    <div class="row">
        <!-- Order Summary Section -->
        <div class="col-md-6">
            <div class="order-summary-card">
                <h5>Order Summary</h5>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($orderItems as $item): ?>
                            <tr>
                                <td><?php echo $item['name']; ?></td>
                                <td>$<?php echo number_format($item['price'], 2); ?></td>
                                <td><?php echo $item['quantity']; ?></td>
                                <td>$<?php echo number_format($item['price'] * $item['quantity'], 2); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <hr>
                <p>Subtotal: $<?php echo number_format($subtotal, 2); ?></p>
                <p>Shipping: $<?php echo number_format($shippingCost, 2); ?></p>
                <p>Tax (10%): $<?php echo number_format($tax, 2); ?></p>
                <p>Discount: $<?php echo number_format($promoDiscount, 2); ?></p>
                <hr>
                <h3 class="total">Total: $<?php echo number_format($total, 2); ?></h3>
            </div>
        </div>

        <!-- Shipping Information Section -->
        <div class="col-md-6">
            <div class="order-summary-card">
                <h5>Shipping Information</h5>
                <form action="order.php" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Shipping Address</label>
                        <textarea class="form-control" id="address" name="address" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control" id="city" name="city" required>
                    </div>
                    <div class="mb-3">
                        <label for="state" class="form-label">State</label>
                        <input type="text" class="form-control" id="state" name="state" required>
                    </div>
                    <div class="mb-3">
                        <label for="zipcode" class="form-label">Zip Code</label>
                        <input type="text" class="form-control" id="zipcode" name="zipcode" required>
                    </div>
                    <div class="mb-3">
                        <label for="country" class="form-label">Country</label>
                        <input type="text" class="form-control" id="country" name="country" required>
                    </div>
                    <div class="mb-3">
                        <label for="promo" class="form-label">Promo Code (optional)</label>
                        <input type="text" class="form-control" id="promo" name="promo">
                    </div>

                    <button type="submit" class="btn btn-success w-100">Place Order</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Payment Options Section -->
    <div class="row mt-4">
        <div class="col-md-6 offset-md-3">
            <div class="order-summary-card">
                <h5>Choose Payment Method</h5>
                <div class="payment-options">
                    <label>
                        <input type="radio" name="payment_method" value="credit_card" checked> Credit Card
                    </label>
                    <label>
                        <input type="radio" name="payment_method" value="paypal"> PayPal
                    </label>
                    <label>
                        <input type="radio" name="payment_method" value="stripe"> Stripe
                    </label>
                </div>
            </div>
        </div>
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

<!-- Bootstrap and FontAwesome -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
