<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once("DBconnect.php");

session_start();

if (isset($_POST['name']) && isset($_POST['s_id']) && isset($_POST['email']) && isset($_POST['phn']) && isset($_POST['dept']) && isset($_POST['password'])){

    $name = $_POST["name"];
    $studentID = $_POST["s_id"];
    $email = $_POST["email"];
    $phoneNumber = $_POST["phn"];
    $department = $_POST["dept"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM create_account WHERE email = '$email' ";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) != 0) {
        // Email exists
        // echo "Email already exists!";

    } else {
        // Email doesn't exist, insert it into the database
        $insertSql = "INSERT INTO create_account (name, student_id, email, phone_number, department, password) 
                      VALUES ('$name', '$studentID', '$email', '$phoneNumber', '$department', '$password')";

        if(mysqli_query($conn, $insertSql)) {

            $_SESSION['user_id'] = mysqli_insert_id($conn);

            header("Location: landing.php");
            // Email inserted successfully, you might want to perform some actions here
  
            // echo "Email successfully inserted!";

        }
    }
}
?>