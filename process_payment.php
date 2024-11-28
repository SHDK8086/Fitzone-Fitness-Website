<?php

$host = 'localhost';
$db = 'payment_system';
$user = 'root';
$pass = ''; 


$conn = new mysqli($host, $user, $pass, $db);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if (isset($_POST['btn-pay'])) {
    
    $full_name = $conn->real_escape_string($_POST['full_name']);
    $address = $conn->real_escape_string($_POST['address']);
    $card_no = $conn->real_escape_string($_POST['card_no']);
    $card_type = $conn->real_escape_string($_POST['select']);
    $expiry_date = $conn->real_escape_string($_POST['date']);
    $cvc = $conn->real_escape_string($_POST['pin']);
    $amount = $conn->real_escape_string($_POST['amount']);
    $payment_date = $conn->real_escape_string($_POST['date']);
    $items = $conn->real_escape_string($_POST['items']);

    
    $sql = "INSERT INTO payments (full_name, address, card_no, card_type, expiry_date, cvc, amount, payment_date, items) 
            VALUES ('$full_name', '$address', '$card_no', '$card_type', '$expiry_date', '$cvc', '$amount', '$payment_date', '$items')";


if ($conn->query($sql) === TRUE) {
    echo '

    <link rel="stylesheet" href="payments.css">
    <div class="alert-success">
    <div class="alert-wrapper">
        <div class="alert-content">
            <img src="images/Logopng.png" alt="Success Icon" class="alert-icon">
            <div class="alert-text">
                <h2>Payment Successful!</h2>
                <p>Thank you for your payment. Your transaction was completed successfully, and a confirmation email has been sent to your email address.</p>
                <p><strong>Amount:</strong> Rs. <span class="amount">' . htmlspecialchars($amount) . '</span></p>
                <p><strong>Order Details:</strong> <span class="items">' . htmlspecialchars($items) . '</span></p>
                
                <p><strong>Payment Method:</strong><span class="payment-method">'. htmlspecialchars($card_type) .' </span></p>
                
                <p>If you have any questions, feel free to <a href="contact.html">contact our support team</a>.</p>
                <p><a href="account.html" class="cta-button">View Your Account</a></p>           
                </div>
        </div>
        </div>
    </div>
    <script>
        setTimeout(function() {
            window.location.href = "store.php";
        }, 100000);
    </script>';
} else {
    echo '<div class="alert error">Error: ' . $conn->error . '</div>';
}

}


$conn->close();
?>

