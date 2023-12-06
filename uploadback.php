<?php

require_once('DBconnect.php');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $thesisID = $_POST['thesis_id'];
    $thesisname = $_POST['thesis_name'];
    $thesisTopic = $_POST['thesisTopic'];
    $supervisorName = $_POST['supervisorName'];
    $session = $_POST['session'];
    $studentName = $_POST['studentName'];
    $studentID = $_POST['username'];


    $file = $_FILES['file'];
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileType = $file['type'];
    $fileError = $file['error'];
    $fileSize = $file['size'];

    if ($fileError === UPLOAD_ERR_OK) {
        $uploadPath = 'thesis.papers/' . $fileName;
        move_uploaded_file($fileTmpName, $uploadPath);

        $insertQuery = "INSERT INTO thesis_files (studentID, password, thesisTopic, studentName, supervisorName, session, fileName, filePath)
                        VALUES ('$studentID', '$password', '$thesisTopic', '$studentName', '$supervisorName', '$session', '$fileName', '$uploadPath')";

        if ($db->query($insertQuery) === TRUE) {
            echo json_encode(['success' => true, 'message' => 'File uploaded successfully.']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error uploading file to database.']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'File upload failed.']);
    }
} else {
    http_response_code(405); // Method Not Allowed
    echo json_encode(['success' => false, 'message' => 'Method Not Allowed']);
}

// Close the database connection
$db->close();
?>