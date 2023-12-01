<?php
$servername = 'localhost';
$username = "root";
$password = "";
$dbname = "thesis_library";

//Create connection 
$conn = new mysqli($servername,$username,$password,$dbname);


//Check connection
if($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}
else{
    mysqli_select_db($conn, $dbname);
    // echo "Connection Successful";
}
    

?>