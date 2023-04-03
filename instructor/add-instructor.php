<?php
if(!isset($_SESSION)){
session_start();
}
include_once('../dbConnection.php');

//Cheaking all email registar

if(isset($_POST['cheackemail']) && isset($_POST['instemail'])){
  $instemail=$_POST['instemail'];
  $sql="SELECT inst_email FROM instructor WHERE inst_email='".$instemail."'";
  $result=$conn->query($sql);
  $row=$result->num_rows;
  echo (json_decode($row));


}



//Insert Registration instructor
if(isset($_POST['instsingup'])&& $_POST['instname'] &&  $_POST['instemail']&& $_POST['instpassword']){

   $instname= $_POST['instname'];
   $instemail=$_POST['instemail'];
   $instpassword=$_POST['instpassword'];

   $sql="INSERT INTO instructor(inst_name,inst_email,inst_pass)values(' $instname','$instemail','$instpassword')";

  if( $conn->query($sql)==TRUE){
    echo (json_encode("OK"));
 
  }else{
     echo (json_encode("Failed"));
    
  }

}


//instructor login verification

if(!isset($_SESSION['is_login'])){

if(isset($_POST["checkLogEmail"]) && isset($_POST["instLogEmail"]) && isset($_POST["instPass"])){
  $instLogEmail=$_POST["instLogEmail"];
  $instLogPass=$_POST["instPass"];

  $sql="SELECT inst_email,inst_pass FROM instructor WHERE inst_email='".$instLogEmail."' AND inst_pass='".$instLogPass."'";
  $result=$conn->query($sql);

  $row=$result->num_rows;

  if($row===1){
    $_SESSION['is_login']=true;
    $_SESSION['instLogEmail']=$instLogEmail;
    echo json_encode($row);
  }else if($row===0){

    echo json_encode($row);
  }

}

}
?>