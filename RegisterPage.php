<?php
@include 'connection.php';

if (isset($_POST['btn-signup'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $birthday = mysqli_real_escape_string($conn, $_POST['birthday']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $contact_no = mysqli_real_escape_string($conn, $_POST['contact_no']);
    $password = $_POST['password'];

    if (strlen($password) < 8) {
        $error = 'Password must be at least 8 characters long.';
    } else {
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        $select = "SELECT * FROM register WHERE email = '$email'";
        $result = mysqli_query($conn, $select);

        if (mysqli_num_rows($result) > 0) {
            $error = 'User already exists. Please enter a different email address.';
        } else {
            $insert = "INSERT INTO register (name, birthday, email, address, contact_no, password) 
                    VALUES ('$name', '$birthday', '$email', '$address', '$contact_no', '$hashed_password')";
            if (mysqli_query($conn, $insert)) {
                echo "<script>alert('Registered successfully!'); window.location.href='LoginPage.php';</script>";
                exit();
            } else {
                $error = 'Registration Failed. Please try again.';
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="RegisterPage.css">
    <link rel="icon" href="images/Logopng.png">
</head>
<body>
    <div class="register">
        <div class="container">
            <div class="image-section">
                <div class="image-overlay">
                    <img src="images/register.jpg" alt="Desert Background">
                </div>
            </div>
            <div class="form">
                <form method="POST" action="">
                    <h2>Sign Up</h2>

                    <?php if (isset($error)): ?>
                        <p class="error"><?= $error ?></p>
                    <?php endif; ?>

                    <div class="input-group">
                        <input type="text" name="name" placeholder="Name" required>
                        <input type="text" name="birthday" placeholder="Birth Date (YYYY-MM-DD)" required>
                    </div>
                    <input type="email" name="email" placeholder="Email Address" required>
                    <input type="text" name="address" placeholder="Address" required>
                    <input type="text" name="contact_no" placeholder="Contact Number" required>
                    <input type="password" name="password" placeholder="Password (At least 8 characters)" required>
                    
                    <button type="submit" name="btn-signup" class="btn-signup">Sign Up</button>
                </form>
                <p class="signin-link">Already have an account? <a href="LoginPage.php">Sign In</a></p>
            </div>
        </div>
    </div>
</body>
</html>
