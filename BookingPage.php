<?php
@include 'connection.php';

if (isset($_POST['btn-booking'])) {
    $program = mysqli_real_escape_string($conn, $_POST['program']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $time = mysqli_real_escape_string($conn, $_POST['time']);
    $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
    $weight = mysqli_real_escape_string($conn, $_POST['weight']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone_no']);

    $insert = "INSERT INTO booking (program, date, time, full_name, weight, email, phone_no) VALUES ('$program', '$date', '$time', '$full_name', '$weight', '$email', '$phone')";

    $query = mysqli_query($conn, $insert);
    
    if ($query) {
        echo "<script>alert('Booking successfully!');
        window.location.href='SchedulePage.php';
        </script>";
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
        echo "<script>alert('Booking failed. Please try again.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Booking</title>
    <link rel="stylesheet" href="BookingPage.css">
    <link rel="icon" href="images/Logopng.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;700&family=Roboto:wght@300;500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="booking-page">
        <div class="booking-header">
            <h1>Book a Class</h1>
            <p>Reserve your spot in one of our exciting programs. Choose a program, date, and time that suits you best!</p>
        </div>

        <form action="BookingPage.php" method="POST" class="booking-form">
            <label for="classSelect">Choose a Program:</label>
            <select id="program" name="program">
                <option value="cardio">Cardio</option>
                <option value="strength">Strength Training</option>
                <option value="yoga">Yoga</option>
            </select>

            <label for="classDate">Choose a Date:</label>
            <input type="date" id="date" name="date" required>

            <label for="classTime">Choose a Time:</label>
            <select id="classTime" name="time" required>
                <option value="7am">7:00 AM</option>
                <option value="10am">10:00 AM</option>
                <option value="12pm">12:00 PM</option>
                <option value="3pm">3:00 PM</option>
                <option value="6pm">6:00 PM</option>
            </select>

            <label for="fullName">Full Name:</label>
            <input type="text" id="fullName" name="full_name" placeholder="Enter your name" required>

            <label for="weight">Choose Your Weight:</label>

            <select id="weight" name="weight" required>
                <option value="40-60kg">40-60kg</option>
                <option value="60-80kg">60-80kg</option>
                <option value="80-100kg">80-100kg</option>
                <option value="100+kg">100+kg</option>
            </select>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone_no" placeholder="Enter your phone number" required>
            
            <div class="btn-container">
            <input type="submit" name="btn-booking" value="Book Now" class="btn-booking">
            <a href="SchedulePage.php" class="btn-history"><i class="fas fa-archive"></i> View Schedules</a>
            <a href="BookingHistory.php" class="btn-history"><i class="fas fa-history"></i> View Booking History</a>
        </div>

        </form>
    </div>
</body>
</html>
