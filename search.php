<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content = "width=device-width, initial-scale=1">
    <title>Thesis Library</title>
      <link rel ="stylesheet" href="./style1.css">
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
                    <li><a href="sign.php">Uplode</a></li>
                    <li><a href="studentlog.php">Student Login</a></li>
                    
                </ul>

            </div>
         </nav>
    </header>

        <h2>Search and Connect</h2>
        
        <input type="text" id="search-box" placeholder="Enter item name...">
        <button onclick="searchItems()">Search</button>
    
        <div id="result-container"></div>
    
        <!-- Static items on the webpage -->
        <div id="mango" class="item">Mango Item</div>
        <div id="jackfruit" class="item">Jackfruit Item</div>
        <div id="apple" class="item">Apple Item</div>
    
        <script src="script.js"></script>
    
    </body>
    </html>
