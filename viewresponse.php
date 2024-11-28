<?php
session_start();
@include 'connection.php';

if (!isset($_SESSION['email'])) {
    echo "<script>alert('Please log in to view responses.'); window.location.href='loginPage.php';</script>";
    exit();
}

$email = mysqli_real_escape_string($conn, $_SESSION['email']);
$query = "SELECT * FROM respond WHERE email = '$email'";

$result = mysqli_query($conn, $query);
if (!$result) {
    die("Query Failed: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Responses</title>
    <link rel="stylesheet" href="viewresponse.css"> 
</head>
<body>
<div class="container">
    <h2>Responses</h2>
    <?php if (mysqli_num_rows($result) > 0): ?>
        <table>
            <tr>
                <th>Email</th>
                <th>Response</th>
                <th>Response Date</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['email']); ?></td>
                    <td><?php echo htmlspecialchars($row['response']); ?></td>
                    <td><?php echo htmlspecialchars($row['response_date']); ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
        <a href="UserPage.php">
            <button class="back-btn">Back To HomePage</button>
        </a>
    <?php else: ?>
        <p class="no-history-message">No responses found.</p>
    <?php endif; ?>
</div>
</body>
</html>
