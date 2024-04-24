<?php
// Start session
session_start();

// Check if user is logged in
// if (!isset($_SESSION['user_id'])) {
//     // Redirect to login page if user is not logged in
//     header("location: login.php");
//     exit;
// }

// Fetch user data from session variables
$user_id = $_SESSION['user_id'];
$username = $_SESSION['name'];
$email = $_SESSION['username'];
$age = $_SESSION['age'];
$gender = $_SESSION['gender'];
$address = $_SESSION['address'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <!-- Add your CSS link here -->
    <link rel="stylesheet" href="./css/profile.css">
</head>
<body>
    <div class="top-nav">
    <div class="container d-flex">
        <p>Order Online Or Call Us: (001) 2222-55555</p>
        <ul class="d-flex">
            <li><a href="about.html">About Us</a></li>
            <li><a href="terms.html">FAQ</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
    </div>
</div>
<div class="navigation">
    <div class="nav-center container d-flex">
        <a href="index.html" class="logo"><h1>The Mart</h1></a>

        <ul class="nav-list d-flex">
            <li class="nav-item">
                <a href="index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="product.html" class="nav-link">Shop</a>
            </li>
            <li class="nav-item">
                <a href="terms.xml" class="nav-link">Terms</a>
            </li>
            <li class="nav-item">
                <a href="about.html" class="nav-link">About</a>
            </li>
            <li class="nav-item">
                <a href="contact.html" class="nav-link">Contact</a>
            </li>
        </ul>

        <div class="icons d-flex">
            <a href="login.html" class="icon">
                <i class="bx bx-user"></i>
            </a>
            <a href="search.html" class="icon">
                <i class="bx bx-search"></i>
            </a>
            <div class="icon">
                <i class="bx bx-heart"></i>
                <span class="d-flex">0</span>
            </div>
            <a href="cart.html" class="icon">
                <i class="bx bx-cart"></i>
                <span class="d-flex">0</span>
            </a>
            <a href="logout.php" class="icon">
                <i class="bx bx-log-out"></i>
            </a>
        </div>

        <div class="hamburger">
            <i class="bx bx-menu-alt-left"></i>
        </div>
    </div>
</div>
    <div class="container">
    <h1 style="text-align: center;">User Profile</h1>
        <div class="profile-info">
            <div class="profile-info-item">
                <label>Name:</label>
                <span><?php echo $username; ?></span>
            </div>
            <div class="profile-info-item">
                <label>Email:</label>
                <span><?php echo $email; ?></span>
            </div>
            <div class="profile-info-item">
                <label>Age:</label>
                <span><?php echo $age; ?></span>
            </div>
            <div class="profile-info-item">
                <label>Gender:</label>
                <span><?php echo $gender; ?></span>
            </div>
            <div class="profile-info-item">
                <label>Address:</label>
                <span><?php echo $address; ?></span>
            </div>
        </div>
    </div>
<footer class="footer">
    <div class="row">
        <div class="col d-flex">
            <h4>INFORMATION</h4>
            <a href="">About us</a>
            <a href="">Contact Us</a>
            <a href="">Term & Conditions</a>
            <a href="">Shipping Guide</a>
        </div>
        <div class="col d-flex">
            <h4>USEFUL LINK</h4>
            <a href="">Online Store</a>
            <a href="">Customer Services</a>
            <a href="">Promotion</a>
            <a href="">Top Brands</a>
        </div>
        <div class="col d-flex">
            <span><i class="bx bxl-facebook-square"></i></span>
            <span><i class="bx bxl-instagram-alt"></i></span>
            <span><i class="bx bxl-github"></i></span>
            <span><i class="bx bxl-twitter"></i></span>
            <span><i class="bx bxl-pinterest"></i></span>
        </div>
    </div>
</footer>
</body>
</html>
