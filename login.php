<?php
include 'DBconnect.php';

session_start();
var_dump($_SESSION);
// Include database connection file


// Define variables
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

// Check if user exists
$sql = "SELECT * FROM create_account WHERE Email = '$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // User exists, now verify password
    // echo $user;
    $user = mysqli_fetch_assoc($result);

    if ($password == $user['Password']) {
        
        // Password verified, create session and redirect to home page
        $_SESSION['user_id'] = $user['Student_ID'];
        $_SESSION['name'] = $user['Name'];
        $_SESSION['department'] = $user['Department'];
        $_SESSION['phone_number'] = $user['Phone_Number'];
        $_SESSION['email'] = $user['Email'];
        header("Location: landing.php");
    } else {
        // Password incorrect
        echo "<p class='error'>Incorrect password.</p>";
    }
} else {
    // User not found
    echo "<p class='error'>Email not found.</p>";
}

mysqli_close($conn);
?>