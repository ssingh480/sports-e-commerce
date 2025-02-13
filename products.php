<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - Sports E-Commerce</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- FontAwesome for Icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    
    <style>
        body {
            background-color: #f8f9fa;
        }
        .product-card {
            transition: 0.3s ease-in-out;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            background: #fff;
            padding: 10px;
            position: relative;
        }
        .product-card:hover {
            transform: scale(1.05);
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.3);
        }
        .product-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        .product-card:hover img {
            transform: scale(1.1);
        }
        .product-discount {
            position: absolute;
            top: 10px;
            left: 10px;
            background: red;
            color: white;
            padding: 5px 10px;
            font-size: 14px;
            font-weight: bold;
            border-radius: 5px;
        }
        .modal-content img {
            max-width: 100%;
        }
    </style>
</head>
<body>

<?php include 'header.php'; ?>

<div class="container my-5">
    <h2 class="text-center mb-4">Our Products</h2>
    
    <!-- Search & Filter -->
    <div class="row mb-4">
        <div class="col-md-3">
            <input type="text" id="searchBox" class="form-control" placeholder="Search products...">
        </div>
        <div class="col-md-3">
            <select id="categoryFilter" class="form-select">
                <option value="all">All Categories</option>
                <option value="football">Football</option>
                <option value="basketball">Basketball</option>
                <option value="shoes">Shoes</option>
                <option value="accessories">Accessories</option>
                <option value="gym">Gym Equipment</option>
                <option value="cricket">Cricket</option>
                <option value="swimming">Swimming</option>
                <option value="cycling">Cycling</option>
                <option value="tennis">Tennis</option>
            </select>
        </div>
        <div class="col-md-3">
            <select id="priceFilter" class="form-select">
                <option value="all">All Prices</option>
                <option value="low">Under Rs.1000</option>
                <option value="medium">Rs.1000-5000</option>
                <option value="high">Above Rs.5000</option>
            </select>
        </div>
        <div class="col-md-3">
            <select id="sortFilter" class="form-select">
                <option value="default">Sort By</option>
                <option value="price-asc">Price: Low to High</option>
                <option value="price-desc">Price: High to Low</option>
                <option value="name-asc">Name: A to Z</option>
                <option value="name-desc">Name: Z to A</option>
            </select>
        </div>
    </div>
    
    <!-- Product Grid -->
    <div class="row" id="productGrid">
        <?php
        $products = [
            ["id" => 1, "name" => "Football", "category" => "football", "price" => 1200, "offer" => "10%", "image" => "https://media.istockphoto.com/id/185098960/photo/isolated-soccer.jpg?s=1024x1024&w=is&k=20&c=1YE5Lxke9SyZhGLWTKIEG7nYaMWBekHCZ_Z7-eEZRuo="],
            ["id" => 2, "name" => "Running Shoes", "category" => "shoes", "price" => 2500, "offer" => "15%", "image" => "https://cdn.pixabay.com/photo/2016/06/03/17/35/shoes-1433925_1280.jpg"],
            ["id" => 3, "name" => "Basketball", "category" => "basketball", "price" => 1800, "offer" => "5%", "image" => "https://cdn.pixabay.com/photo/2022/11/22/20/25/ball-7610545_1280.jpg"],
            ["id" => 4, "name" => "Cricket Bat", "category" => "cricket", "price" => 3000, "offer" => "20%", "image" => "https://www.prodirectcricket.com/productimages/Main/193888_Main_Thumb_0380895.jpg"],
            ["id" => 5, "name" => "Tennis Racket", "category" => "tennis", "price" => 3500, "offer" => "10%", "image" => "https://th.bing.com/th/id/OIP.Z1VuRtE5r4DPG2hTazQNEwHaDt?rs=1&pid=ImgDetMain"],
        ];

        foreach ($products as $product) {
            echo "<div class='col-md-4 mb-4 product-item' data-category='{$product['category']}' data-price='{$product['price']}' data-name='{$product['name']}'>
                    <div class='card product-card'>
                        <span class='product-discount'>{$product['offer']} OFF</span>
                        <img src='{$product['image']}' class='card-img-top' alt='{$product['name']}'>
                        <div class='card-body text-center'>
                            <h5 class='card-title'>{$product['name']}</h5>
                            <p class='card-text'><strong>Rs.".number_format($product['price'], 2)."</strong></p>
                            <button class='btn btn-primary view-details' data-id='{$product['id']}'>Quick View</button>
                        </div>
                    </div>
                  </div>";
        }
        ?>
    </div>
</div>

<!-- Quick View Modal -->
<div class="modal fade" id="quickViewModal" tabindex="-1" aria-labelledby="quickViewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="quickViewModalLabel">Product Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Product details will be loaded dynamically here -->
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
document.querySelectorAll('.view-details').forEach(button => {
    button.addEventListener('click', function() {
        let productId = this.getAttribute('data-id');
        let modalBody = document.querySelector('#quickViewModal .modal-body');
        modalBody.innerHTML = `<h5>Product ${productId}</h5><p>Product description for ${productId} goes here.</p>`;
        new bootstrap.Modal(document.getElementById('quickViewModal')).show();
    });
});
</script>
<footer class="bg-dark text-light text-center py-3">
    <p>&copy; <?php echo date("Y"); ?> Sports E-Commerce. All Rights Reserved.</p>
</footer>

</body>
</html>
