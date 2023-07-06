

<?php
session_start();
include("admin_connection.php");
include("admin_function.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $teacher_name = $_POST['teacher_name'];
    $post = $_POST['post'];
    $email_id = $_POST['email_id'];
    $phone_no = $_POST['phone_no'];
    $class = $_POST['class'];
    

    if(!empty($teacher_name) && !empty($post) && !empty($email_id) && !empty($phone_no) )  //&& !is_numeric($user_name)
    {
        
        //saved to  database
        $query="insert into teacher (teacher_name,post,email_id,phone_no,class) values ('$teacher_name','$post','$email_id','$phone_no','$class')";

        mysqli_query($con,$query);   //to save the query into database
        echo "Saved";
        header("Location:admin.php");
        die;

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
            text-align: left;
            padding-left: 5ex;
            margin-top: 20px;
        }

        .form label {
            

        }


        .form input {
            text-align: center;

        }

        .container {
            display: flex;
            background: whitesmoke;
            
            flex-wrap: wrap;
            margin:5ex;
        }




        .container div {
            width:50%;
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

            <div class="container">
                <div><label>Teacher Name:- </label></div>
                <div><input type="text" placeholder="Geetanjali Bhola" style="width: 100%;" name="teacher_name"></div>
            </div>
            <div class="container">
                <div><label>Post:- </label></div>
                <div><input type="text" placeholder="Post (TGT/PGT/L.A)" style="width: 100%;" name="post"></div>
            </div>
            <div class="container">
                <div><label>Class:- </label></div>
                <div><input type="text" placeholder="class" style="width: 100%;" name="class"></div>
            </div>
            <div class="container">
                <div><label>Email Id:-</label></div>
                <div><input type="email" placeholder="abc@123" style="width: 100%;" name="email_id"></div>
            </div>
            <div class="container">
                <div><label>phone no:- </label></div>
                <div><input type="phone number" placeholder="8987XXXXXX" style="width: 100%;" name="phone_no"></div>
            </div>

            <div style=" text-align: center;">
            <button type="submit" class="btn btn-primary"
                style="margin-top: 20px; width:20ex; border-radius: 10ex;">Add Record</button>
            </div>    
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