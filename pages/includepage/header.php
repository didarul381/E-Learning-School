<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Learing</title>
    <!-- BootsStarp css -->
    <link rel="stylesheet" href="./assest/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assest/css/owl.carousel.min.css">
  <link rel="stylesheet" href="./assest/css/responsive.css">
  <link rel="stylesheet" href="./assest/css/lineicons.css">
    <!-- fontwasome css -->
    <link rel="stylesheet" href="./assest/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
       <!-- custom css -->
       <link rel="stylesheet" href="./assest/css/style.css">
</head>
<style>
 
input[type=text], select, textarea {
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
}


</style>

<body>
    
<!-- Start Navigation -->
<nav class="navbar navbar-expand-sm navbar-light bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="index.php">E-Learning</a>
    <span>Learning And Implement</span>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
       <ul class="navbar-nav ps-5">
        <li class="nav-item"><a class="nav-link text-light" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link text-light" href="courses.php">Coures</a></li>
        <li class="nav-item"><a class="nav-link text-light" href="paymentatus.php">Payment Status</a></li>
        <?php
        session_start();
        if(isset($_SESSION['is_login'])){
          echo'
          <li class="nav-item"><a class="nav-link text-light" href="">Profile</a></li>
        <li  class="nav-item"><a href="logout.php" class="nav-link text-light" href="">Logout</a></li>
          ';
        }else{
          echo'
          <li class="nav-item"><a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal-1" class="nav-link text-light" href="">Login</a></li>
         <li class="nav-item"><a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class=" nav-link text-light" href="">Sing up</a></li>
          ';
        } 
        ?>
        <!-- <li class="nav-item"><a class="nav-link text-light" href="">Profile</a></li>
        <li class="nav-item"><a class="nav-link text-light" href="">Logout</a></li> -->
        <!-- <li class="nav-item"><a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal-1" class="nav-link text-light" href="">Login</a></li>
         <li class="nav-item"><a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class=" nav-link text-light" href="">Sing up</a></li> -->
        <li class="nav-item"><a class="nav-link text-light" href="">Feedback</a></li>
        <li class="nav-item"><a class="nav-link text-light" href="">Contact</a></li>
        
       </ul>
    
    </div>
  </div>
</nav>

<!-- End Navigation -->
