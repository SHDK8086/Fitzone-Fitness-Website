<?php
@include 'connection.php';

$id = isset($_GET['id']) ? $_GET['id'] : ''; 

if ($id) {
    $sql = "SELECT * FROM schedules WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
} else {
    echo "No ID specified.";
    exit();
}

if (isset($_POST['update'])) {
    $program_type = mysqli_real_escape_string($conn, $_POST['program_type']);
    $weight_category = mysqli_real_escape_string($conn, $_POST['weight_category']);
    $frequency = mysqli_real_escape_string($conn, $_POST['frequency']);
    $duration = mysqli_real_escape_string($conn, $_POST['duration']);
    $routine = mysqli_real_escape_string($conn, $_POST['routine']);

    $update = "UPDATE schedules SET program_type='$program_type', weight_category='$weight_category', frequency='$frequency', duration='$duration', routine='$routine' WHERE id='$id'";

    if (mysqli_query($conn, $update)) {
        echo "<script>alert('Schedule updated successfully!');
        window.location.href='AdminDashboard.php';</script>";
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
    <link rel="stylesheet" href="update-schedule.css">
</head>
<body>
    <div class="update-form-container">
        <h1>Update Fitness Schedule</h1>
        <form method="POST" action="update-schedules.php?id=<?php echo $id; ?>">
            <fieldset>
                <label for="program_type">Program Type:</label>
                <select name="program_type" id="program_type" required>
                    <option value="cardio" <?php if ($row['program_type'] == 'cardio') echo 'selected'; ?>>Cardio</option>
                    <option value="strength" <?php if ($row['program_type'] == 'strength') echo 'selected'; ?>>Strength Training</option>
                    <option value="yoga" <?php if ($row['program_type'] == 'yoga') echo 'selected'; ?>>Yoga</option>
                </select>

                <label for="weight_category">Weight Category:</label>
                <select name="weight_category" id="weight_category" required>
                    <option value="40-50 kg" <?php if ($row['weight_category'] == '40-50 kg') echo 'selected'; ?>>40-50 kg</option>
                    <option value="70-80 kg" <?php if ($row['weight_category'] == '70-80 kg') echo 'selected'; ?>>70-80 kg</option>
                    <option value="100-110 kg" <?php if ($row['weight_category'] == '100-110 kg') echo 'selected'; ?>>100-110 kg</option>
                    <option value="130-140 kg" <?php if ($row['weight_category'] == '130-140 kg') echo 'selected'; ?>>130-140 kg</option>
                </select>

                <label for="frequency">Frequency (days/week):</label>
                <input type="text" id="frequency" name="frequency" value="<?php echo htmlspecialchars($row['frequency']); ?>" required>

                <label for="duration">Duration (minutes):</label>
                <input type="text" id="duration" name="duration" value="<?php echo htmlspecialchars($row['duration']); ?>" required>

                <label for="routine">Routine Description:</label>
                <textarea name="routine" id="routine" rows="5" cols="40" required><?php echo htmlspecialchars($row['routine']); ?></textarea>
            </fieldset>

            <button type="submit" name="update">Update Schedule</button>
        </form>
    </div>
</body>
</html>
