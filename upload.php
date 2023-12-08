<?php

require_once("DBconnect.php"); // Include your database connection details

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle other form fields

    $thesisname = isset($_POST["thesisname"]) ? mysqli_real_escape_string($conn, $_POST["thesisname"]) : "";
    $thesisTopic = isset($_POST["thesisTopic"]) ? mysqli_real_escape_string($conn, $_POST["thesisTopic"]) : "";
    $supervisorName = isset($_POST["supervisorName"]) ? mysqli_real_escape_string($conn, $_POST["supervisorName"]) : "";
    $session = isset($_POST["session"]) ? mysqli_real_escape_string($conn, $_POST["session"]) : "";
    $studentName = isset($_POST["studentName"]) ? mysqli_real_escape_string($conn, $_POST["studentName"]) : "";
    $student_id = isset($_POST["student_id"]) ? mysqli_real_escape_string($conn, $_POST["student_id"]) : "";



    // File upload handling
    $fileContent = file_get_contents($_FILES["file"]["tmp_name"]);


    // Define the folder where the PDF file will be saved
    $folder = "thesis.papers/";

    // Create the folder if it does not exist
    if (!file_exists($folder)) {
        mkdir($folder, 0777, true);
    }

    // Generate a unique filename for the PDF file
    $filename = $folder . uniqid() . ".pdf";

    // Save the PDF file to the specified folder
    file_put_contents($filename, $fileContent);

    // Insert data into database with the file link
    $sql = "INSERT INTO thesis_files (thesis_name, thesis_topic, supervisor_name, session, student_name, student_id, file_content) 
            VALUES ('$thesisname', '$thesisTopic', '$supervisorName', '$session', '$studentName', '$student_id', '$filename')";

    if ($conn->query($sql) === TRUE) {
        // echo "File uploaded successfully and data inserted into the database.";
        header("Location: homepage.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}

// Close the database connection
$conn->close();
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
            <label for="file">Choose a file (PDF):</label>
            <input type="file" id="file" name="file" accept=".pdf" required>
            <button type="submit">Upload</button>
        </form>

    </div>

</body>
</html>