<?php
@include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $birthday = mysqli_real_escape_string($conn, $_POST['birthday']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $contact_no = mysqli_real_escape_string($conn, $_POST['contact_no']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);


    $sql = "INSERT INTO staff (name, birthday, email, address, contact_no, password) VALUES ('$name', '$birthday', '$email', '$address', '$contact_no', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Staff added successfully!');
        window.location.href='AdminDashboard.php';</script>";
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
