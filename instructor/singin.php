<?php include_once('../pages/includepage/header.php')  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bongo-Learners</title>
    <!-- BootsStarp css -->
    <link rel="stylesheet" href="../assest/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assest/css/owl.carousel.min.css">
  <link rel="stylesheet" href="../assest/css/responsive.css">
  <link rel="stylesheet" href="../assest/css/lineicons.css">
    <!-- fontwasome css -->
    <link rel="stylesheet" href="../assest/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
       <!-- custom css -->
       <link rel="stylesheet" href="../assest/css/style.css">
</head>
 
<body>
    
<div class="container my-5">
    <div class="row">
        <div class="col-md-6 mx-auto my-5">
        <h2 class="my-3">Singin</h2>
        <form id="instLoginForm" action="" method="post">
    <label for="instLogemail"> Email</label>
    <input type="email" id="instLogemail" name="instLogemail" placeholder="Your email.">
    <label for="instLogpassword">Password</label>
    <input type="password" id="instLogpassword" name="instLogpassword" placeholder="Your password..">
    

    <!-- <input  type="submit" value="Submit"> -->
  </form>
  <small id="StatusLogMsg"></small>
      <button onclick="checkInstLogin()" type="button" id="stuLoginbtn" class="btn btn-primary">Login</button>
         <a href="instructor_registration.php" class="btn btn-primary">Don't you have an account?Please Singup</a>
        </div>
        
    </div>
</div>

<script  src="../assest/js/jquery-3.6.3.min.js"></script>
<script src="../assest/js/popper.min.js"></script>
<script src="../assest/js/bootstrap.bundle.min.js"></script>
<script  src="../assest/js/bootstrap.min.js"></script>
<script src="../assest/js/owl.carousel.min.js"></script>
<script src="../assest/js/typeWrittine.js"></script>

<!-- Fontwasome Js -->
<script  src="../assest/js/all.min.js"></script>
<!--instructor ajxrequest Js -->
<script  src="../assest/js/instructor_ajx.js"></script>
<!-- admin ajxrequest Js -->
<!-- <script  src="../assest/js/admin_ajx.js"></script> -->

</body>
</html>