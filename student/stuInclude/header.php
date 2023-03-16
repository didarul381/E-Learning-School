<?php 
if(!isset($_SESSION)){
session_start();

}

include_once('../dbConnection.php');

if(isset($_SESSION['is_login'])){
    $stuLogEmail  = $_SESSION['stuLogEmail'];
    
 }
 //else{
// //    echo "<script>location.href='../index.php';</script>";
// header('Location:../index.php');
// }
if(isset($stuLogEmail)){
$sql="SELECT * FROM `student` WHERE stu_email='$stuLogEmail'";
$result=$conn->query($sql);
if($result->num_rows==1){
    $row=$result->fetch_assoc();
    $stu_img=$row['stu_img'];
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
    <link rel="stylesheet" href="../admin/css/style.css">
    <title>Desh Board</title>
</head>
<body>

     <!-- Top navr start -->
     <nav class="navbar  navbar-light bg-dark fixed-top shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0 text-white" href="student/studentProfile.php">E-learning <small class="text-white">Admin Area</small></a>
    
</nav>
<!-- side bar start -->
<div class="container-fluid mb-5" style="margin-top:40px">
<div class="row">
<nav class=" col-sm-3 col-md-2 bg-light slidbar py-5 d-print-none">
    <div class="slidbar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item mb-2">
             <img src="<?php  echo $stu_img;  ?>" class="img-thumbnail rounded-circle" alt="">
            </li>
            <li class="nav-item">
             <a  class="nav-link" href="studentProfile.php"><i class="fab fa-user"></i>Profile <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
             <a class="nav-link" href="myCourse.php"><i class="fab fa-accessible-icon"></i>My Course</a>
            </li>
            <li class="nav-item">
             <a class="nav-link" href="stuFeedBack.php"><i class="fas fa-user"></i>Students Feedback</a>
            </li>
            <li class="nav-item">
             <a class="nav-link" href="stuChangePass.php"><i class="fas fa-table"></i>Change password</a>
            </li>
            <li class="nav-item">
             <a class="nav-link" href="../logout.php"><i class="fas fa-table"></i>Logout</a>
            </li>

        </ul>
    </div>

</nav>

