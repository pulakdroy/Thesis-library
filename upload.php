<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student File Upload</title>
    <link rel="stylesheet" href="upload.css">
</head>
<body>
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
                   <li><a href="sign.php">Signup</a></li>
                   <li><a href="upload.php">Upload</a></li>
                   
               </ul>
    
           </div>
        </nav>
    </header>
    
    <h1>Student File Upload</h1>


    <div class="container">
        <h2>Upload a File</h2>
        <form>

            <label for="username">Student_Id:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="file">Choose a file:</label>
            <input type="file" id="file" name="file" accept=".pdf, .doc, .docx">

            <button type="submit">Upload</button>
        </form>

        <p>Don't have an account? <a href="sign.php">Sign up here</a>.</p>
    </div>

</body>
</html>