<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!--Css file -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Student</title>
</head>
<body>
<?php include 'menu.php'  ?>
      

      <center><br>
        Hello, 
        <?php
         session_start();
         echo " Welcome ".$_SESSION['user_name'];
         ?>   <br><br><br><br><br>
           
           
         <lable>Name:- </lable> <?php echo $_SESSION['user_name']; ?><br> 
         <lable>Email_id:- </lable><?php echo $_SESSION['email_id']; ?><br>
         <lable>Class:- </lable><?php echo $_SESSION['class'] ; ?><br>
         <lable>Phone_no:-</lable><?php echo$_SESSION['phone_no'] ; ?><br>
         <lable>Password:-</lable><?php echo$_SESSION['student_password'] ; ?><br>

         <button type="submit" class="btn btn-primary" style="margin-top: 20px; width:20ex; border-radius: 10ex;"> 
            <a href='student_update_student.php?email_id=<?php echo $_SESSION['email_id']; ?>& student_name=<?php echo $_SESSION['user_name']; ?> & class=<?php echo $_SESSION['class'] ; ?> & phone_no=<?php echo $_SESSION['phone_no'] ; ?> & password=<?php echo $_SESSION['student_password'];?>' style="color:white;">Edit
         </button>
            
      </center>

        <!--java script files-->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
</body>
</html>