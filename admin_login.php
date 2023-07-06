<?php

session_start();
include("admin_connection.php");
include("admin_function.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $admin_id = $_POST['admin_id'];
    $admin_password = $_POST['admin_password'];

    if(!empty($admin_id) && !empty($admin_password) )
    {
        
        //read  from database
        
        $query="select * from admin where admin_id  = '$admin_id' limit 1";

        $result = mysqli_query($con,$query);   //to save the query into database

        if($result)
        {
            if($result && mysqli_num_rows($result)>0)
        {
            $user_data = mysqli_fetch_assoc($result);     //assoc  :- sort cut for associated array
            
            if($user_data['admin_password'] === $admin_password)
            {   
                $_SESSION['admin_id'] = $user_data['admin_id'];
                header("Location: admin.php");
                die;
            }
        
        }  
        }

        echo " Wrong username and password!!"; 

    }
    else
    {
        echo "Please Enter some Valid Information!!";
    }
}

?>





<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Css file -->
    <!--local css file -->
    <style>
        .form {
            width: 100%;
            justify-content: center;
            text-align: center;
            padding:;
            margin-top: 20px;
        }
    </style>



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"> <!--font awesome icon-->
    <title>Admin</title>
</head>

<body>
<?php include 'menu.php'  ?>

    <div class="form">
        <form method="post">
           <h3><label>Enter Admin Email Id</label></h3>
            <div style="">
                <input type="email" class=""placeholder="abc@123" name="admin_id"
                    style="border-radius: 20px; width:100ex;  text-align: center; padding: 10px;">
            </div>
            <br>
            <h3><label>Enter Admin password</label></h3>
            <div style="">
                <input type="possword" class="" id="inputEmail3" placeholder="1234" name="admin_password"
                    style="border-radius: 20px; width:100ex;  text-align: center; padding: 10px;">
            </div>
            <input type="submit" value="Login" class="btn btn-primary" style="margin-top: 20px; width:20ex; border-radius: 10ex;">

        </form>
    </div>

    <!--java script files-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

</body>

</html>