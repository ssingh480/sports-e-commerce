<?php
include_once("header.php");
?>

<style>
    /* Full-screen background */
    body {
        background: url('https://media.istockphoto.com/id/1011417332/photo/close-up-man-hand-holding-smartphone-and-touch-on-screen-for-search-information-with-virtual.jpg?s=1024x1024&w=is&k=20&c=kCn9cjZcthFu0FWVrOJH4HSjrYeuAyn1HBN0tFqZVMU=') no-repeat center center fixed;
        background-size: cover;
        font-family: 'Poppins', sans-serif;
    }

    /* Forgot Password form container */
    .forgot-password-container {
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

    /* Centering form */
    .form-wrapper {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>

<div class="form-wrapper">
    <div class="forgot-password-container">
        <h3 class="text-center mb-4">Forgot Your Password?</h3>
        <form id="forgotPasswordForm" action="forgot_password_action.php" method="POST">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
            </div>
            <button type="submit" class="btn form-control btn-custom">Reset Password</button>
        </form>
        <p class="text-center mt-3">
            Remembered your password? <a href="login.php">Login</a>
        </p>
    </div>
</div>

<!-- jQuery Validation Script -->
<script>
    $(document).ready(function () {
        $("#forgotPasswordForm").validate({
            rules: {
                email: {
                    required: true,
                    email: true
                }
            },
            messages: {
                email: {
                    required: "Please enter your email",
                    email: "Enter a valid email"
                }
            }
        });
    });
</script>

<?php
include_once("footer.php");
?>
