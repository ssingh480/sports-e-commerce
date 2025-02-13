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
                    <a href="login.php" class="btn btn-warning">View Details</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card product-card">
                <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="Product 2">
                <div class="card-body text-center">
                    <h5 class="card-title">Shoes</h5>
                    <p class="card-text">Lightweight and comfortable for all athletes.</p>
                    <a href="login.php" class="btn btn-warning">View Details</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card product-card">
                <img src="https://images.unsplash.com/photo-1519861531473-9200262188bf?q=80&w=1771&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="Product 3">
                <div class="card-body text-center">
                    <h5 class="card-title">Basketball</h5>
                    <p class="card-text">Durable and perfect for indoor/outdoor play.</p>
                    <a href="login.php" class="btn btn-warning">View Details</a>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="bg-dark text-light text-center py-3">
    <p>&copy; <?php echo date("Y"); ?> Sports E-Commerce. All Rights Reserved.</p>
</footer>
