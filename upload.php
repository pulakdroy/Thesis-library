<?php
require_once("DBconnect.php"); // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sanitize and validate the input data as needed

    $thesisName = $_POST['thesisname'];
    $thesisTopic = $_POST['thesisTopic'];
    $supervisorName = $_POST['supervisorName'];
    $session = $_POST['session'];
    $studentName = $_POST['studentName'];
    $studentId = $_POST['student_id'];

    // Read the file content
    $fileContent = file_get_contents($_FILES["file"]["tmp_name"]);

    // Insert data into the database
    $insertSql = "INSERT INTO thesis_files (thesis_name, thesis_topic, supervisor_name, session, student_name, student_id, file_content) 
                  VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($conn, $insertSql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ssssssb", $thesisName, $thesisTopic, $supervisorName, $session, $studentName, $studentId, $fileContent);

        if (mysqli_stmt_send_long_data($stmt, 6, $fileContent)) {
            if (mysqli_stmt_execute($stmt)) {
                // Insert successful
                mysqli_stmt_close($stmt);

                // Redirect to homepage.php
                header("Location: homepage.php");
                exit();
            } else {
                // Handle the case where the insert fails
                echo "Error storing data: " . mysqli_error($conn);
            }
        } else {
            echo "Error sending file data.";
        }
    } else {
        echo "Error preparing statement: " . mysqli_error($conn);
    }
}
?>


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
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <!-- <label for="username">Thesis ID:</label>
            <input type="text" id="username" name="username" required> -->

            <label for="thesisname">Thesis Name:</label>
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