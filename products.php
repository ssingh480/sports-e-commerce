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
        .product-card {
            transition: 0.3s ease-in-out;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        }
        .product-card:hover {
            transform: scale(1.05);
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.3);
        }
        .product-card img {
            transition: transform 0.3s ease;
        }
        .product-card:hover img {
            transform: scale(1.1);
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
            </select>
        </div>
        <div class="col-md-3">
            <select id="priceFilter" class="form-select">
                <option value="all">All Prices</option>
                <option value="low">Rs.500-1000</option>
                <option value="medium">Rs.1000-2000</option>
                <option value="high">Rs.2000+</option>
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
            ["id" => 1, "name" => "Football", "category" => "football", "price" =>1000, "image" => "https://media.istockphoto.com/id/182148488/photo/an-isolated-soccer-ball-on-white.jpg?s=1024x1024&w=is&k=20&c=V_3jF--eOlApaL-chIZA-Sfz84cpA47FfIxRrQQtJhY="],
            ["id" => 2, "name" => "Shoes", "category" => "shoes", "price" => 800, "image" => "https://images.unsplash.com/photo-1600185365926-3a2ce3cdb9eb?q=80&w=1925&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"],
            ["id" => 3, "name" => "Basketball", "category" => "basketball", "price" => 1200, "image" => "https://images.unsplash.com/photo-1519861531473-9200262188bf?q=80&w=1771&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"],
            ["id" => 4, "name" => "Sports Bag", "category" => "accessories", "price" => 500, "image" => "https://media.istockphoto.com/id/1174909369/photo/blank-foldable-gym-cardio-fitness-duffel-bag-for-branding-3d-illustration.jpg?s=1024x1024&w=is&k=20&c=VcW4-radeebSzlvqAj8pXnWCUt27qnn50HNGoN-tVD8="],
            ["id" => 5, "name" => "Tennis Racket", "category" => "accessories", "price" => 700, "image" => "https://media.istockphoto.com/id/178956777/photo/tennis-racket-and-ball-on-white.jpg?s=1024x1024&w=is&k=20&c=XnJNbzTpUG8W4NmKw9XS_s1Mg-9QKQOs2Z9vHPLSZAU="],
            ["id" => 6, "name" => "Cycling Helmet", "category" => "accessories", "price" => 800, "image" => "https://images.unsplash.com/photo-1701522814809-c339c2b60a7b?q=80&w=1772&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"],
        ];
        foreach ($products as $product) {
            echo "<div class='col-md-4 mb-4 product-item' data-category='{$product['category']}' data-price='{$product['price']}' data-name='{$product['name']}'>
                    <div class='card product-card'>
                        <img src='{$product['image']}' class='card-img-top' alt='{$product['name']}'>
                        <div class='card-body text-center'>
                            <h5 class='card-title'>{$product['name']}</h5>
                            <p class='card-text'>$".number_format($product['price'], 2)."</p>
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
<script>
    document.getElementById('searchBox').addEventListener('input', filterProducts);
    document.getElementById('categoryFilter').addEventListener('change', filterProducts);
    document.getElementById('priceFilter').addEventListener('change', filterProducts);
    document.getElementById('sortFilter').addEventListener('change', sortProducts);

    document.querySelectorAll('.view-details').forEach(function (button) {
        button.addEventListener('click', function () {
            let productId = this.getAttribute('data-id');
            // Load product details dynamically (for demo, using static content)
            let productDetails = `<div class="row">
                                    <div class="col-md-6">
                                        <img src="images/product${productId}.jpg" alt="Product Image">
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Product Name ${productId}</h5>
                                        <p>Product description for product ${productId} goes here. It has all the details about the product.</p>
                                        <p><strong>Price:</strong> $${productId * 10}</p>
                                    </div>
                                  </div>`;
            document.querySelector('#quickViewModal .modal-body').innerHTML = productDetails;
            let quickViewModal = new bootstrap.Modal(document.getElementById('quickViewModal'));
            quickViewModal.show();
        });
    });

    function filterProducts() {
        let searchValue = document.getElementById('searchBox').value.toLowerCase();
        let selectedCategory = document.getElementById('categoryFilter').value;
        let selectedPrice = document.getElementById('priceFilter').value;

        document.querySelectorAll('.product-item').forEach(function (item) {
            let name = item.getAttribute('data-name').toLowerCase();
            let category = item.getAttribute('data-category');
            let price = parseFloat(item.getAttribute('data-price'));

            let show = (name.includes(searchValue)) &&
                       (selectedCategory === 'all' || category === selectedCategory) &&
                       (selectedPrice === 'all' || 
                        (selectedPrice === 'low' && price <= 500) ||
                        (selectedPrice === 'medium' && price > 500 && price <= 1000) ||
                        (selectedPrice === 'high' && price > 1000));

            item.style.display = show ? 'block' : 'none';
        });
    }

    function sortProducts() {
        let sortValue = document.getElementById('sortFilter').value;
        let productGrid = document.getElementById('productGrid');
        let products = Array.from(document.querySelectorAll('.product-item'));

        products.sort(function (a, b) {
            let aPrice = parseFloat(a.getAttribute('data-price'));
            let bPrice = parseFloat(b.getAttribute('data-price'));
            let aName = a.getAttribute('data-name').toLowerCase();
            let bName = b.getAttribute('data-name').toLowerCase();

            if (sortValue === 'price-asc') {
                return aPrice - bPrice;
            } else if (sortValue === 'price-desc') {
                return bPrice - aPrice;
            } else if (sortValue === 'name-asc') {
                return aName.localeCompare(bName);
            } else if (sortValue === 'name-desc') {
                return bName.localeCompare(aName);
            } else {
                return 0;
            }
        });

        productGrid.innerHTML = '';
        products.forEach(function (product) {
            productGrid.appendChild(product);
        });
    }
</script>
</body>
</html>