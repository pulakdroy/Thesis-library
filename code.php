<?php
session_start();
$con = mysqli_connect("localhost","root","","thesis_library");

if(isset($_POST['stud_delete_btn']))
{
    $id = $_POST['delete_stud_id'];

    $query = "DELETE FROM create_account WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Data Deleted Successfully";
        header("Location: delete-data-by-id.php");
    }
    else
    {
        $_SESSION['status'] = "Data Not Deleted";
        header("Location: delete-data-by-id.php");
    }
}

?>