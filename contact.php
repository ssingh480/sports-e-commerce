<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Sports E-Commerce</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- FontAwesome for Icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <style>
        /* Dark Mode */
        body.dark-mode {
            background: #121212;
            color: white;
        }
        
        /* Hero Section */
        .hero {
            background: url('https://media.istockphoto.com/id/1450058572/photo/businessman-using-a-laptop-and-touching-on-virtual-screen-contact-icons-consists-of-telephone.jpg?s=1024x1024&w=is&k=20&c=UIp4j9qm93rIBAbfu7AinKiudy-w60YTdyRLt0GFgk4=') center/cover no-repeat;
            height: 400px;
            color: whitesmoke;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            position: relative;
            animation: fadeIn 1.5s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .hero h1 {
            font-size: 3rem;
            font-weight: bold;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.7);
        }

        /* Contact Info */
        .contact-info {
            background: #f8f9fa;
            padding: 40px 0;
        }

        .contact-box {
            text-align: center;
            padding: 20px;
            transition: transform 0.3s ease-in-out;
        }

        .contact-box:hover {
            transform: translateY(-5px);
        }

        .contact-box i {
            font-size: 2rem;
            color: #007bff;
            margin-bottom: 10px;
        }

        /* Contact Form */
        .contact-form {
            padding: 40px;
            background: white;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            transition: 0.3s ease-in-out;
        }

        /* Floating Action Buttons */
        .fab-container {
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }


        /* Dark Mode Toggle */
        .dark-mode-toggle {
            position: fixed;
            top: 20px;
            right: 20px;
            cursor: pointer;
            font-size: 1.5rem;
        }
    </style>
</head>
<body>

<?php include 'n_header.php'; ?>

<!-- Dark Mode Toggle -->
<div class="dark-mode-toggle text-primary">
    <i class="fas fa-moon" id="darkModeIcon"></i>
</div>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <h1>Contact Us</h1>
        <p>We’d love to hear from you! Reach out to us anytime.</p>
    </div>
</section>

<!-- Contact Info Section -->
<section class="contact-info">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-4">
                <div class="contact-box">
                    <i class="fas fa-map-marker-alt"></i>
                    <h5>Our Address</h5>
                    <p>123 Sports Street, New road, Kathmandu, Nepal</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-box">
                    <i class="fas fa-phone-alt"></i>
                    <h5>Call Us</h5>
                    <p>+9726609155</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-box">
                    <i class="fas fa-envelope"></i>
                    <h5>Email Us</h5>
                    <p>support@sportsecommerce.com</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form Section -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Get in Touch</h2>
                <p>Fill out the form below, and we'll get back to you as soon as possible.</p>

                <form id="contactForm" class="contact-form">
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Your Message</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Send Message</button>
                </form>
            </div>

            <div class="col-md-6">
                <h2>Find Us</h2>
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?..." width="100%" height="350px"></iframe>
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
    </div>
</footer>
</script>

</body>
</html>
