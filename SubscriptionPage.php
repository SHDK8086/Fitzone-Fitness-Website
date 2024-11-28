<?php
@include 'connection.php';

if (isset($_POST['btn-pay'])) {
    $program = mysqli_real_escape_string($conn, $_POST['program']);
    $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
    $amount = mysqli_real_escape_string($conn, $_POST['amount']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);

    $insert = "INSERT INTO payments (program, full_name, amount, date) VALUES ('$program','$full_name', '$amount', '$date')";

    $query = mysqli_query($conn, $insert);
    
    if ($query) {
        echo "<script>alert('Payment successfully!');
        window.location.href='UserPage.php';
        </script>";
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
        echo "<script>alert('Transaction failed. Please try again.');</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription Page</title>
    <link rel="stylesheet" href="SubscriptionPage.css">
    <link rel="icon" href="images/Logopng.png">
</head>
<body>

    <div class="subscription">
        <div class="container">
            <div class="image-section">
                <div class="image-overlay">
                    <img src="images/payment.jpg" alt="Payment Image">
                </div>
            </div>
            <div class="form">
                <form method="POST" action="">
                    <div class="logo-container">
                        <img src="images/visa.png" class="visa" alt="Visa Logo">
                        <img src="images/mastercard.png" class="master" alt="MasterCard Logo">
                    </div>

                    <h2>Payment Info</h2>

                    <select id="subscribe" name="program" required>
                        <option value="basic">Basic Plan</option>
                        <option value="premium">Premium Plan</option>
                    </select>

                    <div class="select">
                        <input type="radio" name="select" value="credit" id="rdo-1" required>
                        <label for="rdo-1">Credit-Card</label>

                        <input type="radio" name="select" value="debit" id="rdo-2" required>
                        <label for="rdo-2">Debit-Card</label>
                    </div>

                    <div class="other">
                        <input type="text" name="full_name" placeholder="Full Name" required>
                        <input type="text" name="address" placeholder="Address" required>
                        <input type="text" name="card_no" placeholder="Card Number" required>
                    </div>

                    <div class="input-group">
                        <input type="text" name="date" placeholder="Expire Date" required>
                        <input type="password" name="pin" placeholder="CVC" required>
                    </div>

                    <input type="text" name="amount" placeholder="Amount" required>
                    <input type="date" name="date" placeholder="Date" required>

                    <div class="button-container">
                        <button type="submit" name="btn-pay" class="btn-pay">Pay Now</button>
                        <a href="PaymentHistory.php" class="btn-history">View Payment History</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>
