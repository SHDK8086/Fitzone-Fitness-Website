<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="icon" href="images/Logopng.png">
    <link rel="stylesheet" href="AdminLoginPage.css">
</head>
<body>
    <div class="container">
        <img src="images/Logopng.png" class="Logo">
        <div class="login-forms">
            <div class="form-container admin">
                <div class="admin">
            <h2>Admin Sign-In</h2>
            <form action="Login.php" method="post">
                <label for="admin-username">Username:</label>
                <input type="text" id="admin-username" name="username" required>
    
                <label for="admin-password">Password:</label>
                <input type="password" id="admin-password" name="password" required>
    
                <input type="hidden" name="user_type" value="admin">
                <button type="submit">Login as Admin</button>
            </form>
            </div>

            <form action="Login.php" method="post">
                <div class="staff">
            <h2>Staff Sign-In</h2>
                <label for="staff-username">Email:</label>
                <input type="text" id="staff-username" name="username" required>
    
                <label for="staff-password">Password:</label>
                <input type="password" id="staff-password" name="password" required>
    
                <input type="hidden" name="user_type" value="staff">
                <button type="submit">Login as Staff</button>
            </form>
            </div>

            </div>
        </div>
    </div>
</body>
</html>
