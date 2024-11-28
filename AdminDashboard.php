<?php
@include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="icon" href="images/Logopng.png">
    <link rel="stylesheet" href="AdminDashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <script>
        function showSection(section) {
            document.getElementById('add-staff').style.display = section === 'add-staff' ? 'block' : 'none';
            document.getElementById('manage-users').style.display = section === 'manage-users' ? 'block' : 'none';
            document.getElementById('manage-staff').style.display = section === 'manage-staff' ? 'block' : 'none';
            document.getElementById('view-bookings').style.display = section === 'view-bookings' ? 'block' : 'none';
            document.getElementById('view-payments').style.display = section === 'view-payments' ? 'block' : 'none';
            document.getElementById('add-schedule').style.display = section === 'add-schedule' ? 'block' : 'none';
            document.getElementById('manage-schedule').style.display = section === 'manage-schedule' ? 'block' : 'none';
            document.getElementById('view-messages').style.display = section === 'view-messages' ? 'block' : 'none';
        
        }
    </script>
</head>
<body onload="showSection('add-staff')">

<div class="admin-container">
    <aside class="sidebar">
        <h2>Admin Dashboard</h2>
        <ul>
            <li><a href="#" onclick="showSection('add-staff')"><i class="fas fa-user"></i> Add Staff Members</a></li>
            <li><a href="#" onclick="showSection('manage-users')"><i class="fas fa-user"></i> Manage Users</a></li>
            <li><a href="#" onclick="showSection('manage-staff')"><i class="fas fa-user"></i> Manage Staff</a></li>
            <li><a href="#" onclick="showSection('view-bookings')"><i class="fas fa-book"></i> View Bookings</a></li>
            <li><a href="#" onclick="showSection('view-payments')"><i class="fas fa-money-bill"></i> View Payments</a></li>
            <li><a href="#" onclick="showSection('add-schedule')"><i class="fas fa-paperclip"></i> Add Schedules</a></li>
            <li><a href="#" onclick="showSection('manage-schedule')"><i class="fas fa-address-book"></i> Manage Schedules</a></li>
            <li><a href="#" onclick="showSection('view-messages')"><i class="fas fa-envelope"></i> Customer Feedback</a></li>
            <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Log Out</a></li>

        </ul>
    </aside>

    <main class="main-content">

        <div id="add-staff" class="section">
            <h2>Add Staff Members</h2>
            <form action="add-staff.php" method="post">
                <div>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div>
                    <label for="birthday">Birthday:</label>
                    <input type="date" id="birthday" name="birthday" required>
                </div>
                <div>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div>
                    <label for="address">Address:</label>
                    <input type="text" id="address" name="address" required>
                </div>
                <div>
                    <label for="contact_no">Contact Number:</label>
                    <input type="text" id="contact_no" name="contact_no" required>
                </div>
                <div>
                    <label for="contact_no">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit">Add Staff</button>
            </form>
        </div>

        <div id="manage-users" class="section" style="display: none;">
    <h2>Manage Users</h2>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Birthday</th>
                <th>Email</th>
                <th>Address</th>
                <th>Contact Number</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM register";
            $result = mysqli_query($conn, $sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "
                    <tr>
                        <td>{$row['name']}</td>
                        <td>{$row['birthday']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['address']}</td>
                        <td>{$row['contact_no']}</td>
                        <td>
                            <a class='edit' href='update.php?id={$row['id']}'>
                                <button class='edit-btn'>Edit</button>
                            </a>
                            <a class='delete' href='delete.php?id={$row['id']}'>
                                <button class='delete-btn'>Delete</button>
                            </a>
                        </td>
                    </tr>
                    ";
                }
            } else {
                echo "<tr><td colspan='8'>No users found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>


        <div id="manage-staff" class="section" style="display: none;">
            <h2>Manage Staff</h2>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Birthday</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Contact Number</th>
                        <th>Password</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM staff";
                    $result = mysqli_query($conn, $sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "
                            <tr>
                                <td>{$row['name']}</td>
                                <td>{$row['birthday']}</td>
                                <td>{$row['email']}</td>
                                <td>{$row['address']}</td>
                                <td>{$row['contact_no']}</td>
                                <td>{$row['password']}</td>
                                <td>
                            <a class='edit' href='updatestaff.php?id={$row['id']}'>
                                <button class='edit-btn'>Edit</button>
                            </a>
                            <a class='delete' href='deletestaff.php?id={$row['id']}'>
                                <button class='delete-btn'>Delete</button>
                            </a>
                        </td>
                            </tr>
                            ";
                        }
                    } else {
                        echo "<tr><td colspan='8'>No users found</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <div id="view-bookings" class="section" style="display: none;">
            <h2>View Bookings</h2>
            <table>
                <thead>
                    <tr>
                        <th>Program</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Full Name</th>
                        <th>Weight</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM booking";
                    $result = mysqli_query($conn, $sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "
                            <tr>
                                <td>{$row['program']}</td>
                                <td>{$row['date']}</td>
                                <td>{$row['time']}</td>
                                <td>{$row['full_name']}</td>
                                <td>{$row['weight']}</td>
                                <td>{$row['email']}</td>
                                <td>{$row['phone_no']}</td>
                            </tr>
                            ";
                        }
                    } else {
                        echo "<tr><td colspan='8'>No booking found</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <div id="view-payments" class="section" style="display: none;">
            <h2>View payments</h2>
            <table>
                <thead>
                    <tr>
                        <th>Program</th>
                        <th>Full Name</th>
                        <th>Amount</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM payments";
                    $result = mysqli_query($conn, $sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "
                            <tr>
                                <td>{$row['program']}</td>
                                <td>{$row['full_name']}</td>
                                <td>{$row['amount']}</td>
                                <td>{$row['date']}</td>
                            </tr>
                            ";
                        }
                    } else {
                        echo "<tr><td colspan='8'>No payments found</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <div id="view-messages" class="section" style="display: none;">
            <h2>View Feedbacks</h2>
            <table>
                <thead>
                    <tr>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM feedback";
                    $result = mysqli_query($conn, $sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "
                            <tr>
                                <td>{$row['full_name']}</td>
                                <td>{$row['email']}</td>
                                <td>{$row['message']}</td>
                            </tr>
                            ";
                        }
                    } else {
                        echo "<tr><td colspan='8'>No messages found</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>


<div id="add-schedule" class="schedule">
<h1>Add Fitness Schedule</h1>
    <form action="add-schedules.php" method="POST">

        <label for="program_type">Program Type:</label>
        <select name="program_type" id="program_type" required>
            <option value="cardio">Cardio</option>
            <option value="strength">Strength Training</option>
            <option value="yoga">Yoga</option>
        </select>
        <br><br>

        <label for="weight_category">Weight Category:</label>
        <select name="weight_category" id="weight_category" required>
            <option value="40-50 kg">40-50 kg</option>
            <option value="70-80 kg">70-80 kg</option>
            <option value="100-110 kg">100-110 kg</option>
            <option value="130-140 kg">130-140 kg</option>
        </select>
        <br><br>

        <label for="frequency">Frequency (days/week):</label>
        <input type="text" name="frequency" id="frequency" required>
        <br><br>

        <label for="duration">Duration (minutes):</label>
        <input type="text" name="duration" id="duration" required>
        <br><br>

        <label for="routine">Routine Description:</label>
        <textarea name="routine" id="routine" rows="5" cols="40" placeholder="Describe the routine" required></textarea>
        <br><br>

        <button type="submit">Add Schedule</button>
    </form>
</div>

<div id="manage-schedule" class="schedule-mng" style="display: none;">
            <h2>Manage Schedules</h2>
            <table>
                <thead>
                    <tr>
                        <th>Program Type</th>
                        <th>Weight Category</th>
                        <th>Frequency(days/week)</th>
                        <th>Duration(minutes)</th>
                        <th>Routine Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php
@include 'connection.php';

$sql = "SELECT * FROM schedules";
$result = mysqli_query($conn, $sql);

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "
        <tr>
            <td>{$row['program_type']}</td>
            <td>{$row['weight_category']}</td>
            <td>{$row['frequency']}</td>
            <td>{$row['duration']}</td>
            <td>{$row['routine']}</td>
            <td>
                <a class='edit' href='update-schedules.php?id={$row['id']}'>
                    <button class='edit-btn'>Edit</button>
                </a>
                <a class='delete' href='delete-schedule.php?id={$row['id']}' onclick='return confirmDelete();'>
                    <button class='delete-btn'>Delete</button>
                </a>
            </td>
        </tr>
        ";
    }
} else {
    echo "<tr><td colspan='6'>No schedules found</td></tr>";
}
?>

                </tbody>
            </table>
        </div>

    </main>
</div>

</body>
</html>
