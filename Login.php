<?php
@include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $user_type = $_POST['user_type'];

    if ($user_type === 'admin') {
        $admin_username = 'Admin';
        $admin_password = 'Admin123';

        if ($username === $admin_username && $password === $admin_password) {
            echo "<script>alert(' Admin Sign-In Successfully.'); 
            window.location.href='AdminDashboard.php';</script>";
            exit();
        } else {
            echo "<script>alert('Invalid Admin credentials.'); 
            window.location.href='AdminLoginPage.php';</script>";
            exit();
        }
    } elseif ($user_type === 'staff') {
        $sql = "SELECT * FROM staff WHERE email = '$username' AND password = '$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1) {
            echo "<script>alert('Sign-In Successfully.'); 
            window.location.href='StaffPage.php';</script>";
            exit();
        } else {
            echo "<script>alert('Invalid Staff credentials.'); window.location.href='AdminLoginPage.php';</script>";
            exit();
        }
    }
}

mysqli_close($conn);
?>
