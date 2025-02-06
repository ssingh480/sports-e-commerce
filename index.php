<?php
include_once("header.php");

?>
<br>
<style>
        /* Hero Section */
        .carousel-item img {
            height: 400px;
            object-fit:cover;
        }
        .carousel-caption {
            background: rgba(0, 0, 0, 0.5);
            padding: 15px;
            border-radius: 5px;
        }
        
        /* Product Section */
        .product-card {
            transition: 0.3s;
        }
        .product-card:hover {
            transform: scale(1.05);
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }
    </style>

<!-- Carousel Section -->
<div class="row">
    <div class="col-12">
        <div id="demo" class="carousel slide" data-bs-ride="carousel">
            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>
            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://media.istockphoto.com/id/1136317339/photo/sports-equipment-on-floor.jpg?s=1024x1024&w=is&k=20&c=6-iRB0kZL9S4aE4hsLsLO1e-cnJ1C6oqgAyePxy0UkM=" alt="Sports Event 1" class="d-block" style="width:100%">
                    <div class="carousel-caption">
                        <h3>Exclusive Sports Gear</h3>
                        <p>Get the latest gear for all sports.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1599236755629-17aff66ccda0?q=80&w=2018&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D=" alt="Sports Event 2" class="d-block" style="width:100%">
                    <div class="carousel-caption">
                        <h3>Top Quality Equipment</h3>
                        <p>Shop professional-grade sports equipment.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1595827432953-7161e19e303e?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Sports Event 3" class="d-block" style="width:100%">
                    <div class="carousel-caption">
                        <h3>Stay Ahead in the Game</h3>
                        <p>Upgrade your training with the best products.</p>
                    </div>
                </div>
            </div>
            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>
</div>

<!-- Featured Products -->
<section class="container my-5">
    <h2 class="text-center mb-4">Featured Products</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card product-card">
                <img src="https://media.istockphoto.com/id/182148488/photo/an-isolated-soccer-ball-on-white.jpg?s=1024x1024&w=is&k=20&c=V_3jF--eOlApaL-chIZA-Sfz84cpA47FfIxRrQQtJhY=" class="card-img-top" alt="Product 1">
                <div class="card-body text-center">
                    <h5 class="card-title">Football</h5>
                    <p class="card-text">High-quality professional football.</p>
                    <a href="products.php?id=1" class="btn btn-warning">View Details</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card product-card">
                <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="Product 2">
                <div class="card-body text-center">
                    <h5 class="card-title">Shoes</h5>
                    <p class="card-text">Lightweight and comfortable for all athletes.</p>
                    <a href="products.php?id=2" class="btn btn-warning">View Details</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card product-card">
                <img src="https://images.unsplash.com/photo-1519861531473-9200262188bf?q=80&w=1771&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="Product 3">
                <div class="card-body text-center">
                    <h5 class="card-title">Basketball</h5>
                    <p class="card-text">Durable and perfect for indoor/outdoor play.</p>
                    <a href="products.php?id=3" class="btn btn-warning">View Details</a>
                </div>
            </div>
        </div>
    </div>
</section>
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
                <a href=" https://www.facebook.com/" class="text-light me-4"><i class="fab fa-facebook fa-lg"></i></a>
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
