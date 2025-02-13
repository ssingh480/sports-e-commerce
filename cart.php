<?php
session_start();

// Dummy product data (Replace with database integration)
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Handle Add to Cart
if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];

    if (!isset($_SESSION['cart'][$product_id])) {
        $_SESSION['cart'][$product_id] = [
            "name" => $product_name,
            "price" => $product_price,
            "image" => $product_image,
            "quantity" => 1
        ];
    } else {
        $_SESSION['cart'][$product_id]['quantity'] += 1;
    }
}

// Handle Remove Item
if (isset($_POST['remove_item'])) {
    $product_id = $_POST['product_id'];
    unset($_SESSION['cart'][$product_id]);
}

// Handle Quantity Change
if (isset($_POST['update_quantity'])) {
    $product_id = $_POST['product_id'];
    $new_quantity = max(1, $_POST['quantity']);
    $_SESSION['cart'][$product_id]['quantity'] = $new_quantity;
}

// Handle Apply Coupon
$discount = 0;
$coupon_codes = ["DISCOUNT10" => 10, "SALE20" => 20]; // Example Coupons
if (isset($_POST['apply_coupon'])) {
    $entered_code = strtoupper($_POST['coupon_code']);
    if (isset($coupon_codes[$entered_code])) {
        $discount = $coupon_codes[$entered_code];
    }
}

$total_price = 0;
$total_items = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart - Sports E-Commerce</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    
    <style>
        body {
               background: url('https://plus.unsplash.com/premium_photo-1683758825237-de2f8946dd91?q=80&w=1984&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') no-repeat center center fixed;
               background-size: cover;
            }
        .cart-container {
            max-width: 900px;
            margin: auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }
        .cart-header {
            font-size: 22px;
            font-weight: bold;
            padding-bottom: 15px;
            border-bottom: 2px solid #ddd;
        }
        .cart-item img {
            width: 80px;
            border-radius: 5px;
        }
        .cart-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px 0;
            border-bottom: 1px solid #ddd;
        }
        .cart-item h5 {
            margin: 0;
        }
        .cart-summary {
            padding: 20px;
            background: #f1f1f1;
            border-radius: 10px;
        }
        .quantity-btn {
            border: none;
            background: none;
            font-size: 18px;
            padding: 5px;
            cursor: pointer;
        }
        .remove-btn {
            background: none;
            border: none;
            color: red;
            cursor: pointer;
        }
        .coupon-box {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .btn-checkout {
            background: #28a745;
            color: white;
            padding: 10px 20px;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }
        .btn-checkout:hover {
            background: #218838;
        }
    </style>
</head>
<body>

<?php include 'n_header.php'; ?>

<div class="container my-5">
    <div class="cart-container">
        <div class="cart-header">Shopping Cart</div>

        <?php if (!empty($_SESSION['cart'])): ?>
            <?php foreach ($_SESSION['cart'] as $product_id => $product): ?>
                <?php 
                    $subtotal = $product['price'] * $product['quantity'];
                    $total_price += $subtotal;
                    $total_items += $product['quantity'];
                ?>
                <div class="cart-item">
                    <img src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>">
                    <h5><?= $product['name'] ?></h5>
                    <form method="POST">
                        <input type="hidden" name="product_id" value="<?= $product_id ?>">
                        <button type="submit" name="update_quantity" class="quantity-btn">-</button>
                        <input type="number" name="quantity" value="<?= $product['quantity'] ?>" style="width: 50px; text-align:center;" min="1">
                        <button type="submit" name="update_quantity" class="quantity-btn">+</button>
                    </form>
                    <span>Rs.<?= number_format($subtotal, 2) ?></span>
                    <form method="POST">
                        <input type="hidden" name="product_id" value="<?= $product_id ?>">
                        <button type="submit" name="remove_item" class="remove-btn"><i class="fas fa-trash"></i></button>
                    </form>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p class="text-center my-4">Your cart is empty.</p>
        <?php endif; ?>

        <?php if (!empty($_SESSION['cart'])): ?>
            <div class="cart-summary">
                <p><strong>Total Items:</strong> <?= $total_items ?></p>
                <p><strong>Subtotal:</strong> Rs.<?= number_format($total_price, 2) ?></p>
                <p><strong>Tax (5%):</strong> Rs.<?= number_format($total_price * 0.05, 2) ?></p>
                <p><strong>Discount:</strong> Rs.<?= number_format(($discount / 100) * $total_price, 2) ?></p>
                <h4><strong>Total Price:</strong> Rs.<?= number_format($total_price + ($total_price * 0.05) - (($discount / 100) * $total_price), 2) ?></h4>
            </div>

            <div class="coupon-box my-3">
                <form method="POST">
                    <input type="text" name="coupon_code" class="form-control" placeholder="Enter coupon code">
                    <button type="submit" name="apply_coupon" class="btn btn-warning">Apply</button>
                </form>
            </div>

            <button class="btn-checkout w-100">Proceed to Checkout</button>
        <?php endif; ?>
    </div>
</div>

<?php include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
