<?php
include_once("n_header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Orders</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        body {
            background: url('https://thumbs.dreamstime.com/z/my-orders-modern-colorful-flat-design-style-web-banner-copy-space-text-shopping-online-e-commerce-website-header-idea-212697368.jpg') no-repeat center center/cover;
            backdrop-filter: blur(5px);
        }
        .container {
            
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }
        .order-card {
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            transition: 0.3s;
        }
        .order-card:hover {
            transform: scale(1.05);
        }
        .btn-track {
            background-color: #28a745;
            color: black;
        }
    </style>
</head>
<?php
include_once("n_header.php");
?>
<body>
<div class="container mt-5">
 <h2 class="text-center mb-4">My Orders</h2>
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card order-card p-3">
                <div class="row g-0">
                     <div class="col-md-4">
                     <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid rounded-start" alt="Product Image">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                         <h5 class="card-title">Nike Running Shoes</h5>
                         <p class="card-text">Price: ₹3000</p>
                         <p class="card-text">Payment: Online</p>
                         <p class="card-text"><small class="text-muted">Ordered on: 12th Feb 2025</small></p>
                         <button class="btn btn-track w-100">Track Order</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card order-card p-3">
                <div class="row g-0">
                    <div class="col-md-4">
                     <img src="https://i5.walmartimages.com/asr/37e39208-0eba-4d89-a576-814f0fccb958_4.a6e56612d61328a8aa89478a8a11959d.jpeg" class="img-fluid rounded-start" alt="Product Image">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Spalding Basketball</h5>
                          <p class="card-text">Price: ₹1500</p>
                          <p class="card-text">Payment: COD</p>
                          <p class="card-text"><small class="text-muted">Ordered on: 10th Feb 2025</small></p>
                          <button class="btn btn-track w-100">Track Order</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include_once("footer.php");
?>      
</body>
</html>