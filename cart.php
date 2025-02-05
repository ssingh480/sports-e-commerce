<?php
include_once("header.php");
?>

<style>
    /* Full-screen background */
    body {
        background: url('https://images.unsplash.com/photo-1668395092928-420b88deab84?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') no-repeat center center fixed;
        background-size: cover;
        font-family: 'Poppins', sans-serif;
    }

    /* Cart container */
    .cart-container {
        background: rgba(255, 255, 255, 0.9);
        border-radius: 12px;
        padding: 40px;
        width: 90%;
        max-width: 1000px;
        margin: 30px auto;
        box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
    }

    /* Cart table */
    .cart-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    .cart-table th,
    .cart-table td {
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    .cart-table th {
        background-color: #9E4D40;
        color: white;
    }

    .cart-table td {
        background-color: #f9f9f9;
    }

    .cart-table td img {
        width: 80px;
        height: 80px;
        object-fit: cover;
        border-radius: 8px;
    }

    .cart-item {
        display: flex;
        align-items: center;
    }

    .cart-item h5 {
        margin-left: 20px;
    }

    .quantity-input {
        width: 60px;
        border-radius: 8px;
        border: 1px solid #ddd;
        text-align: center;
        padding: 5px;
    }

    .remove-item {
        color: #e74c3c;
        cursor: pointer;
    }

    .remove-item:hover {
        text-decoration: underline;
    }

    /* Price summary */
    .price-summary {
        background: rgba(255, 255, 255, 0.7);
        padding: 25px;
        border-radius: 12px;
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
    }

    .price-summary h4 {
        margin-bottom: 15px;
        color: #9E4D40;
    }

    .price-summary p {
        font-size: 18px;
        margin: 8px 0;
    }

    .price-summary .total-price {
        font-weight: bold;
        font-size: 22px;
        color: #9E4D40;
    }

    .checkout-btn {
        background-color: #9E4D40;
        color: white;
        font-size: 18px;
        padding: 12px 20px;
        border: none;
        border-radius: 8px;
        width: 100%;
        margin-top: 20px;
    }

    .checkout-btn:hover {
        background-color: #7c3d32;
    }

    /* Responsive design */
    @media screen and (max-width: 768px) {
        .cart-container {
            padding: 20px;
        }

        .cart-table th,
        .cart-table td {
            font-size: 14px;
        }

        .price-summary {
            padding: 15px;
        }

        .checkout-btn {
            font-size: 16px;
        }
    }
</style>

<div class="cart-container">
    <h2 class="text-center mb-4">Your Shopping Cart</h2>
    <table class="cart-table">
        <thead>
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Remove</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Sample cart items (this would typically come from a session or database)
            $cart_items = [
                ['name' => 'Football', 'image' => 'images/football.jpg', 'price' => 30, 'quantity' => 2],
                ['name' => 'Basketball', 'image' => 'images/basketball.jpg', 'price' => 45, 'quantity' => 1]
            ];
            $total_price = 0;
            foreach ($cart_items as $item) {
                $item_total = $item['price'] * $item['quantity'];
                $total_price += $item_total;
                ?>
                <tr>
                    <td class="cart-item">
                        <img src="<?= $item['image'] ?>" alt="<?= $item['name'] ?>">
                        <h5><?= $item['name'] ?></h5>
                    </td>
                    <td>$<?= number_format($item['price'], 2) ?></td>
                    <td>
                        <input type="number" value="<?= $item['quantity'] ?>" class="quantity-input" min="1">
                    </td>
                    <td>$<?= number_format($item_total, 2) ?></td>
                    <td>
                        <span class="remove-item">Remove</span>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <div class="price-summary">
        <h4>Price Summary</h4>
        <p>Subtotal: $<?= number_format($total_price, 2) ?></p>
        <p>Shipping: Free</p>
        <p class="total-price">Total: $<?= number_format($total_price, 2) ?></p>
        <button class="checkout-btn">Proceed to Checkout</button>
    </div>
</div>

<?php
include_once("footer.php");
?>
