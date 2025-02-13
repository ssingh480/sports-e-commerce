<?php
session_start();

// Simulated user details (replace with database queries)
$user = [
    "name" => "shivesh singh",
    "email" => "singhshivesh@gmail.com",
    "phone" => "+123 456 7890",
    "address" => "123 Sports Street, New Road, Kathmandu, Nepal",
    "joined" => "2023-05-10",
    "orders" => [
        ["id" => 101, "date" => "2024-01-10", "amount" => "Rs.1500", "status" => "Delivered"],
        ["id" => 102, "date" => "2024-02-05", "amount" => "Rs.2500", "status" => "Shipped"],
        ["id" => 103, "date" => "2024-02-12", "amount" => "Rs.1200", "status" => "Processing"]
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Sports E-Commerce</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- FontAwesome for Icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    
    <style>
        body {
            background: url('https://media.istockphoto.com/id/1317584985/photo/social-media-and-network.jpg?s=1024x1024&w=is&k=20&c=DjACLbW7EIiI_r6oJZZ3rdplJ3Ob-eSTJWlYyzqPE78=') no-repeat center center fixed;
            background-size: cover;
        }
        .profile-container {
            margin-top: 50px;
        }
        .profile-card, .order-history {
            border-radius: 15px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            background: rgba(255, 255, 255, 0.9); /* Slight transparency */
            padding: 30px;
        }
        .profile-img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 4px solid #007bff;
        }
        .badge {
            font-size: 14px;
            padding: 5px 10px;
        }
    </style>
</head>
<body>

<?php include 'n_header.php'; ?>

<div class="container profile-container">
    <div class="row">
        <div class="col-md-4 text-center">
            <div class="profile-card p-4">
                <img src="https://images.unsplash.com/photo-1529665253569-6d01c0eaf7b6?q=80&w=1985&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Profile Picture" class="profile-img mb-3">
                <h4 class="fw-bold"><?php echo $user['name']; ?></h4>
                <p class="text-muted"><?php echo $user['email']; ?></p>
                <p><i class="fas fa-phone-alt"></i> <?php echo $user['phone']; ?></p>
                <p><i class="fas fa-map-marker-alt"></i> <?php echo $user['address']; ?></p>
                <p class="text-muted">Member Since: <?php echo date("F j, Y", strtotime($user['joined'])); ?></p>
                <button class="btn btn-primary w-100 mt-2">Edit Profile</button>
            </div>
        </div>

        <div class="col-md-8">
            <div class="order-history">
                <h5 class="fw-bold mb-3">Order History</h5>
                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>Order ID</th>
                            <th>Date</th>
                            <th>Amount</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($user['orders'] as $order): ?>
                        <tr>
                            <td>#<?php echo $order['id']; ?></td>
                            <td><?php echo $order['date']; ?></td>
                            <td><?php echo $order['amount']; ?></td>
                            <td>
                                <span class="badge <?php 
                                    echo $order['status'] == 'Delivered' ? 'bg-success' : 
                                         ($order['status'] == 'Shipped' ? 'bg-primary' : 'bg-warning');
                                ?>">
                                    <?php echo $order['status']; ?>
                                </span>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <div class="mt-4 order-history">
                <h5 class="fw-bold">Account Settings</h5>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <button class="btn btn-outline-primary w-100">Change Password</button>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-outline-secondary w-100">Manage Addresses</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><br>
<?php
include_once("footer.php");
?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
