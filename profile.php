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
</body>
</html>
