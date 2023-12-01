<?php

require_once("DBconnect.php");

if (isset($_POST['email'], $_POST['password'])) {
    $email = $_POST['email'];
    $passwordInput = $_POST['password'];

    $sql = "SELECT * FROM create_account WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $hashedPasswordInDB = $row['password'];

        // Verify the hashed password
        if (isset($hashedPasswordInDB) && password_verify($passwordInput, $hashedPasswordInDB)) {
            // Valid credentials, redirect to the homepage
            header("Location: landing.php");
            exit();
        } else {
            // Invalid password
            echo "Invalid email or password";
        }
    } else {
        // No matching user found
        echo "Invalid email or password";
    }
} else {
    // Handle case where 'email' or 'password' key is not set in $_POST
    echo "Email or password is missing";
}

?>

