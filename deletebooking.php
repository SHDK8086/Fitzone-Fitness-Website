<?php
@include 'connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $delete = "DELETE FROM booking WHERE id='$id'";

    if (mysqli_query($conn, $delete)) {
        echo "<script>alert('Booking deleted successfully!');
        window.location.href='StaffPage.php';</script>";
    } else {
        echo "<script>alert('Failed to delete Booking.');</script>";
    }
}
?>
