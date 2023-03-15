<?php
if(!isset($_SESSION)){
session_start();
}
include_once('../dbConnection.php');

//Cheaking all email registar

if(isset($_POST['cheackemail']) && isset($_POST['stuemail'])){
  $stuemail=$_POST['stuemail'];
  $sql="SELECT stu_email FROM student WHERE stu_email='".$stuemail."'";
  $result=$conn->query($sql);
  $row=$result->num_rows;
  echo (json_decode($row));


}



//Insert Registration student
if(isset($_POST['stusingup'])&& $_POST['stuname'] &&  $_POST['stuemail']&& $_POST['stupassword']){

   $stuname= $_POST['stuname'];
   $stuemail=$_POST['stuemail'];
   $stupassword=$_POST['stupassword'];

   $sql="INSERT INTO student(stu_name,stu_email,stu_pass)values(' $stuname','$stuemail','$stupassword')";

  if( $conn->query($sql)==TRUE){
    echo (json_encode("OK"));
 
  }else{
     echo (json_encode("Failed"));
    
  }

}


//student login verification

if(!isset($_SESSION['is_login'])){

if(isset($_POST["checkLogEmail"]) && isset($_POST["stuLogEmail"]) && isset($_POST["stuPass"])){
  $stuLogEmail=$_POST["stuLogEmail"];
  $stuLogPass=$_POST["stuPass"];

  $sql="SELECT stu_email,stu_pass FROM student WHERE stu_email='".$stuLogEmail."' AND stu_pass='".$stuLogPass."'";
  $result=$conn->query($sql);

  $row=$result->num_rows;

  if($row===1){
    $_SESSION['is_login']=true;
    $_SESSION['stuLogEmail']=$stuLogEmail;
    echo json_encode($row);
  }else if($row===0){

    echo json_encode($row);
  }

}

}
?>