<?php
@include 'connection.php';

$id = isset($_GET['id']) ? $_GET['id'] : '';

if ($id) {
    $sql = "SELECT * FROM booking WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "<script>alert('Invalid booking ID.'); window.location.href='StaffPage.php';</script>";
        exit();
    }
} else {
    echo "<script>alert('No ID specified.'); window.location.href='StaffPage.php';</script>";
    exit();
}

if (isset($_POST['update'])) {
    $program = mysqli_real_escape_string($conn, $_POST['program']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $time = mysqli_real_escape_string($conn, $_POST['time']);
    $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
    $weight = mysqli_real_escape_string($conn, $_POST['weight']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone_no']);

    $update = "UPDATE booking SET program='$program', date='$date', time='$time', full_name='$full_name', weight='$weight', email='$email', phone_no='$phone' WHERE id='$id'";

    if (mysqli_query($conn, $update)) {
        echo "<script>alert('Booking updated successfully!'); window.location.href='StaffPage.php';</script>";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Schedule</title>
    <link rel="stylesheet" href="update-booking.css">
</head>
<body>
    <div class="update-form-container">
        <h1>Update Booking</h1>
        <form action="updatebooking.php?id=<?php echo $id; ?>" method="POST" class="booking-form">
            <label for="classSelect">Choose a Program:</label>
            <select id="program" name="program">
                <option value="cardio" <?php if ($row['program'] == 'cardio') echo 'selected'; ?>>Cardio</option>
                <option value="strength" <?php if ($row['program'] == 'strength') echo 'selected'; ?>>Strength Training</option>
                <option value="yoga" <?php if ($row['program'] == 'yoga') echo 'selected'; ?>>Yoga</option>
            </select>

            <label for="classDate">Choose a Date:</label>
            <input type="date" id="date" name="date" value="<?php echo $row['date']; ?>" required>

            <label for="classTime">Choose a Time:</label>
            <select id="classTime" name="time" required>
                <option value="7am" <?php if ($row['time'] == '7am') echo 'selected'; ?>>7:00 AM</option>
                <option value="10am" <?php if ($row['time'] == '10am') echo 'selected'; ?>>10:00 AM</option>
                <option value="12pm" <?php if ($row['time'] == '12pm') echo 'selected'; ?>>12:00 PM</option>
                <option value="3pm" <?php if ($row['time'] == '3pm') echo 'selected'; ?>>3:00 PM</option>
                <option value="6pm" <?php if ($row['time'] == '6pm') echo 'selected'; ?>>6:00 PM</option>
            </select>

            <label for="fullName">Full Name:</label>
            <input type="text" id="fullName" name="full_name" placeholder="Enter your name" value="<?php echo $row['full_name']; ?>" required>

            <label for="weight">Choose Your Weight:</label>
            <select id="weight" name="weight" required>
                <option value="40-60kg" <?php if ($row['weight'] == '40-60kg') echo 'selected'; ?>>40-60kg</option>
                <option value="60-80kg" <?php if ($row['weight'] == '60-80kg') echo 'selected'; ?>>60-80kg</option>
                <option value="80-100kg" <?php if ($row['weight'] == '80-100kg') echo 'selected'; ?>>80-100kg</option>
                <option value="100+kg" <?php if ($row['weight'] == '100+kg') echo 'selected'; ?>>100+kg</option>
            </select>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" value="<?php echo $row['email']; ?>" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone_no" placeholder="Enter your phone number" value="<?php echo $row['phone_no']; ?>" required>

            <input type="submit" name="update" value="Update Now" class="btn-booking">
        </form>
    </div>
</body>
</html>
