<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once("DBconnect.php");

if (isset($_GET["Student_ID"])) {
    $id = $_GET["Student_ID"];

    // Debugging output
    echo "Student ID: " . $id . "<br>";

    $checkSql = "SELECT * FROM create_account WHERE Student_ID = $id";
    $result = mysqli_query($conn, $checkSql);

    if ($result && mysqli_num_rows($result) > 0) {
        // Debugging output
        echo "Student ID exists in the database.<br>";

        $sql = "DELETE FROM create_account WHERE Student_ID = ?";
        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "i", $id);

            // Debugging output
            echo "SQL Query: " . $sql . "<br>";

            if (mysqli_stmt_execute($stmt)) {
                if (mysqli_stmt_affected_rows($stmt) > 0) {
                    // Deletion successful
                    header("Location: landing.php?msg=Data deleted successfully");
                    exit();
                } else {
                    // No rows affected, student ID not found
                    echo "Student ID not found after deletion.";
                }
            } else {
                // Error in executing the statement
                die("Error in executing the statement: " . mysqli_error($conn));
            }

            mysqli_stmt_close($stmt);
        } else {
            // Error in preparing the statement
            die("Error in preparing the statement: " . mysqli_error($conn));
        }
    } else {
        echo "Student ID not found in the database.";
    }
} else {
    // Student_ID not set in the request
    echo "Error: Student_ID is not set in the request.";
}
?>
