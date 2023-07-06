<?php
session_start();
include("admin_connection.php");
include("admin_function.php");

$subject_id_old = $_GET['subject_id'];


      
       $query="DELETE FROM subject where subject_id='$subject_id_old' ";

        $data=mysqli_query($con,$query);   //to save the query into database
        if($data)
        {
        echo "<script>alert('Deleted')</script>";
        }
        else
        {
        echo "<script>alert('Not Deleted')</script>";
        }


        header("Location:admin_edit_subject.php");
        die;

    
    




?>