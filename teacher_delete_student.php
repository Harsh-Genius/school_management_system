<?php
session_start();
include("admin_connection.php");
include("admin_function.php");

$email_id_old = $_GET['email_id'];


      
       $query="DELETE FROM student where email_id='$email_id_old' ";

        $data=mysqli_query($con,$query);   //to save the query into database
        if($data)
        {
        echo "<script>alert('Deleted')</script>";
        }
        else
        {
        echo "<script>alert('Not Deleted')</script>";
        }


        header("Location:teacher.php");
        die;

    
    




?>