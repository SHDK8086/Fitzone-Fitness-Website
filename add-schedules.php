<?php
@include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $program_type = mysqli_real_escape_string($conn, $_POST['program_type']);
    $weight_category = mysqli_real_escape_string($conn, $_POST['weight_category']);
    $frequency = mysqli_real_escape_string($conn, $_POST['frequency']);
    $duration = mysqli_real_escape_string($conn, $_POST['duration']);
    $routine = mysqli_real_escape_string($conn, $_POST['routine']);

    $sql = "INSERT INTO schedules (program_type, weight_category, frequency, duration, routine) VALUES ('$program_type', '$weight_category', '$frequency', '$duration', '$routine')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Schedule added successfully!');
        window.location.href='AdminDashboard.php';</script>";
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
