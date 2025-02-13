<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports E-Commerce - Home</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- FontAwesome for Icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <style>
        body {
            background-color: #f8f9fa;
        }
        .carousel-item img {
            height: 500px;
            object-fit: cover;
        }
        .carousel-caption {
            background: rgba(0, 0, 0, 0.5);
            padding: 15px;
            border-radius: 5px;
        }   
        .category-card img {
         height: 150px;  /* Adjust as needed */
         object-fit: cover;
          border-radius: 10px;
        }
        .category-card {
          transition: 0.3s;
          cursor: pointer;
           border-radius: 10px;
        }
        .category-card:hover {
           transform: scale(1.05);
          box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }

        .product-card {
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            height: 100%;
            display: flex;
            flex-direction: column;

        }
        .product-card img {
         height: 250px; /* Adjust for uniform height */
         object-fit: cover;
          border-top-left-radius: 10px;
          border-top-right-radius: 10px;
        }

        .product-card .card-body {
         flex-grow: 1;
         display: flex;
         flex-direction: column;
         justify-content: space-between;
        }

        .product-card .btn {
         margin-top: auto;
        }
        .product-card:hover {
            transform: scale(1.05);
        }
        .testimonial-card {
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
        }
    </style>
</head>
<body>

<?php include 'n_header.php'; ?>

<!-- Carousel Section -->
<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://media.istockphoto.com/id/1136317339/photo/sports-equipment-on-floor.jpg?s=1024x1024&w=is&k=20&c=6-iRB0kZL9S4aE4hsLsLO1e-cnJ1C6oqgAyePxy0UkM=" class="d-block w-100" alt="Sports Banner 1">
            <div class="carousel-caption">
              <h3>Exclusive Sports Gear</h3>
              <p>Get the latest gear for all sports.</p>
             </div>
        </div>
        <div class="carousel-item">
            <img src="https://cdn.pixabay.com/photo/2018/07/22/08/49/tennis-3554019_1280.jpg" class="d-block w-100" alt="Sports Banner 2">
            <div class="carousel-caption">
             <h3>Top Quality Equipment</h3>
             <p>Shop professional-grade sports equipment.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://cdn.pixabay.com/photo/2015/09/09/17/57/ski-932188_1280.jpg" class="d-block w-100" alt="Sports Banner 3">
            <div class="carousel-caption">
               <h3>Stay Ahead in the Game</h3>
               <p>Upgrade your training with the best products.</p>
            </div>

        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </button>
</div>

<!-- Categories Section -->
<div class="container mt-5">
    <h2 class="text-center mb-4">Shop by Categories</h2>
    <div class="row">
        <div class="col-md-2">
            <div class="card category-card text-center p-3">
                <img src="https://media.istockphoto.com/id/182148488/photo/an-isolated-soccer-ball-on-white.jpg?s=1024x1024&w=is&k=20&c=V_3jF--eOlApaL-chIZA-Sfz84cpA47FfIxRrQQtJhY=" class="card-img-top" alt="Football">
                <h5 class="mt-3">Football</h5>
                
            </div>
        </div>
        <div class="col-md-2">
            <div class="card category-card text-center p-3">
                <img src="https://cdn.pixabay.com/photo/2022/11/22/20/25/ball-7610545_1280.jpg
                "class="card-img-top" alt="Basketball">
                <h5 class="mt-3">Basketball</h5>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card category-card text-center p-3">
                <img src="https://th.bing.com/th/id/OIP.gxjaP55eU4ZyJhWwTcWl2AHaHa?rs=1&pid=ImgDetMain" class="card-img-top" alt="Table Tennis">
                <h5 class="mt-3">Table Tennis</h5>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card category-card text-center p-3">
                <img src="https://th.bing.com/th/id/R.44a62a77f9df409f388aeb9affb079eb?rik=O7Lqt2xfi0AsJQ&riu=http%3a%2f%2fd3f8w3yx9w99q2.cloudfront.net%2f1279%2fbody-solid-leverage-shoulder-press-professional-gym-equipment%2fbody-solid-leverage-shoulder-press-professional-gym-equipment_0_0.jpg&ehk=%2fr1PNoBT%2bFRdGM9nWXtwZ3ePKBov%2fAtGQ42XPOHurLs%3d&risl=&pid=ImgRaw&r=0" class="card-img-top" alt="Fitness">
                <h5 class="mt-3">Fitness</h5>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card category-card text-center p-3">
                <img src="https://swimcompetitive.com/wp-content/uploads/2023/06/swimming-equipment.webp" class="card-img-top" alt="Swimming">
                <h5 class="mt-3">Swimming</h5>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card category-card text-center p-3">
                <div class="d-flex justify-content-center align-items-center" style="height: 20px;">
                    <i class="fas fa-plus fa-3x text-primary"></i>
                </div>
                <h5 class="mt-3">More</h5>
            </div>
        </div>
    </div>
</div>


<!-- Featured Products -->
<div class="container mt-5">
    <h2 class="text-center mb-4">Featured Products</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card product-card p-3">
                <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="Sports Shoes">
                <div class="card-body text-center">
                    <h5 class="card-title">Nike Running Shoes</h5>
                    <p class="card-text">Rs. 3000</p>
                    <button class="btn btn-primary w-100">Buy Now</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card product-card p-3">
                <img src="https://th.bing.com/th/id/OIP.GuqjzVUhVTjVmstNRYSgxQAAAA?rs=1&pid=ImgDetMain" class="card-img-top" alt="Jersey">
                <div class="card-body text-center">
                    <h5 class="card-title">Csk Dhoni jersey</h5>
                    <p class="card-text">Rs. 2000</p>
                    <button class="btn btn-primary w-100">Buy Now</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card product-card p-3">
                <img src="https://i5.walmartimages.com/asr/37e39208-0eba-4d89-a576-814f0fccb958_4.a6e56612d61328a8aa89478a8a11959d.jpeg" class="card-img-top" alt="Basketball">
                <div class="card-body text-center">
                    <h5 class="card-title">Spalding Basketball</h5>
                    <p class="card-text">Rs. 1500</p>
                    <button class="btn btn-primary w-100">Buy Now</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Newsletter Signup -->
<?php
include_once("footer.php");
?>



<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
