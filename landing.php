<?php
// Check if a specific query parameter is set
$showPopup = isset($_GET['showPopup']) ? $_GET['showPopup'] : false;

// Check if the user is logged in (you need to implement the actual check)
$isLoggedIn = false; // Replace this with your actual check for user login status

// If the user is logged in, redirect them to the profile page
if ($isLoggedIn) {
    header("Location: profile.php");
    exit();
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
// Show the popup only if the query parameter is set to true
if ($showPopup) {
    ?>
    <div id="popup" class="popup">
        <div class="popup-content">
            <span class="close-btn" onclick="closePopup()">&times;</span>
            <h2></h2>
            <p><h5>Continue with g-suite</h5></p>
            <form id="emailForm">
                <input type="email" placeholder="g-suite" id="email" name="email" required>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
    <script src="script1.js"></script>
<?php
}
?>

<header>
    <nav class="navbar">
        <div class="logo">
            <h2>Thesis Library</h2>
        </div>

        <div class="navmenu">
            <ul>
                <li><a href="landing.php">Home</a></li>
                <li><a href="supervisor.php">Supervisors</a></li>
                <li><a href="resourses1.php">Resources</a></li>

                <?php
                // Show different options based on user login status
                if ($isLoggedIn) {
                    // Show profile option if logged in
                    echo '<li><a href="profile.php">Profile</a></li>';
                } else {
                    // Show student login option if not logged in
                    echo '<li><a href="studentlog.php">Student Login</a></li>';
                }
                ?>

                <li><a href="upload.php">Upload</a></li>
            </ul>
        </div>
    </nav>
</header>

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
