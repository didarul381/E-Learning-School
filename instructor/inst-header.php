<?php 
if(!isset($_SESSION)){
session_start();

}

include_once('./inst-header.php');
include_once('../dbConnection.php');

if(isset($_SESSION['is_login'])){
    $instLogEmail=$_SESSION['instLogEmail'];
   
//    echo "<script>location.href='../../E-Learning/index.php';</script>";
// header('Location:../');
}
if(isset($instLogEmail)){
$sql="SELECT * FROM `instructor` WHERE inst_email='$instLogEmail'";
$result=$conn->query($sql);
if($result->num_rows==1){
    $row=$result->fetch_assoc();
    $inst_img=$row['inst_img'];
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BootsStarp css -->
    <link rel="stylesheet" href="../assest/css/bootstrap.min.css">
     <!-- fontwasome css -->
     <link rel="stylesheet" href="../assest/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assest/css/style.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Desh Board</title>
</head>
<body>

     <!-- Top navr start -->
     <nav class="navbar  navbar-light bg-dark fixed-top shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0 text-white" href="adminDashboard.php">E-learning <small class="text-white">Inastructor Area</small></a>
    
</nav>
<!-- side bar start -->
<div class="container-fluid mb-5" style="margin-top:40px">
<div class="row">
<nav class=" col-sm-3 col-md-2 bg-light slidbar py-5 d-print-none">
    <div class="slidbar-sticky">
        <ul class="nav flex-column">
        <li class="nav-item mb-2">
             <img src="<?php if($inst_img){echo $inst_img;}  ?>" class=" w-50 img-thumbnail rounded-circle" alt="">
            </li>
            <li class="nav-item">
             <a class="nav-link" href="inst-deshbord.php"><i class="fas fa-tachometer-alt"></i>Deshboard</a>
            </li>
            <li class="nav-item">
             <a class="nav-link" href="./inst-profile.php"><i class="fas fa-tachometer-alt"></i>profile</a>
            </li>
            <li class="nav-item">
             <a class="nav-link" href="course.php"><i class="fab fa-accessible-icon"></i>My Course</a>
            </li>
            <li class="nav-item">
             <a class="nav-link" href="lesson.php"><i class="fab fa-accessible-icon"></i>Lesson</a>
            </li>
            <li class="nav-item">
             <a class="nav-link" href="#"><i class="fas fa-user"></i>Students</a>
             
            </li>
            <li class="nav-item">
             <a class="nav-link" href="#"><i class="fas fa-table"></i>Sell Reports</a>
            </li>
            <li class="nav-item">
             <a class="nav-link" href="payment_status.php"><i class="fas fa-table"></i>Payment Status</a>
            </li>
            <li class="nav-item">
             <a class="nav-link" href="#"><i class="fas fa-table"></i>Feebback</a>
            </li>
            <li class="nav-item">
             <a class="nav-link" href="#"><i class="fas fa-table"></i>Change password</a>
            </li>
            <li class="nav-item">
             <a class="nav-link" href="../logout.php"><i class="fas fa-table"></i>Logout</a>
            </li>

        </ul>
    </div>

</nav>

