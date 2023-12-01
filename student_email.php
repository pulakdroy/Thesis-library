<?php

require_once("DBconnect.php");

// Checking if the input is empty
if(isset($_POST['email'])){
    // Write the query to check if the email exists in our database
    $e = $_POST["email"];

    $sql = "SELECT * FROM student_email WHERE email = '$e' ";

    $result = mysqli_query($conn, $sql);

    // Check if the email exists in the database
    if(mysqli_num_rows($result) != 0) {
        // Email exists
        // echo "Email already exists!";

    } else {
        // Email doesn't exist, insert it into the database
        $insertSql = "INSERT INTO student_email (email) VALUES ('$e')";

        if(mysqli_query($conn, $insertSql)) {
            // Email inserted successfully, you might want to perform some actions here
  
            // echo "Email successfully inserted!";

        }
    }
}

?>
