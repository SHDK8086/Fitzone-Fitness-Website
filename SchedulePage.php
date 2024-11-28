<?php
@include 'connection.php';

$selected_program = isset($_POST['program']) ? $_POST['program'] : '';
$selected_weight = isset($_POST['weight']) ? $_POST['weight'] : '';

$sql = "SELECT * FROM schedules WHERE 1=1";
if (!empty($selected_program)) {
    $sql .= " AND program_type = '" . mysqli_real_escape_string($conn, $selected_program) . "'";
}
if (!empty($selected_weight)) {
    $sql .= " AND weight_category = '" . mysqli_real_escape_string($conn, $selected_weight) . "'";
}

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Schedules</title>
    <link rel="stylesheet" href="SchedulePage.css">
    <link rel="icon" href="images/Logopng.png">

</head>
<body>


<div class="card-container">
    <h1>Fitness Schedules</h1>
    <p>Select your program and weight category to view the schedule.</p>

    <form method="POST" action="">
        <label for="program">Program:</label>
        <select name="program" id="program">
            <option value="">-- Select Program --</option>
            <?php
            $programs = mysqli_query($conn, "SELECT DISTINCT program_type FROM schedules");
            while ($program = mysqli_fetch_assoc($programs)) {
                $selected = ($selected_program == $program['program_type']) ? 'selected' : '';
                echo "<option value='{$program['program_type']}' $selected>{$program['program_type']}</option>";
            }
            ?>
        </select>

        <label for="weight">Weight Category:</label>
        <select name="weight" id="weight">
            <option value="">-- Select Weight Category --</option>
            <?php
            $weights = mysqli_query($conn, "SELECT DISTINCT weight_category FROM schedules");
            while ($weight = mysqli_fetch_assoc($weights)) {
                $selected = ($selected_weight == $weight['weight_category']) ? 'selected' : '';
                echo "<option value='{$weight['weight_category']}' $selected>{$weight['weight_category']}</option>";
            }
            ?>
        </select>

        <button type="submit">Filter</button>
    </form>

    <?php if (mysqli_num_rows($result) > 0): ?>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <div class="card">
                <h2><?php echo htmlspecialchars($row['program_type']); ?></h2>
                <p><strong>Weight Category:</strong> <?php echo htmlspecialchars($row['weight_category']); ?></p>
                <p><strong>Frequency:</strong> <?php echo htmlspecialchars($row['frequency']); ?> days/week</p>
                <p><strong>Duration:</strong> <?php echo htmlspecialchars($row['duration']); ?> minutes</p>
                <p><strong>Routine:</strong> <?php echo htmlspecialchars($row['routine']); ?></p>
            </div>
        <?php endwhile; ?>
    <?php else: ?>
        <p>No schedules found for the selected program and weight category. Please try different selections.</p>
    <?php endif; ?>
</div>

</body>
</html>

<?php
mysqli_close($conn);
?>
