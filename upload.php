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
    <h2>Upload a Thesis</h2>
        <form>
            <label for="username">Thesis ID:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Thesis Name:</label>
            <input type="text" id="thesisname" name="thesisname" required>

            <label for="thesisTopic">Thesis Topic:</label>
            <input type="text" id="thesisTopic" name="thesisTopic" required>

            <label for="supervisorName">Supervisor's Name:</label>
            <input type="text" id="supervisorName" name="supervisorName" required>

            <label for="session">Session:</label>
            <input type="text" id="session" name="session" required> 

            <label for="studentName">Students Name:</label>
            <input type="text" id="studentName" name="studentName" required>

            <label for="student_id">Students ID:</label>
            <input type="text" id="student_id" name="student_id" required>

            <label for="file">Choose a file (PDF, DOC, DOCX):</label>

            <input type="file" id="file" name="file" accept=".pdf, .doc, .docx" required>

            <button type="submit">Upload</button>
        </form>


    </div>

</body>
</html>