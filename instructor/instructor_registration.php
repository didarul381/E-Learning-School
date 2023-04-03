<?php include_once('../pages/includepage/header.php')   ?>

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
 <style>
 
/* input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
input[type=email] {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
input[type=password] {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
} */


</style>

<body>
    
<div class="container my-5">
    <div class="row">
        <div class="col-md-6 mx-auto my-5">
        <h2 class="my-3">Regitration</h2>
    <form id="instRegForm" action="" method="post">
    <label for="instname"> Name </label> <small id="statusMsg1"></small>
    <input type="text" id="instname" name="instname" placeholder="Your name..">
    <label for="instemail"> Email</label> <small id="statusMsg2"></small>
    <input type="email" id="instemail" name="instemail" placeholder="Your email.">
    <label for="instpassword">Password</label> <small id="statusMsg3"></small>
    <input type="password" id="instpassword" name="instpassword" placeholder="Your password..">
     <!-- <input type="submit" value="Submit"> -->
    <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Singup</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
        </form>
        <span id="successMsg"></span>
         <button id="singup" type="button" class="btn btn-primary" onclick="addInst()">SingUp</button>
         <a href="singin.php" class="btn btn-primary">Do you have an account?PleaseSingin</a>
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