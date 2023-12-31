<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thesis supervisors</title>
    <link rel="stylesheet" href="supervisor.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600&display=swap" rel="stylesheet">    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="scripts.js" defer></script>
</head>
<body>
    <!---------------------------Header--------------------------------->
    <header>
    <section class="header">
        
        <nav class="navbar">
            <div class="logo">
                <h2>Thesis Library</h2>
            </div>
            <div class="navmenu">
                <ul>
                    <li><a href="landing.php">Home</a></li>
                    <li><a href="supervisor.php">Supervisors</a></li>
                    <li><a href="resources1.php">Resources</a></li>
                    <!-- <li><a href="sign.php">Signup</a></li>
                    <li><a href="Upload.php">Upload</a></li> -->
                </ul>

            </div>
         </nav>
        
        <div class="text-box">

            <h1>Thesis Supervisors</h1>
            <h3>Department of Comupter Science and Engineering</h3>

        </div>
    </section>
    <!-------------------------------Service------------------------------->

    <section class="service">
        <input type="text" id="searchInput" oninput="filterFaculty()" placeholder="Search by faculty name">
        <div id="searchNote"></div>

        <div class="faculty-container">
            <!-- Faculty Profile 1 -->
            <div class="faculty-profile" id="faculty1">
                <a href="faculty1.php">
                    <img src="images/Professor-Kaykobad.png" alt="Faculty 1">
                    <h2>Dr. Mohammad Kaykobad</h2>
                    <p>Distinguished Professor</p>
                    <div class="thesis-availability">
                        <div class="green-light"></div>
                        <p>Accepting</p>
                    </div>
                </a>
            </div>
        
            <!-- Faculty Profile 2 -->
            <div class="faculty-profile" id="faculty2">
                <a href="faculty2.php">
                    <img src="images/Dr.-Md.-Khalilur-Rhaman.jpg" alt="Faculty 2">
                    <h2>Dr. Md. Khalilur Rahman</h2>
                    <p>Professor</p>
                    <div class="thesis-availability">
                        <div class="green-light"></div>
                        <p>Accepting</p>
                    </div>
                </a>
            </div>
        
            <!-- Faculty Profile 3 -->
            <div class="faculty-profile" id="faculty3">
                <a href="faculty3.php">
                    <img src="images/amitabhaSir.jpg" alt="Faculty 3">
                    <h2>Dr. Amitahba Chakrabarty</h2>
                    <p>Professor</p>
                    <div class="thesis-availability">
                        <div class="red-light"></div>
                        <p>Not Accepting</p>
                    </div>
                </a>
            </div>

            <!-- Faculty Profile 4 -->
            <div class="faculty-profile" id="faculty4">
                <a href="faculty4.php">
                    <img src="images/mihjpg.jpg" alt="Faculty 4">
                    <h2>Dr. Muhammad Iqbal Hossain</h2>
                    <p>Associate Professor</p>
                    <div class="thesis-availability">
                        <div class="green-light"></div>
                        <p>Accepting</p>
                    </div>
                </a>
            </div>
        
            <!-- Faculty Profile 5 -->
            <div class="faculty-profile" id="faculty5">
                <a href="faculty5.php">
                    <img src="images/Tawhid.jpg" alt="Faculty 5">
                    <h2>Tawhid Anwar</h2>
                    <p>Senior Lecturer</p>
                    <div class="thesis-availability">
                        <div class="red-light"></div>
                        <p>Not Accepting</p>
                    </div>
                </a>
            </div>

             <!-- Faculty Profile 6 -->
             <div class="faculty-profile" id="faculty6">
                <a href="faculty6.php">
                    <img src="images/nishat_nayla.jpg" alt="Faculty 6">
                    <h2>Nishat Nayla</h2>
                    <p>C. Lecturer</p>
                    <div class="thesis-availability">
                        <div class="green-light"></div>
                        <p>Accepting</p>
                    </div>
                </a>
            </div>
        
        
        </div>


    </section>



</body>
</html>


