
<?php
session_start();

include("admin_connection.php");
include("admin_function.php");

$user_data = check_login($con);    //con for connection

$query1= "select * from student";
$result1 = mysqli_query($con,$query1);
$total_student= mysqli_num_rows($result1); 

$query2= "select * from teacher";
$result2 = mysqli_query($con,$query2);
$total_teacher= mysqli_num_rows($result2); 


$query3= "select * from subject";
$result3 = mysqli_query($con,$query3);
$total_subject= mysqli_num_rows($result3); 




?>




<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!--Css file -->
     <link rel="stylesheet" href="admin_style.css"> <!--local css file -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"> <!--font awesome icon-->
     <title>Admin</title>
</head>
<body>
<?php include 'menu.php'  ?>



      <div class="about">

        <div>
          <h3>Total Student
            <a href="admin_edit_student.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
            <a href="admin_add_student.php"><i class="fa fa-user-plus" aria-hidden="true"></i> </a>
          </h3>
          <h1 style="padding: 20px;">
            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
            <?php echo $total_student   ?> 
          </h1>
          
        </div>
        <div>
          <h3>Total Teacher
            <a href="admin_edit_teacher.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
            <a href="admin_add_teacher.php"><i class="fa fa-user-plus" aria-hidden="true"></i></a>
          </h3>
          <h1 style="padding: 20px;">
            <i class="fa fa-building" aria-hidden="true"></i>
    
            <?php echo $total_teacher   ?>
        </h1>
          
        </div>
        <div>
          <h3>Total Subject
            <a href="admin_edit_subject.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
            <a href="admin_add_subject.php"><i class="fa fa-user-plus" aria-hidden="true"></i></a>
          </h3>
          <h1 style="padding: 20px;">
            <i class="fa fa-briefcase" aria-hidden="true"></i>
            <?php echo $total_subject   ?>
          </h1>
          
        </div>
    
      </div>
    
      

      

        <!--java script files-->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
</body>
</html>