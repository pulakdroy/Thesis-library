<?php
require_once("DBconnect.php");

if(isset($_POST['input'])){
    $input = mysqli_real_escape_string($conn, $_POST['input']); // Sanitize user input

    $query = "SELECT * FROM thesis_files
    WHERE thesis_name LIKE '{$input}%' 
       OR thesis_topic LIKE '{$input}%' 
       OR supervisor_name LIKE '{$input}%' 
       OR session LIKE '{$input}%' LIMIT 3";


    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn)); // Add error handling
    }

    if(mysqli_num_rows($result) > 0) {
        ?>
        <table class="table table-bordered table-striped mt-4">
            <thead>
                <tr>
                    <th>thesis_id</th>
                    <th>thesis_name</th>
                    <th>thesis_topic</th>
                    <th>supervisor</th>
                    <th>session</th>
                    <th>student_name</th>
                    <th>student_id</th>
                    <th>file</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($row = mysqli_fetch_assoc($result)) {
                    $thesis_id = $row["id"];
                    $thesisName = $row["thesis_name"];
                    $thesisTopic = $row["thesis_topic"];
                    $supervisorName = $row["supervisor_name"];
                    $session = $row["session"];
                    $studentName = $row["student_name"];
                    $student_id = $row["student_id"];
                    $fileContent = $row["file_content"];
                    ?>
                    <tr>
                        <td><?php echo $thesis_id; ?></td>
                        <td><?php echo $thesisName; ?></td>
                        <td><?php echo $thesisTopic; ?></td>
                        <td><?php echo $supervisorName; ?></td>
                        <td><?php echo $session; ?></td>
                        <td><?php echo $studentName; ?></td>
                        <td><?php echo $student_id; ?></td>
                        <td><?php echo $fileContent; ?></td>
                        <td colspan="6"><a href="<?php echo $fileContent; ?>" target="_blank">View PDF</a></td>;

                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <?php
    } else {
        echo "<h6 class='text-danger text-center mt-3'>No data found</h6>";
    }
}
?>