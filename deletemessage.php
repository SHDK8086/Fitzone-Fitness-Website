<?php
@include 'connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $delete = "DELETE FROM message WHERE id='$id'";

    if (mysqli_query($conn, $delete)) {
        echo "<script>alert('Message deleted successfully!');
        window.location.href='StaffPage.php';</script>";
    } else {
        echo "<script>alert('Failed to delete message.');</script>";
    }
}
?>