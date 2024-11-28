<?php
@include 'connection.php';
session_start();

if (isset($_GET['id'])) {
    $messageId = intval($_GET['id']);

    $sql = "SELECT email FROM message WHERE id = '$messageId'";
    $result = mysqli_query($conn, $sql);
    $originalMessage = mysqli_fetch_assoc($result);

    if ($originalMessage) {
        if (isset($_POST['submit'])) {
            $response = mysqli_real_escape_string($conn, $_POST['response']);
            $email = $originalMessage['email']; 

            $insert = "INSERT INTO respond (message_id, response, email) VALUES ('$messageId', '$response', '$email')";
            $query = mysqli_query($conn, $insert);

            if ($query) {
                echo "<script>alert('Respond send successful!');
                window.location.href='StaffPage.php';</script>";
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        }
    } else {
        echo "<script>alert('Original message not found.');</script>";
    }
} else {
    echo "<script>alert('No message ID specified.');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Respond to Message</title>
    <link rel="stylesheet" href="respond.css">
</head>
<body>
    <h2>Respond to Message</h2>
    <form method="POST">
        <textarea name="response" rows="5" cols="40" required></textarea><br>
        <input type="submit" name="submit" value="Send Response">
    </form>
</body>
</html>
