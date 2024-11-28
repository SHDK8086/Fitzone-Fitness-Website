<?php
include 'connection.php';
$id = $_GET['id'];
$sql = "SELECT * FROM classes WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$class = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $image = $_FILES['image']['name'];
    $target = "images/" . basename($image);

    $updateQuery = $image ? 
        "UPDATE classes SET name='$name', image='$target' WHERE id='$id'" :
        "UPDATE classes SET name='$name' WHERE id='$id'";

    if (mysqli_query($conn, $updateQuery)) {
        if ($image) move_uploaded_file($_FILES['image']['tmp_name'], $target);
        header('Location: AdminDashboard.php');
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
?>

<!-- HTML form for editing class -->
<form action="" method="POST" enctype="multipart/form-data">
    <input type="text" name="name" value="<?php echo $class['name']; ?>" required>
    <input type="file" name="image">
    <button type="submit">Update Class</button>
</form>
