<?php
session_start();

include("admin_connection.php");
include("admin_function.php");

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
  <link rel="stylesheet" href="style.css"> <!--local css file -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"> <!--font awesome icon-->
  <title>Document</title>
</head>

<body>

  <?php include 'menu.php'  ?>


  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="width:auto; height: 60%;">
    <div class="carousel-inner" style="width:auto; height: 100%;">
      <div class="carousel-item active">
        <img class="d-block w-100 h-100" src="img/school6.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 h-100" src="img/school8.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 h-100" src="img/school4.jpg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <div class="about">

    <div>
      <h3>Total Student</h3>
      <h1 style="padding: 20px;">
        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
        <?php echo $total_student   ?>
      </h1>
    </div>
    <div>
      <h3>Total Teacher</h3>
      <h1 style="padding: 20px;">
        <i class="fa fa-building" aria-hidden="true"></i>
        <?php echo $total_teacher   ?>

      </h1>
    </div>
    <div>
      <h3>Total Subject</h3>
      <h1 style="padding: 20px;">
        <i class="fa fa-briefcase" aria-hidden="true"></i>
        <?php echo $total_subject   ?>
      </h1>
    </div>

  </div>


  <div class="container">
    <div>
      <h1>About Admin</h1>
      <p>School Administrators oversee administrative tasks in schools, colleges or other educational institutions. They ensure that the organization runs smoothly and they also manage facilities and staff. What does a School Administrator do? The duties of school administrators may vary depending on the size and type of school they work in.
        <br>
        To be successful as a school administrator, you should be detail-oriented without losing sight of the bigger picture. Outstanding candidates have the capacity to handle multiple responsibilities and don't lose their nerve under pressure. Understanding and reviewing the way the school and all its departments function.
      </p>
    </div>
    <div>
      <img class="" src="img/school4.jpg" style="width:-100%; height: 300px;">
    </div>
  </div>

  <div class="container">
    <div>
      <img src="img/school6.jpg" style="width:50ex; height:50ex;">
    </div>

    <div>
      <center>
        <h1>Our Top Class Faculty</h1>
      </center>
    </div>



  </div>

  <div class="container2" style="background-color:white;">
    <div style="background-color:white;">
      <img class="card-img-top" src="img/school5.jpg" alt="Card image cap">
      </div>
      <div style="background-color:white;">
      Beautiful  
      
    </div>
    
    <div style="background-color:white;">
      <img class="card-img-top" src="img/school5.jpg" alt="Card image cap">
      </div>
      <div style="background-color:white;">
      Intelligent  
      
    </div>

    <div style="background-color:white;">
      <img class="card-img-top" src="img/school5.jpg" alt="Card image cap">
      </div>
      <div style="background-color:white;">
      Love Teaching  
      
    </div>

    <div style="background-color:white;">
      <img class="card-img-top" src="img/school5.jpg" alt="Card image cap">
      </div>
      <div style="background-color:white;">
      Kind  
      
    </div>

    <div style="background-color:white;">
      <img class="card-img-top" src="img/school5.jpg" alt="Card image cap">
      </div>
      <div style="background-color:white;">
      Intelligent
        
      
    </div>

    <div style="background-color:white;">
      <img class="card-img-top" src="img/school5.jpg" alt="Card image cap">
      </div>
      <div style="background-color:white;">
      Hard Working
        
      
    </div>



  </div>

  <div style="background-color: whitesmoke; padding: 10px; color: blue; flex-direction: column; flex-box display:flex; flex-wrap:wrap;">
        <center>Copywrite:- HarshGenius.com</center>
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