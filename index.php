<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <!--make a login form-->
    <div class="container">
        <div class="card">
            <div class="inner-box" id="card">
                <div class="card-front">
                    <h2>LOGIN</h2>
                    <form method="post" action="#">
                        <input type="email" name="email"class="input-box" placeholder="your email id" required>
                        <input type="password" name="password" class="input-box" placeholder="password" required>
                        <button type="submit" class="submit-btn" name="login">Submit</button>
                        <input type="checkbox"><span>Remember me</span>
                    </form>
                    <button type="button" class="btn" onclick="openRegister()">I'm New Here</button>
                    <a href="admin/login.php">Login as Admin</a>

                </div>
                <div class="card-back">
                <h2>REGISTER</h2>
                    <form method="post" action="#">
                       <input type="text" name="name" class="input-box" placeholder="your name" required>
                        <input type="email" name ="email" class="input-box" placeholder="your email id" required>
                        <input type="password" name="password" class="input-box" placeholder="password" required>
                        <button type="submit" class="submit-btn1" name="submit">Submit</button>
                        <input type="checkbox"><span>Remember me</span>
                    </form>
                    <button type="button" class="btn" onclick="openLogin()">I've an account</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        var card=document.getElementById("card");
        function openRegister(){
            card.style.transform="rotateY(-180deg)";
        }
        function openLogin(){
            card.style.transform="rotateY(0deg)";
        }
    </script>
</body>
</html>
<?php
include 'DB/connection.php';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $stmt = $conn->prepare('INSERT INTO users(name,email,password) VALUES (?,?,?)');
    $stmt->bind_param('sss',$name,$email,$password);

    if($stmt->execute()){
        echo 'Registred Successfully';
    }else{
        echo 'Error' . $stmt->error;
    }
}
if (isset($_POST['login'])) {
    // Sanitize and validate input
    $email = $conn->real_escape_string($_POST['email'] ?? '');
    $password = $conn->real_escape_string($_POST['password'] ?? '');

    // Query to check credentials
    $result = $conn->query("SELECT * FROM users WHERE email = '$email' AND password = '$password'");
     echo $result->num_rows > 0 ? header('Location:user/homee.php') : "<script>alert('Invalid email or password')</script>";
}
?>