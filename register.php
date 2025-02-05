<?php
include_once("header.php");
?>
<br>
<style>
    /* Full-screen background */
    body {
        background: url('https://media.istockphoto.com/id/1468757785/photo/human-resources-and-management-concept-employee-must-complete-the-online-survey-form-marked.jpg?s=1024x1024&w=is&k=20&c=etwE-xKS1ysCnObTBDP660x4HwHAWK0Qr2htbjwNN4E=') no-repeat center center fixed;
        background-size: cover;
        font-family: 'Poppins', sans-serif;
    }

    /* Form container */
    .register-container {
        background: rgba(255, 255, 255, 0.2); /* Glassmorphism */
        border-radius: 12px;
        padding: 40px;
        width: 400px;
        backdrop-filter: blur(10px);
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
        animation: fadeIn 1s ease-in-out;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .form-control {
        border-radius: 8px;
        padding: 10px;
    }

    .btn-custom {
        background-color: #9E4D40;
        color: white;
        border-radius: 8px;
        padding: 10px;
        font-size: 16px;
    }

    .btn-custom:hover {
        background-color: #7c3d32;
    }

    .input-group-text {
        cursor: pointer;
    }

    /* Centering form */
    .form-wrapper {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>

<div class="form-wrapper">
    <div class="register-container">
        <h3 class="text-center mb-4">Create Your Account</h3>
        <form id="registerForm" action="register_action.php" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter full name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" id="phone" placeholder="Enter phone number" name="phone" required>
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Password</label>
                <div class="input-group">
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
                    <span class="input-group-text" id="togglePassword">
                        <i class="fas fa-eye"></i>
                    </span>
                </div>
            </div>
            <div class="mb-3">
                <label for="confirmPwd" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="confirmPwd" placeholder="Re-enter password" name="confirmPassword" required>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="terms" id="terms" required>
                <label class="form-check-label" for="terms">I agree to the Terms & Conditions</label>
            </div>
            <button type="submit" class="btn form-control btn-custom">Register</button>
        </form>
        <p class="text-center mt-3">Already have an account? <a href="login.php">Login</a></p>
    </div>
</div>

<!-- jQuery Validation Script -->
<script>
    $(document).ready(function () {
        $("#registerForm").validate({
            rules: {
                name: {
                    required: true,
                    minlength: 3
                },
                email: {
                    required: true,
                    email: true
                },
                phone: {
                    required: true,
                    digits: true,
                    minlength: 10,
                    maxlength: 10
                },
                password: {
                    required: true,
                    minlength: 6
                },
                confirmPassword: {
                    required: true,
                    equalTo: "#pwd"
                },
                terms: {
                    required: true
                }
            },
            messages: {
                name: {
                    required: "Please enter your full name",
                    minlength: "Name must be at least 3 characters long"
                },
                email: {
                    required: "Please enter your email",
                    email: "Enter a valid email"
                },
                phone: {
                    required: "Enter your phone number",
                    digits: "Only numbers allowed",
                    minlength: "Phone number must be 10 digits",
                    maxlength: "Phone number must be 10 digits"
                },
                password: {
                    required: "Enter a password",
                    minlength: "Password must be at least 6 characters"
                },
                confirmPassword: {
                    required: "Re-enter your password",
                    equalTo: "Passwords do not match"
                },
                terms: {
                    required: "You must agree to the terms"
                }
            }
        });

        // Password Toggle
        $("#togglePassword").click(function () {
            let passwordField = $("#pwd");
            let icon = $(this).find("i");
            if (passwordField.attr("type") === "password") {
                passwordField.attr("type", "text");
                icon.removeClass("fa-eye").addClass("fa-eye-slash");
            } else {
                passwordField.attr("type", "password");
                icon.removeClass("fa-eye-slash").addClass("fa-eye");
            }
        });
    });
</script>

<?php
include_once("footer.php");
?>
