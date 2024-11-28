<?php
@include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Dashboard</title>
    <link rel="icon" href="images/Logopng.png">
    <link rel="stylesheet" href="StaffPage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <script>
        function showSection(section) {
            document.getElementById('manage-booking').style.display = section === 'manage-booking' ? 'block' : 'none';
            document.getElementById('manage-queries').style.display = section === 'manage-queries' ? 'block' : 'none';
        }
    </script>
</head>
<body onload="showSection('manage-booking')">

<div class="admin-container">
    <aside class="sidebar">
        <h2>Staff Dashboard</h2>
        <ul>
            <li><a href="#" onclick="showSection('manage-booking')"><i class="fas fa-book"></i> Manage Bookings</a></li>
            <li><a href="#" onclick="showSection('manage-queries')"><i class="fas fa-question"></i> Manage Queries</a></li>
            <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Log Out</a></li>
        </ul>
    </aside>

    <main class="main-content">
        <div id="manage-booking" class="section" style="display: none;">
            <h2>Manage Bookings</h2>
            <table>
                <thead>
                    <tr>
                        <th>Program</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Phone No</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($conn) {
                        $sql = "SELECT * FROM booking";
                        $result = mysqli_query($conn, $sql);

                        if ($result && $result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "
                                <tr>
                                    <td>{$row['program']}</td>
                                    <td>{$row['date']}</td>
                                    <td>{$row['time']}</td>
                                    <td>{$row['full_name']}</td>
                                    <td>{$row['email']}</td>
                                    <td>{$row['phone_no']}</td>
                                    <td>
                                        <a class='edit' href='updatebooking.php?id={$row['id']}'>
                                            <button class='edit-btn'>Edit</button>
                                        </a>
                                        <a class='delete' href='deletebooking.php?id={$row['id']}'>
                                            <button class='delete-btn'>Delete</button>
                                        </a>
                                    </td>
                                </tr>
                                ";
                            }
                        } else {
                            echo "<tr><td colspan='7'>No booking found</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='7'>Database connection error</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <div id="manage-queries" class="section" style="display: none;">
            <h2>Manage Queries</h2>
            <table>
                <thead>
                    <tr>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($conn) {
                        $sql = "SELECT * FROM message";
                        $result = mysqli_query($conn, $sql);

                        if ($result && $result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "
                                <tr>
                                    <td>{$row['full_name']}</td>
                                    <td>{$row['email']}</td>
                                    <td>{$row['message']}</td>
                                    <td>
                                        <a class='edit' href='respond.php?id={$row['id']}'>
                                            <button class='edit-btn'>Respond</button>
                                        </a>
                                        <a class='delete' href='deletemessage.php?id={$row['id']}'>
                                            <button class='delete-btn'>Delete</button>
                                        </a>
                                    </td>
                                </tr>
                                ";
                            }
                        } else {
                            echo "<tr><td colspan='7'>No message found</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='7'>Database connection error</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </main>
</div>

</body>
</html>
