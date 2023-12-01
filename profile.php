<?php


require_once("DBconnect.php");

// Start or resume a session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit();
}

// Retrieve user details based on user ID
$userID = $_SESSION['user_id'];
$sql = "SELECT * FROM create_account WHERE user_id = '$userID'";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    // Fetch user details
    $name = $row['name'];
    $studentID = $row['student_id'];
    $email = $row['email'];
    $phoneNumber = $row['phone_number'];
    $department = $row['department'];
    // Assuming the thesis paper is stored in the database as well, replace 'thesis_paper' with the actual column name
    $thesisPaper = $row['thesis_paper'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Profile</title>
    <link rel="stylesheet" href="style.css"> <!-- Add your stylesheet link here -->
</head>
<body>

<header>
    <nav class="navbar">
        <div class="logo">
            <h2>Thesis Library</h2>
        </div>
    </nav>
</header>

<div class="profile">
    <h1>User Profile</h1>

    <div class="profile-info">
        <label>Name:</label>
        <span id="name"><?php echo $name; ?></span>

        <label>Student ID:</label>
        <span id="student-id"><?php echo $studentID; ?></span>

        <label>Email:</label>
        <span id="email"><?php echo $email; ?></span>

        <label>Phone Number:</label>
        <span id="phone-number"><?php echo $phoneNumber; ?></span>

        <label>Department:</label>
        <span id="department"><?php echo $department; ?></span>
    </div>

    <div class="thesis-paper">
        <h2>Thesis Paper</h2>
        <?php
            if (!empty($thesisPaper)) {
                echo '<p><a href="' . $thesisPaper . '" target="_blank">View Thesis Paper</a></p>';
            } else {
                echo '<p>No thesis paper uploaded yet.</p>';
            }
        ?>
    </div>

    <p><a href="edit_profile.php">Edit Profile</a></p>
</div>

</body>
</html>

<?php
} else {
    // User not found
    echo "User not found.";
}
?>
