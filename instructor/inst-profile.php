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

//find query..
$sql="SELECT * FROM `instructor` WHERE inst_email='$instLogEmail'";
$result=$conn->query($sql);
if($result->num_rows==1){
    $row=$result->fetch_assoc();
    $instId=$row['inst_id'];
    $instName=$row['inst_name'];
    $instEmail=$row['inst_email'];
    $instOcc=$row['inst_occ'];
    $instImg=$row['inst_img'];
}


//update query..
if(isset($_REQUEST['updateSubmitBtn'])){
    if(($_REQUEST['instName']=="")){
        $msg='<div class="alert alert-waring col-sm-6 me-4 mt-2" role="alert">All Filde Required</div>';
    
      }else{
        $instName=$_REQUEST['instName'];
        $instEmail=$_REQUEST['instEmail'];
        $instOcc=$_REQUEST['instOcc'];
        $inst_img=$_FILES['instImg']['name'];
        $inst_img_temp=$_FILES['instImg']['tmp_name'];
        // $link_folder='../lessonvid/'.$lesson_link;
        $img_folder='../assest/images'.$inst_img;
        move_uploaded_file($inst_img_temp,$img_folder);

        $sql="UPDATE `instructor` SET `inst_name`='$instName',`inst_occ`='$instOcc',`inst_img`='$img_folder' WHERE inst_email='$instEmail'";

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
  <label for="stuId">Instructor Id</label>
 <input type="text" id="instId" name="instId" value =" <?php if(isset($instId)){
        echo $instId;
    } ?>" readonly >
    <label for="instEmail"> Email</label>
    <input type="email" id="instEmail" name="instEmail" 
    value ="<?php
        echo $instEmail;
      ?> " >
    
    <label for="instName"> Name</label>
    <input type="text" id="instName" name="instName"  value ="<?php
        echo $instName;
      ?> ">
      <label for="instOcc"> Occ</label>
    <input type="text" id="instOcc" name="instOcc"  value ="<?php
        echo $instOcc;
      ?> ">
    

    <!-- <label for="course_duration">Course Duration</label>
    <input type="text" id="course_duration" name="course_duration" placeholder="Your course_duration..">
    <label for="course_orginal_price">Course Orginal Price</label>
    <input type="text" id="course_orginal_price" name="course_orginal_price" placeholder="Your course_orginal_price..">
    
    <label for="course_selling_price">Course Selling Price</label>
    <input type="text" id="course_selling_price" name="course_price" placeholder="Yourcourse_selling_price.."> -->
    <label for="lesson_link">Upload Img</label>
    <input type="file" id="instImg" name="instImg" class="form-control-file">
    <input type="submit" id="updateSubmitBtn" name="updateSubmitBtn" value="update">
    <?php  if(isset($msg)){echo $msg;} ?>

    <!-- <a href="lesson.php" class="btn btn-secondary">Close</a> -->
  </form>
</div>
</div>
<!-- include footer -->
<?php include_once('./inst-footer.php');  ?>