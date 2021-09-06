<?php

include('Login_v3/session.php'); 
if(!isset($_SESSION['login_user'])){ 
  header("location: login_v3.php"); // Redirecting To Home Page 
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
  	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
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

    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="dashboard.php">Dashboard</a>
      <a href="store_details.php">Edit Store Details</a>
      <a href="store_questions.php">Feedback Questions</a>
      <a href="store_cpn.php">Store Coupons</a>
      <a href="view.php">Feedback Results</a>
      <a href="feedback.php?store_id=<?=$store?>"  target="_blank">Feedack Preview</a>
      <a href="Login_v3/logout.php">Logout</a>
    </div>

    <!-- Use any element to open the sidenav -->
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>

    <div id="main">
      <div class="rb-box">
        <p><?=$row['store_name']?></p>
      </div>

      <form class="login100-form validate-form flex-sb flex-w" action='edit_store_det.php' method="post">
        <div class="rb-box">

          <p>Please Enter Your Store Details</p>
          <br>
          <p>Store Name</p>
          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="store_name" placeholder="Store Name" value="<?=$row['store_name']?>">
            <span class="focus-input100"></span>
          </div>
          <br>

          <p>Store Address</p>
          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="store_add" placeholder="Store Address" value="<?=$row['store_add']?>">
            <span class="focus-input100"></span>
          </div>
          <br>

          <p>Owner's Name</p>
          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="owner_name" placeholder="Owner's Name" value="<?=$row['owner_name']?>">
            <span class="focus-input100"></span>
          </div>
          <br>

          <p>Phone</p>
          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="owner_phone" placeholder="Phone" value="<?=$row['owner_phone']?>">
            <span class="focus-input100"></span>
          </div>
          <br>

          <p>Store Phone</p>
          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="store_phone" placeholder="Store Phone" value="<?=$row['store_phone']?>">
            <span class="focus-input100"></span>
          </div>
          <br>

          <p>Store Email</p>
          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="store_email" placeholder="Store Email" value="<?=$row['store_email']?>">
            <span class="focus-input100"></span>
          </div>
          <br>

          <div class="container-login100-form-btn m-t-17"  align: center>
            <button class="button trigger">Submit!</button>
          </div>      
        </div>

        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
        <!--===============================================================================================-->
        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/animsition/js/animsition.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/select2/select2.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/daterangepicker/moment.min.js"></script>
        <script src="vendor/daterangepicker/daterangepicker.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/countdowntime/countdowntime.js"></script>
        <!--===============================================================================================-->
        <script src="js/main.js"></script>
        <script src="js1/index.js"></script>
      </form>
    </div>
    
    <script>
      function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
      }

      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
        document.body.style.backgroundColor = "white";
      }
    </script>
  </body>
</html>