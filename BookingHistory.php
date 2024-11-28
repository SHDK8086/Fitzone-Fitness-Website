<?php
session_start();
@include 'connection.php';

if (!isset($_SESSION['email'])) {
    echo "<script>alert('Please log in to view your booking history.');
    window.location.href='loginPage.php';
    </script>";
    exit();
}

$email = $_SESSION['email'];

$query = "SELECT * FROM booking WHERE full_name = (SELECT name FROM register WHERE email = '$email')";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking History</title>
    <link rel="stylesheet" href="viewbooking.css"> 
</head>
<body>
<div class="container">
    <h2>Your Booking History</h2>
    <?php if (mysqli_num_rows($result) > 0): ?>
        <table>
            <tr>
                <th>Program</th>
                <th>Date</th>
                <th>Time</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['program']); ?></td>
                    <td><?php echo htmlspecialchars($row['date']); ?></td>
                    <td><?php echo htmlspecialchars($row['time']); ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
        <a href="UserPage.php">
            <button class="back-btn">Back To HomePage</button>
        </a>
    <?php else: ?>
        <p class="no-history-message">No booking history found.</p>
    <?php endif; ?>
</div>
</body>
</html>
