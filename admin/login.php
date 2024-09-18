<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<div class="container">
        <div class="card">
            <div class="inner-box" id="card">
                <div class="card-front">
                    <h2> ADMIN LOGIN</h2>
                    <form method="post" action="#">
                        <input type="email" name="email"class="input-box" placeholder="your email id" required>
                        <input type="password" name="password" class="input-box" placeholder="password" required>
                        <button type="submit" class="submit-btn" name="login">Submit</button>
                    </form>
                    <a href="../index.php">User Login</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php
include '../DB/connection.php';
if (isset($_POST['login'])) {
    // Sanitize and validate input
    $email = $conn->real_escape_string($_POST['email'] ?? '');
    $password = $conn->real_escape_string($_POST['password'] ?? '');

    // Query to check credentials
    $result = $conn->query("SELECT * FROM admin WHERE email = '$email' AND password = '$password'");
     echo $result->num_rows > 0 ? header('Location:index.php') : "<script>alert('Invalid email or password')</script>";
}
?>