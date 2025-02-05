<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Sports E-Commerce</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- FontAwesome for Icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }
        
        /* Hero Section */
        .hero {
            background: url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') center/cover no-repeat;
            height: 400px;
            color: black;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            position: relative;
            padding: 0 15px;
        }
        
        .hero h1 {
            font-size: 3rem;
            font-weight: bold;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.7);
        }

        /* Sections */
        .section {
            padding: 60px 0;
        }

        /* Team Section */
        .team-card {
            text-align: center;
            transition: transform 0.3s ease-in-out;
        }

        .team-card:hover {
            transform: translateY(-5px);
        }

        .team-card img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            margin-bottom: 15px;
            border: 5px solid #ddd;
        }

        /* Testimonials */
        .testimonial {
            background: #f8f9fa;
            padding: 40px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        .testimonial img {
            width: 120px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 15px;
            border: 3px solid black;
        }
    </style>
</head>
<body>

<?php include 'header.php'; ?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <h1>About Us</h1>
        <p>Discover our journey and commitment to excellence in sports e-commerce.</p>
    </div>
</section>

<!-- Our Story Section -->
<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2>Our Story</h2>
                <p>
                    Established in 2025, Sports E-Commerce has been at the forefront of providing high-quality 
                    sports gear to athletes and enthusiasts worldwide. Our commitment to quality and customer satisfaction 
                    has made us a trusted name in the industry.
                </p>
                <p>
                    From humble beginnings in a small warehouse to a global online presence, our journey is fueled 
                    by passion, innovation, and a deep love for sports.
                </p>
            </div>
            <div class="col-md-6">
                <img src="" class="mg-fluid rounded" alt="Our Story">
            </div>
        </div>
    </div>
</section>

<!-- Mission and Vision -->
<section class="section bg-light">
    <div class="container text-center">
        <h2>Our Mission & Vision</h2>
        <p class="lead">Empowering athletes and sports lovers with top-quality gear, ensuring excellence in performance.</p>
    </div>
</section>

<!-- Meet the Team -->
<section class="section">
    <div class="container text-center">
        <h2>Meet Our Team</h2>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="team-card">
                    <img src="https://scontent-del2-1.xx.fbcdn.net/v/t39.30808-6/473614295_122128796900404439_5393165279222006085_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=833d8c&_nc_ohc=OJapNM5iTA8Q7kNvgF-M-Ty&_nc_zt=23&_nc_ht=scontent-del2-1.xx&_nc_gid=AFNm9KVW2KuX37kAB3b9Dhk&oh=00_AYDZvhgzWBICTA4P0gpc6wuUO-HPQR5oQq3rt9ObrVeheQ&oe=67A95C16" alt="CEO">
                    <h5>Narendra yadav</h5>
                    <p>CEO & Founder</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team-card">
                    <img src="https://scontent-del1-2.xx.fbcdn.net/v/t39.30808-6/470224480_1080932503520568_1605715021161852591_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=833d8c&_nc_ohc=d7bmWRa6RG8Q7kNvgGhevfq&_nc_zt=23&_nc_ht=scontent-del1-2.xx&_nc_gid=A71YzIbeBILDvu-MGvbi8vT&oh=00_AYAi-podMRU-M2CJMvFLLziyX4GqHVGXBrln8h2Lz-BBtA&oe=67A9446A" alt="Marketing Head">
                    <h5>vivek tiwari</h5>
                    <p>Head of Marketing</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team-card">
                    <img src="https://scontent-pnq1-1.xx.fbcdn.net/v/t39.30808-6/467814556_122186940878162933_3137501688997366568_n.jpg?stp=dst-jpg_s960x960_tt6&_nc_cat=109&ccb=1-7&_nc_sid=cc71e4&_nc_ohc=BpjrCHnxPScQ7kNvgHYXrdP&_nc_zt=23&_nc_ht=scontent-pnq1-1.xx&_nc_gid=A2panuehY7qFa0ajMdUHRyj&oh=00_AYDkq9bFs4OC6nQxHGvwVDkJVMW0tv6KW9VMjYWLiHq3OQ&oe=67A94602" alt="CTO">
                    <h5>Shivesh singh</h5>
                    <p>Chief Technology Officer</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Customer Testimonials -->
<section class="section bg-light">
    <div class="container text-center">
        <h2>What Our Customers Say</h2>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="testimonial">
                    <img src="https://scontent-pnq1-1.xx.fbcdn.net/v/t39.30808-6/462475029_1329873601756281_6096751424188355329_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=rrQ6BWiM_JoQ7kNvgHL9srd&_nc_zt=23&_nc_ht=scontent-pnq1-1.xx&_nc_gid=AtpLtJZrRKYoNzBQCqxNube&oh=00_AYCHwjr7GAN4PrkXpywxZjfTH-cR9tB9l7lrwviQ8cMIuQ&oe=67A936F9" alt="Customer">
                    <p>"Best sports store ever! The quality of the products is unmatched, and the delivery was super fast."</p>
                    <h6>- Prince</h6>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial">
                    <img src="https://scontent-pnq1-1.xx.fbcdn.net/v/t39.30808-6/469777698_1222674282138488_2067385438495858702_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=a5f93a&_nc_ohc=W3l4THK0ee8Q7kNvgHaHd1x&_nc_zt=23&_nc_ht=scontent-pnq1-1.xx&_nc_gid=A2ZL2AMKIlPO2QLdvXW5UiS&oh=00_AYCePrVFHzOqc_vgOQVrB8OgNmqOkEm45SH-bmdFe_tyQg&oe=67A93B88" alt="Customer">
                    <p>"Incredible customer service and great pricing. I always shop here for my sports needs!"</p>
                    <h6>- Raju</h6>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial">
                    <img src="https://scontent-del2-2.xx.fbcdn.net/v/t39.30808-6/368279538_823363795983535_1403585353439922168_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=833d8c&_nc_ohc=dPktQCZFlVYQ7kNvgHSR1tO&_nc_zt=23&_nc_ht=scontent-del2-2.xx&_nc_gid=A7rpjXLPXY7xcbXt3ocIedh&oh=00_AYBIEallmvQQlF-O9yBEXj30s78KUZuMUD7XswaEaWl8jg&oe=67A95D2C" alt="Customer">
                    <p>"Highly recommend! The products are top-notch, and their support team is very responsive."</p>
                    <h6>- Maheswar</h6>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="section">
    <div class="container text-center">
        <h2>Get in Touch</h2>
        <p>Have questions? Reach out to us, and we'll be happy to assist you.</p>
        <a href="contact.php" class="btn btn-primary">Contact Us</a>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
