

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/additional-methods.min.js"></script>
    <link rel="stylesheet" href="fontawesome/css/all.css">
</head>
<body>
<style>
        /* Navbar Styling */
        .navbar {
            background: linear-gradient(to right,black,black);
            padding: 12px 20px;
        }
        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
            color: #fff !important;
        }
        .nav-link {
            color: white !important;
            font-size: 16px;
            transition: 0.3s;
        }
        .nav-link:hover {
            color: blue !important;
        }
        .search-box {
            max-width: 400px;
        }
        .cart-icon, .profile-icon {
            font-size: 20px;
            color: white;
            margin-right: 15px;
            cursor: pointer;
            position: relative;
        }
        .cart-badge {
            font-size: 12px;
            color: white;
            border-radius: 50%;
            padding: 3px 7px;
            position: absolute;
            top: -5px;
            right: -10px;
        }
        .profile-container {
            position: relative;
            display: inline-block;
        }

        .profile-dropdown {
            display: none;
            position: absolute;
            right: 0;
            background: white;
            border-radius: 5px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            min-width: 150px;
            z-index: 1000;
        }
        .profile-dropdown a {
            display: block;
            padding: 10px 15px;
            color: black;
            text-decoration: none;
        }
        .profile-dropdown a:hover {
            background-color:rgb(87, 145, 203);
        }
        .profile-container:hover .profile-dropdown {
            display: block;
        }
        /* Profile Dropdown */
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark ">
    <div class="container-fluid">
       <!-- Logo Section -->
       <a class="navbar-brand" href="index.php">🏀 Sportify</a>


        <!-- Left Section: Cart & Profile -->
        <div class="d-flex align-items-center">
            <!-- Left Section: Cart Icon -->
          <?php $cart_count = isset($_SESSION['cart_count']) ? $_SESSION['cart_count'] : 0; ?>
            <a href="cart.php" class="cart-icon">
                <i class="fas fa-shopping-cart"></i>
                <span class="cart-badge"><?php echo $cart_count; ?></span> <!-- Dynamic cart count -->
            </a>
        </div>   
            <!-- Profile Dropdown -->
            <div class="position-relative profile-container">
                <?php $is_logged_in = isset($_SESSION['user_id']); ?>
                <i class="fas fa-user-circle profile-icon"></i>
                <div class="profile-dropdown">
                    <span class="dropdown-item-text px-3 fw-bold">
                    <div class="dropdown-divider"></div>
                    <?php if ($is_logged_in): ?>
                        <a href="profile.php">My Profile</a>
                        <a href="orders.php">My Orders</a>
                        <a href="logout.php">Logout</a>
                    <?php else: ?>
                        <a href="login.php">Login</a>
                        <a href="register.php">Register</a>
                    <?php endif; ?>
                </div>
            </div>

        
           

        <!-- Search Box (Centered) -->
        <form class="d-flex search-box mx-auto" action="search.php" method="GET">
            <input class="form-control me-2" type="search" name="query" placeholder="Search for products..." aria-label="Search">
            <button class="btn btn-outline-light" type="submit"><i class="fas fa-search"></i></button>
        </form>

        <!-- Navbar Toggler (For Mobile) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navigation Links (Right) -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="index.php">🏠 Home</a></li>
                <li class="nav-item"><a class="nav-link" href="products.php">🛍 Products</a></li>
                <li class="nav-item"><a class="nav-link" href="orders.php">📦 Orders</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">ℹ️ About</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">📞 Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="payment.php">💳 Payment</a></li>
            </ul>
        </div>
     </div>
</nav>