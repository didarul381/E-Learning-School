<?php

include_once('../dbConnection.php');

//Cheaking all email registar

if(isset($_POST['cheackemail']) && isset($_POST['stuemail'])){
  $stuemail=$_POST['stuemail'];
  $sql="SELECT stu_email FROM student WHERE stu_email='".$stuemail."'";
  $result=$conn->query($sql);
  $row=$result->num_rows;
  echo (json_decode($row));


}



//Insert student
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


?>