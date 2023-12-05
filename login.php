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
    $user = mysqli_fetch_assoc($result);

    if ($password == $user['Password']) {
        // Password verified, create session and redirect to home page
        $_SESSION['user_id'] = $user['Student_ID'];
        $_SESSION['name'] = $user['Name'];
        $_SESSION['department'] = $user['Department'];
        $_SESSION['phone_number'] = $user['Phone_Number'];
        $_SESSION['email'] = $user['Email'];
        header("Location: homepage.php");
    } else {
        // Password incorrect, show error popup
        echo "Password incorrect";
    }
} else {
    // User not found
    echo "Email not found.";
}

mysqli_close($conn);
?>
<!-- 
Updated modal content
<div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="errorModalLabel">Error</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Incorrect email or password. Please try again.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div> -->

