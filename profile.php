<?php 

require_once("DBconnect.php");

session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Profile</title>
    <link rel="stylesheet" href="profile.css"> <!-- Add your stylesheet link here -->
</head>
<body>

<header>
    <nav class="navbar">
        <div class="logo">
            <h2>Thesis Library</h2>
        </div>
        <!-- Add any navigation links if needed -->
        <div class="navmenu">
            <ul>
                <li><a href="Homepage.php">Home</a></li>
                <li><a href="supervisor.php">Supervisors</a></li>
                <li><a href="resources1.php">Resources</a></li>
            </ul>
        </div>
    </nav>
</header>

<div class="profile">
    <h1>User Profile</h1>

    <div class="profile-info">
        <!-- <label for="name">Name:</label> -->
        <span id="name"><b>Name: </b><?php echo $_SESSION['name'] ?></span>

        <!-- <label for="student-id">Student ID:</label> -->
        <span id="student-id"><b>Student ID: </b><?php echo $_SESSION['user_id']?></span>

        <!-- <label for="email">Email:</label> -->
        <span id="email"><b>Email: </b><?php echo $_SESSION['email'] ?></span>

        <!-- <label for="phone-number">Phone Number:</label> -->
        <span id="phone-number"><b>Phone number: </b><?php echo $_SESSION['phone_number'] ?></span>

        <!-- <label for="department">Department:</label> -->
        <span id="department"><b>Department: </b><?php echo $_SESSION['department'] ?></span>

    </div>
    
        <!-- Add an Upload button -->
    <div class="upload-button">
        <form action="upload.php" method="get">
            <button type="submit">Upload</button>
        </form>
    </div>

    <!-- Inside the delete-button div in your user profile page -->
    <form method="get" action="delete.php">
        <button type="submit" name="Student_ID" onclick="return confirm('Are you sure you want to delete your account?')">Delete Account</button>
    </form>


    <!-- Add more profile details as needed -->

    <p><a href="edit_profile.php">Edit Profile</a></p>
    <p><a href="logout.php">Logout</a></p>
</div>

</body>
</html>
