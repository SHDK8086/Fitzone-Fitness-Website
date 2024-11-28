<?php
@include 'connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM register WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
}

if (isset($_POST['update'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $birthday = mysqli_real_escape_string($conn, $_POST['birthday']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $contact_no = mysqli_real_escape_string($conn, $_POST['contact_no']);

    $update = "UPDATE register SET name='$name', birthday='$birthday', email='$email', address='$address', contact_no='$contact_no'WHERE id='$id'";

    if (mysqli_query($conn, $update)) {
        echo "<script>alert('User updated successfully!');
        window.location.href='AdminDashboard.php';</script>";
    } else {
        echo "<script>alert('Failed to update user.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update User</title>
    <link rel="stylesheet" href="update.css">

</head>
<body>
<form method="POST">
    <label>Name: <input type="text" name="name" value="<?php echo $row['name']; ?>" required></label>
    <label>Birthday: <input type="text" name="birthday" value="<?php echo $row['birthday']; ?>" required></label>
    <label>Email: <input type="email" name="email" value="<?php echo $row['email']; ?>" required></label>
    <label>Address: <input type="text" name="address" value="<?php echo $row['address']; ?>" required></label>
    <label>Contact Number: <input type="text" name="contact_no" value="<?php echo $row['contact_no']; ?>" required></label>

    <button type="submit" name="update">Update</button>
</form>
</body>
</html>
