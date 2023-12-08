<?php
require_once("DBconnect.php");

session_start();

function sanitizeInput($input) {
    return htmlspecialchars(trim($input));
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["Student_ID"])) {
    $student_id = sanitizeInput($_SESSION["user_id"]);

    // Delete the user's profile from the database
    $deleteSql = "DELETE FROM create_account WHERE student_id=?";
    
    // Use prepared statements to prevent SQL injection
    $stmt = mysqli_prepare($conn, $deleteSql);
    mysqli_stmt_bind_param($stmt, 'i', $student_id);
    $deleteResult = mysqli_stmt_execute($stmt);

    if ($deleteResult) {
        // HTML content for profile deleted with Bootstrap styling
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Profile Deleted</title>
            <!-- Bootstrap CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        </head>
        <body class="bg-light">
            <div class="container mt-5">
                <h2 class="text-danger">Your Profile has been Deleted</h2>
                <p class="lead">We're sorry to see you go. If you have any feedback, please let us know.</p>
                <p><a href="landing.php" class="btn btn-primary">Go to Homepage</a></p>
            </div>
            <!-- Bootstrap JS (optional, for certain components) -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        </body>
        </html>
        <?php
        exit();
    } else {
        echo "Error: Unable to delete profile. " . mysqli_error($conn);
    }

    // Close the statement
    mysqli_stmt_close($stmt);
}

// Close the database connection
mysqli_close($conn);
?>
