<?php
include_once("header.php");
?>

<style>
    /* Full-screen background */
    body {
        background: url('https://media.istockphoto.com/id/811268074/photo/laptop-computer-desktop-pc-human-hand-office-soft-focus-picture-vintage-concept.jpg?s=1024x1024&w=is&k=20&c=yZmQx6V5ou_sL3Ga3l8RarkGVSUG7ik9MeQhbRlw-cM=') no-repeat center center fixed;
        background-size: cover;
        font-family: 'Poppins', sans-serif;
    }

    /* Login form container */
    .login-container {
        background: rgba(255, 255, 255, 0.2); /* Glassmorphism */
        border-radius: 12px;
        padding: 40px;
        width: 380px;
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
    <div class="login-container">
        <h3 class="text-center mb-4">Login to Your Account</h3>
        <form id="loginForm" action="login_action.php" method="POST">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
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
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="remember">
                <label class="form-check-label">Remember me</label>
            </div>
            <button type="submit" class="btn form-control btn-custom">Login</button>
        </form>
        <p class="text-center mt-3">
            Don't have an account? <a href="register.php">Register</a>
        </p>
        <p class="text-center">
            <a href="forgot_password.php">Forgot Password?</a>
        </p>
    </div>
</div>

<!-- jQuery Validation Script -->
<script>
    $(document).ready(function () {
        $("#loginForm").validate({
            rules: {
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    minlength: 6
                }
            },
            messages: {
                email: {
                    required: "Please enter your email",
                    email: "Enter a valid email"
                },
                password: {
                    required: "Enter your password",
                    minlength: "Password must be at least 6 characters"
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
