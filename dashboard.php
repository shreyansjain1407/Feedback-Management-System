<?php

include('Login_v3/session.php'); 
if(!isset($_SESSION['login_user'])){ 
  header("location: Login_v3/login_v3.php"); // Redirecting To Home Page 
}

$connect_db = mysqli_connect("localhost","root","") or die("Cannot connect to server");
mysqli_select_db($connect_db,"user") or die("Cannot connect to the database");

$query = mysqli_query($connect_db,"select * from store where store_id='$store'");
$row = mysqli_fetch_array($query);

$store_id = $store;

?>

<!DOCTYPE html>
<html >
    <head>
        <title>Add Store Details</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->
        <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" href="cssOpt/style_store_det.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel="stylesheet" href="cssOpt/style_store_det.css">  
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="cssOpt/sidenav.css">
    </head>

  <body>

    <div class="rb-box">
        <p>Welcome M/S: <?=$row['store_name']?></p>
        <p>Store ID: <?=$row['store_id']?></p>
    </div>

   
        <div class="rb-box">
            <div class=""  align: center>
                <a href="store_details.php"><button class="button trigger">Edit Store Details</button></a>
            </div>
            <div class=""  align: center>
                <a href="store_questions.php"><button class="button trigger">Feedback Questions</button></a>
            </div>
            <div class=""  align: center>
                <a href="store_cpn.php"><button class="button trigger">Store Coupons</button></a>
            </div>
            <div class=""  align: center>
                <a href="view.php"><button class="button trigger">Feedback Results</button></a>
            </div>
            <div class=""  align: center>
                <a href="feedback.php" target="_blank"><button class="button trigger">Feedack Preview</button></a>
            </div>
            <div class=""  align: center>
                <a href="Login_v3/logout.php"><button class="button trigger">Logout</button></a>
            </div>
        </div>


    
  </body>
</html>