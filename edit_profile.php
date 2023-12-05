<?php

require_once("DBconnect.php");

session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Redirect to login page if not logged in
    exit();
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sanitize and validate the input data as needed

    // Update user information in the database
    $studentId = $_SESSION['user_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $department = $_POST['department'];

    // Update the user details in the database (modify this query based on your database structure)
    $updateSql = "UPDATE create_account SET name = '$name', email = '$email', phone_number = '$phone_number', department = '$department' WHERE student_id = '$student_Id'";
    echo "Name: $name, Email: $email, Phone Number: $phone_number, Department: $department";


    if (mysqli_query($conn, $updateSql)) {
        // Update successful
        header("Location: profile.php");
        exit();
    } else {
        // Handle the case where the update fails
        $error_message = "Error updating user information: " . mysqli_error($conn);
        echo $error_message; // Display the error for debugging purposes
    }
    
}

// Fetch user details for pre-filling the form
$studentId = $_SESSION['user_id'];
$fetchUserSql = "SELECT * FROM create_account WHERE student_id = '$studentId'";
$result = mysqli_query($conn, $fetchUserSql);



if ($result && mysqli_num_rows($result) > 0) {
    $userDetails = mysqli_fetch_assoc($result);
} else {
    // Handle the case where user details couldn't be fetched
    $error_message = "Error fetching user information";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="profile.css"> <!-- Add your stylesheet link here -->
</head>
<body>

<header>
    <nav class="navbar">
        <div class="logo">
            <h2>Thesis Library</h2>
        </div>
        <!-- Add any navigation links if needed -->
        <div class="navmenu">
            <ul>
                <li><a href="Homepage.php">Home</a></li>
                <li><a href="supervisor.php">Supervisors</a></li>
                <li><a href="resources1.php">Resources</a></li>
            </ul>
        </div>
    </nav>
</header>

<div class="profile">
    <h1>Edit Profile</h1>

    <?php
    if (isset($error_message)) {
        echo '<p style="color: red;">' . $error_message . '</p>';
    }
    ?>

    <form method="post" action="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo isset($userDetails['name']) ? $userDetails['name'] : ''; ?>" required>

        <label for="student_id">Student ID:</label>
        <input type="text" id="student_id" name="student_id" value="<?php echo isset($userDetails['student_id']) ? $userDetails['student_id'] : ''; ?>" readonly>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo isset($userDetails['email']) ? $userDetails['email'] : ''; ?>" required>

        <label for="phone_number">Phone Number:</label>
        <input type="text" id="phone_number" name="phone_number" value="<?php echo isset($userDetails['phone_number']) ? $userDetails['phone_number'] : ''; ?>" required>

        <label for="department">Department:</label>
        <input type="text" id="department" name="department" value="<?php echo isset($userDetails['department']) ? $userDetails['department'] : ''; ?>" required>

        <input type="submit" value="Save Changes">
    </form>

    <p><a href="profile.php">Back to Profile</a></p>
    <p><a href="logout.php">Logout</a></p>

</div>

</body>
</html>
