<?php 
if(!isset($_SESSION)){
session_start();

}

include_once('./stuInclude/header.php');


if(isset($_SESSION['is_login'])){
    $stuLogEmail  = $_SESSION['stuLogEmail'];
    
}else{
//    echo "<script>location.href='../index.php';</script>";
header('Location:../index.php');
}

//find query..
$sql="SELECT * FROM `student` WHERE stu_email='$stuLogEmail'";
$result=$conn->query($sql);
if($result->num_rows==1){
    $row=$result->fetch_assoc();
    $stuId=$row['stu_id'];
    $stuName=$row['stu_name'];
    $stuEmail=$row['stu_email'];
    $stuOcc=$row['stu_occ'];
    $stuImg=$row['stu_img'];
}


//update query..
if(isset($_REQUEST['updateSubmitBtn'])){
    if(($_REQUEST['stuName']=="")){
        $msg='<div class="alert alert-waring col-sm-6 me-4 mt-2" role="alert">All Filde Required</div>';
    
      }else{
        $stuName=$_REQUEST['stuName'];
        $stuEmail=$_REQUEST['stuEmail'];
        $stuOcc=$_REQUEST['stuOcc'];
        $stu_img=$_FILES['stuImg']['name'];
        $stu_img_temp=$_FILES['stuImg']['tmp_name'];
        // $link_folder='../lessonvid/'.$lesson_link;
        $img_folder='../assest/images/'.$stu_img;
        move_uploaded_file($stu_img_temp,$img_folder);

        $sql="UPDATE `student` SET `stu_name`='$stuName',`stu_occ`='$stuOcc',`stu_img`='$img_folder' WHERE stu_email='$stuEmail'";

        if($conn->query($sql)==TRUE){
           
            $msg='<div class="alert alert-success col-sm-6 me-4 mt-2" role="alert">success</div>';
            
        }else{
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "failed";
            $msg='<div class="alert alert-waring col-sm-6 me-4 mt-2" role="alert">Failde</div>';
        }
      }
}


?>

<div class="col-sm-6 mt-5  jumbotron">
<div class="container">
  <form class="mx-3" action="" method="POST" enctype="multipart/form-data">
  <label for="stuId">Student Id</label>
 <input type="text" id="stuId" name="stuId" value =" <?php if(isset($stuId)){
        echo $stuId;
    } ?>" readonly >
    <label for="stuEmail"> Email</label>
    <input type="email" id="stuEmail" name="stuEmail" 
    value ="<?php
        echo $stuEmail;
      ?> " >
    
    <label for="stuName"> Name</label>
    <input type="text" id="stuName" name="stuName"  value ="<?php
        echo $stuName;
      ?> ">
      <label for="stuOcc"> Occ</label>
    <input type="text" id="stuOcc" name="stuOcc"  value ="<?php
        echo $stuOcc;
      ?> ">
    

    <!-- <label for="course_duration">Course Duration</label>
    <input type="text" id="course_duration" name="course_duration" placeholder="Your course_duration..">
    <label for="course_orginal_price">Course Orginal Price</label>
    <input type="text" id="course_orginal_price" name="course_orginal_price" placeholder="Your course_orginal_price..">
    
    <label for="course_selling_price">Course Selling Price</label>
    <input type="text" id="course_selling_price" name="course_price" placeholder="Yourcourse_selling_price.."> -->
    <label for="lesson_link">Upload Img</label>
    <input type="file" id="stuImg" name="stuImg" class="form-control-file">
    <input type="submit" id="updateSubmitBtn" name="updateSubmitBtn" value="update">
    <?php  if(isset($msg)){echo $msg;} ?>

    <a href="lesson.php" class="btn btn-secondary">Close</a>
  </form>
</div>
</div>
<!-- include footer -->
<?php include_once('./stuInclude/footer.php');  ?>