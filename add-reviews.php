<?php
@include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    $rating = mysqli_real_escape_string($conn, $_POST['rating']);

    $sql = "INSERT INTO feedback (full_name, email, message, rating) VALUES ('$full_name', '$email', '$message', '$rating')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Thank you for your feedback!'); window.location.href='HomePage.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

