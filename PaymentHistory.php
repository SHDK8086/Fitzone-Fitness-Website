<?php
session_start();
@include 'connection.php';

if (!isset($_SESSION['email'])) {
    echo "<script>alert('Please log in to view your payment history.');
    window.location.href='loginPage.php';
    </script>";
    exit();
}

$email = $_SESSION['email'];

$query = "SELECT * FROM payments WHERE full_name = (SELECT name FROM register WHERE email = '$email')";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment History</title>
    <link rel="stylesheet" href="viewpayment.css"> 
</head>
<body>
<div class="container">
    <h2>Your Payment History</h2>
    <?php if (mysqli_num_rows($result) > 0): ?>
        <table>
            <tr>
                <th>Membership Plan</th>
                <th>Amount</th>
                <th>Date</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['program']); ?></td>
                    <td><?php echo htmlspecialchars($row['amount']); ?></td>
                    <td><?php echo htmlspecialchars($row['date']); ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
        <a href="UserPage.php">
            <button class="back-btn">Back To HomePage</button>
        </a>
    <?php else: ?>
        <p class="no-history-message">No payment history found.</p>
    <?php endif; ?>
</div>
</body>
</html>
