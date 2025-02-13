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
        }
        .product-card:hover {
            transform: scale(1.05);
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.3);
        }
        .product-card img {
            transition: transform 0.3s ease;
            max-height: 250px;
            object-fit: cover;
        }
        .product-card:hover img {
            transform: scale(1.1);
        }
        .btn-cart {
            background-color: #ff9800;
            color: white;
            font-weight: bold;
            transition: 0.3s;
        }
        .btn-cart:hover {
            background-color: #e68900;
        }
        .btn-buy {
            background-color: #28a745;
            color: white;
            font-weight: bold;
            transition: 0.3s;
        }
        .btn-buy:hover {
            background-color: #218838;
        }
        .modal-content img {
            max-width: 100%;
            border-radius: 10px;
        }
        .modal-content img {
            max-width: 100%;
        }
    </style>
</head>
<body>

<?php include 'n_header.php'; ?>

<div class="container my-5">
    <h2 class="text-center mb-4">Explore Our Products</h2>
    
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
                <option value="cycling">Cycling</option>
                <option value="tennis">Tennis</option>
                <option value="gym">Gym Equipment</option>
                <option value="cricket">Cricket</option>
                <option value="badminton">Badminton</option>
                <option value="swimming">Swimming</option>
                <option value="hiking">Hiking</option>
                <option value="boxing">Boxing</option>
                <option value="golf">Golf</option>
                <option value="rugby">Rugby</option>
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
            ["id" => 1, "name" => "Football", "category" => "football", "price" => 1500, "image" => "https://media.istockphoto.com/id/185098960/photo/isolated-soccer.jpg?s=1024x1024&w=is&k=20&c=1YE5Lxke9SyZhGLWTKIEG7nYaMWBekHCZ_Z7-eEZRuo="],
            ["id" => 2, "name" => "Basketball", "category" => "basketball", "price" => 1200, "image" => "https://cdn.pixabay.com/photo/2022/11/22/20/25/ball-7610545_1280.jpg"],
            ["id" => 3, "name" => "Running Shoes", "category" => "shoes", "price" => 2200, "image" => "https://cdn.pixabay.com/photo/2016/06/03/17/35/shoes-1433925_1280.jpg"],
            ["id" => 4, "name" => "Gym Gloves", "category" => "gym", "price" => 800, "image" => "https://media.istockphoto.com/id/478708136/photo/working-gloves.jpg?s=1024x1024&w=is&k=20&c=zZPUCSGCH3OkwsU9q44AW517w796H61xahr4YyNtZmc="],
            ["id" => 5, "name" => "Cricket Bat", "category" => "cricket", "price" => 2500, "image" => "https://media.istockphoto.com/id/1185410337/vector/vector-realistic-cricket-bat-stick-betting-promo.jpg?s=1024x1024&w=is&k=20&c=7ztnLFZl_b3WyRb4KpJwggi3K1F6_X9RCCVK_D7FlDA="],
            ["id" => 6, "name" => "Tennis Racket", "category" => "tennis", "price" => 1700, "image" => "https://images.unsplash.com/photo-1617883861744-13b534e3b928?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"],
            ["id" => 7, "name" => "Badminton Shuttlecock", "category" => "badminton", "price" => 600, "image" => "https://plus.unsplash.com/premium_photo-1723618856750-f454d4f53b0e?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"],
            ["id" => 8, "name" => "Swimming Goggles", "category" => "swimming", "price" => 900, "image" => "https://media.istockphoto.com/id/599132502/photo/swimming-goggles-on-white-background.jpg?s=1024x1024&w=is&k=20&c=_kD-JmjdFP9Lqi8J_3xIRLIl3w2QubVG0AdjAAozlds="],
            ["id" => 9, "name" => "Hiking Backpack", "category" => "hiking", "price" => 1800, "image" => "https://images.unsplash.com/photo-1448582649076-3981753123b5?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"],
            ["id" => 10, "name" => "Boxing Gloves", "category" => "boxing", "price" => 1600, "image" => "https://media.istockphoto.com/id/93270350/photo/boxing-gloves.jpg?s=1024x1024&w=is&k=20&c=ExI6kOV4BWuLkAyyW43KHviEt4_euUPg5G1_yJJQRNo="],
            ["id" => 11, "name" => "Golf Club", "category" => "golf", "price" => 3000, "image" => "https://images.unsplash.com/photo-1530028828-25e8270793c5?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"],
            ["id" => 12, "name" => "Rugby Ball", "category" => "rugby", "price" => 1400, "image" => "https://plus.unsplash.com/premium_photo-1714573001797-be65de6b0f82?q=80&w=1920&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"]
        ];
        foreach ($products as $product) {
            echo "<div class='col-md-4 mb-4 product-item' data-category='{$product['category']}' data-price='{$product['price']}' data-name='{$product['name']}'>
                    <div class='card product-card'>
                        <img src='{$product['image']}' class='card-img-top' alt='{$product['name']}'>
                        <div class='card-body text-center'>
                            <h5 class='card-title'>{$product['name']}</h5>
                            <p class='card-text'>Rs.".number_format($product['price'], 2)."</p>
                            <button class='btn btn-primary view-details' data-id='{$product['id']}'>Quick View</button>
                             <form method='POST' action='cart.php' style='display:inline;'>
                                <input type='hidden' name='product_id' value='{$product['id']}'>
                                <input type='hidden' name='product_name' value='{$product['name']}'>
                                <input type='hidden' name='product_price' value='{$product['price']}'>
                                <input type='hidden' name='product_image' value='{$product['image']}'>
                                <button type='submit' name='add_to_cart' class='btn btn-cart'><i class='fas fa-shopping-cart'></i> Add to Cart</button>
                            </form>

                            <form method='POST' action='orderss.php' style='display:inline;'>
                                <input type='hidden' name='product_id' value='{$product['id']}'>
                                <input type='hidden' name='product_name' value='{$product['name']}'>
                                <input type='hidden' name='product_price' value='{$product['price']}'>
                                <input type='hidden' name='product_image' value='{$product['image']}'>
                                <button type='submit' name='buy_now' class='btn btn-success'><i class='fas fa-shopping-bag'></i> Buy Now</button>
                            </form>
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
<?php
include_once("footer.php");
?>


<!-- Include Bootstrap JS -->
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
