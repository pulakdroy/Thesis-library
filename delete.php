<?php
require_once("DBconnect.php");

if (isset($_GET["Student_ID"])) {
    $id = $_GET["Student_ID"];

    $sql = "DELETE FROM create_account WHERE Student_ID = ?";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);

        if (mysqli_stmt_affected_rows($stmt) > 0) {
            // Deletion successful
            header("Location: landing.php?msg=Data deleted successfully");
            exit();
        } else {
            // No rows affected, student ID not found
            echo "Student ID not found.";
        }

        mysqli_stmt_close($stmt);
    } else {
        // Error in preparing the statement
        echo "Error: " . mysqli_error($conn);
    }
} else {
    // Student_ID not set in the request
    echo "Error: Student_ID is not set in the request.";
}
?>
