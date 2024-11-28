<?php
@include 'connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $delete = "DELETE FROM schedules WHERE id='$id'";

    if (mysqli_query($conn, $delete)) {
        echo "<script>alert('Schedule deleted successfully!');
        window.location.href='AdminDashboard.php';</script>";
    } else {
        echo "<script>alert('Failed to delete Schedule.');</script>";
    }
}
?>
