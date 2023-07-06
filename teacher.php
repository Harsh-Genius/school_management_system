
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!--Css file -->
     <style>
        

        .container
        {
            width:;
            background:;
            padding:;
            margin-top: 20px;
        }

        .container table 
        {
            align:;
            test-align:center;
            background:whitesmoke;
            padding:10px;
        }   

        .container table tr th
        {
            padding-left: 4ex;
            padding-right: 4ex;
            text-align:;
            test-align:center;
        }

        .container table tr td
        {
            padding-left: 4ex;
            padding-right: 4ex;
            text-align:;
            test-align:center;
        }

    </style>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Teacher</title>
</head>
<body>
<?php include 'menu.php'  ?>
      
      <center><br>
        Hello, <?php session_start(); echo " Welcome ".$_SESSION['teacher_name'];   ?>
      
      </center>
      <center>

      <button type="submit" class="btn btn-primary"
                style="margin-top: 20px; width:20ex; border-radius: 10ex;"><a href="teacher_details.php" style="color:white;">My Details</a></button>

       
      </center>
    <br><br>
    <center>
    <div class="container">

        <table border="1px">
            <tr>
                <th><h4>Student Name</h4></th>
                <th><h4>Class</h4></th>
                <th><h4>Email Id</h4></th>
                <th><h4>Phone No</h4></th>
                <th><h4>Marks</h4></th>
                <th><h4>Update</h4></th>
                <th><h4>Delete</h4></th>
            </tr>


            <?php
            
            //$t_class=$_SESSION['teacher_class'];
            include("admin_connection.php");
            include("admin_function.php");
            $query="select * from student where class='$_SESSION[teacher_class]'";
            $data=mysqli_query($con,$query);
            $total=mysqli_num_rows($data);

            if($total!=0)
            {
                while($result=mysqli_fetch_assoc($data))
                {
                    echo "
                        <tr>
                        <td><center>".$result['student_name']."</center></td>
                        <td><center>".$result['class']."</center></td>
                        <td><center>".$result['email_id']."</center></td>
                        <td><center>".$result['phone_no']."</center></td>
                        <td><center>".$result['marks']."</center></td>
                        <td>
                            <center>
                                <a href='teacher_update_student.php?email_id=$result[email_id] & student_name=$result[student_name] & class=$result[class] & phone_no= $result[phone_no] & marks= $result[marks]'>Update</td>
                            </center>    
                        </td>
                        <td>
                            <center>
                                <a href='teacher_delete_student.php?email_id=$result[email_id]'>Delete</td>
                            </center>    
                        </td>
                        </tr>
                    ";
                }
            }

            ?>


            




        </table>

    </div>
    </center>

      

        <!--java script files-->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
</body>
</html>