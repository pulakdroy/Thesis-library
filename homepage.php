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
                    <li><a href="profile.php">Profile</a></li>
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
                <div class="more-section">
                    <p>If you want to explore more thesis papers, click the button below:</p>
                    <button id="moreButton" onclick="loadMore()"><li><a href="index.php">More</a></li></button>
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
