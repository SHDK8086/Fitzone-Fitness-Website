<?php
@include 'connection.php';

session_start();
if (isset($_POST['btn-signin'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    $select = "SELECT * FROM register WHERE email = '$email'";
    $result = mysqli_query($conn, $select);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        if (password_verify($password, $row['password'])) {
            $_SESSION['user_name'] = $row['name'];
            $_SESSION['email'] = $email;
            echo "<script>alert('Login successful!');
            window.location.href='UserPage.php';</script>";
            exit();
        }
    }
    echo "<script>alert('Invalid Email or Password');</script>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="LoginPage.css">
    <link rel="icon" href="images/Logopng.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
<div class="login">
    <div class="container">
        <div class="image-section">
            <div class="image-overlay">
                <img src="images/login.jpg" alt="Login Background">
            </div>
        </div>
        <div class="form">
            <form method="POST" action="">
                <a href="HomePage.php">
                    <img class="logout" src="images/Logout.png" alt="Home">
                </a>
                <h2>Sign In</h2>

                <?php if (isset($error)): ?>
                    <p class="error"><?= $error ?></p>
                <?php endif; ?>

                <div class="input-group">
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <button type="submit" name="btn-signin" class="btn-signin">Sign In <i class="fas fa-arrow-right"></i></button>
            </form>
            <p class="signup-link">Don't have an account? <a href="RegisterPage.php">Sign Up</a></p>
            <p class="admin-link">Are you a staff member or Admin? <a href="AdminLoginPage.php">Sign In</a></p>


        </div>
    </div>
</div>
</body>
</html>
