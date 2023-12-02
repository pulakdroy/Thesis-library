<?php

require_once("DBconnect.php");
session_start();
// var_dump($_SESSION);
// Check if $userDetails is set and not null
if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
    // Fetch user details from the database based on user ID
    $userId = $_SESSION['user_id'];
    $fetchUserSql = "SELECT * FROM create_account WHERE Student_ID = '$userId'";
    $result = mysqli_query($conn, $fetchUserSql);

    if ($result && mysqli_num_rows($result) > 0) {
        // Fetch the user details as an associative array
        $userDetails = mysqli_fetch_assoc($result);

        // Now $userDetails contains the user details
    } else {
        // Handle the case where the user details couldn't be fetched
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thesis Library</title>
    <link rel="stylesheet" href="./style1.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <?php 

    if(isset($_SESSION['logged_in']) && $_SESSION["logged_in"]){
        //do notheing
    }
    else {
        echo '<div id="popup" class="popup">';
        echo '<div class="popup-content">';
            echo '<span class="close-btn" onclick="closePopup()">&times;</span>';
            echo '<h2></h2>';
            echo '<p><h5>Continue with g-suite</h5></p>';
            echo '<form id="emailForm">';
                echo '<input type="email" placeholder="g-suite" id="email" name="email" required>';
                echo '<input type="submit" value="Submit">';
            echo '</form>';
        echo '</div>';
    echo '</div>';
    }   
    
    ?>
    <script src="script1.js"></script>
    <header>
    <nav class="navbar">
        <div class="logo">
            <h2>Thesis Library</h2>
        </div>

        <div class="navmenu">
            <ul>
                <li><a href="landing.php">Home</a></li>
                <li><a href="supervisor.php">Supervisors</a></li>
                <li><a href="resources1.php">Resources</a></li>

                <?php

                if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']) {
                    echo '<li><a href="profile.php">Profile</a></li>';
                } else {
                    echo '<li><a href="studentlog.php" onclick="openPopup()">Student Login</a></li>';
                }
                ?>

                <li><a href="upload.php">Upload</a></li>
             </ul>
        </div>
    </nav>
    </header>

    <!-- <script>
        // Function to open the popup
        function openPopup() {
            document.getElementById("popup").style.display = "block";
        }

        // Rest of your JavaScript code
    </script> -->

    <div class="page">
        <div class="page2">
            <p>Want to see thesis paper from students?</p>
            <div class="container">
                <input type="text" id="search-box" placeholder="Search by Topic or Supervisor">
                <button onclick="searchBooks()">Search</button>
                <div class="result">
                    <ul id="result-container"></ul>
                </div>
            </div>
        </div>
    </div>

    <script src="search.js"></script>


    <script>

        document.getElementById("emailForm").addEventListener("submit", function (event) {
            event.preventDefault(); 
            var email = document.getElementById("email").value;
            var xhr = new XMLHttpRequest();

            xhr.onreadystatechange = function () {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        console.log(xhr.responseText);

                        closePopup();
                    } else {

                        console.error("Error:", xhr.status, xhr.statusText);

                    }
                }
            };

            xhr.open("POST", "student_email.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.send("email=" + encodeURIComponent(email));
        });

        function closePopup() {
            document.getElementById("popup").style.display = "none";
        }
    </script>



</body>
</html>