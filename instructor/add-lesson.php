<?php 
if(!isset($_SESSION)){
session_start();

}

include_once('./inst-header.php');
include_once('../dbConnection.php');

if(isset($_SESSION['is_login'])){
    $instLogEmail=$_SESSION['instLogEmail'];
   
}else{
    //    echo "<script>location.href='../index.php';</script>";
    header('Location:../index.php');
    }


if(isset($_REQUEST['lessonSubmitBtn'])){
  if(($_REQUEST['course_name']=="")  || ($_REQUEST['course_id']=="")||  ($_REQUEST['lesson_name']=="")){
    echo "All filed Required";

  }else{
    $lesson_name=$_REQUEST['lesson_name'];
    $lesson_desc=$_REQUEST['lesson_desc'];
    $course_id=$_REQUEST['course_id'];
    $course_name=$_REQUEST['course_name'];
    $lesson_link=$_FILES['lesson_link']['name'];
    $lesson_link_temp=$_FILES['lesson_link']['tmp_name'];
    // $link_folder='../lessonvid/'.$lesson_link;
    $link_folder='../assest/videos/'.$lesson_link;
    move_uploaded_file($lesson_link_temp,$link_folder);
    
    $sql="INSERT INTO `lesson`(`lesson_name`, `lesson_desc`, `lesson_link`, `course_id`, `course_name`) VALUES ('$lesson_name','$lesson_desc','$link_folder','$course_id','$course_name')";
    
        if($conn->query($sql)==TRUE){
         echo"Course add successfully";
        }else{
          echo"Unable to Courseadd successfully";
        }
  }  
}else{
  echo"not";
}



?>



<div class="col-sm-6 mt-5 mx-3 jumbotron">
<h1>Add Lesson</h1>

<div class="container">
  <form action="" method="POST" enctype="multipart/form-data">
  <label for="course_id">Course Id</label>
 <input type="text" id="course_id" name="course_id" value =" <?php if(isset($_SESSION['course_id'])){
        echo $_SESSION['course_id'];
    } ?>" readonly >
    <label for="course_name">Course Name</label>
    <input type="text" id="course_name" name="course_name" 
    value ="<?php if(isset($_SESSION['course_name'])){
        echo $_SESSION['course_name'];
     } ?> "readonly >
    
    <label for="lesson_name">Lesson Name</label>
    <input type="text" id="lesson_name" name="lesson_name" placeholder="Your lesson_name..">
    <label for="lesson_desc">Lesson Desc</label>
    <textarea id="lesson_desc" name="lesson_desc" row="2" placeholder="Write something.." ></textarea>

    <!-- <label for="course_duration">Course Duration</label>
    <input type="text" id="course_duration" name="course_duration" placeholder="Your course_duration..">
    <label for="course_orginal_price">Course Orginal Price</label>
    <input type="text" id="course_orginal_price" name="course_orginal_price" placeholder="Your course_orginal_price..">
    
    <label for="course_selling_price">Course Selling Price</label>
    <input type="text" id="course_selling_price" name="course_price" placeholder="Yourcourse_selling_price.."> -->
    <label for="lesson_link">Lesson Video</label>
    <input type="file" id="lesson_link" name="lesson_link" class="form-control-file">
    <input type="submit" id="lessonSubmitBtn" name="lessonSubmitBtn" value="Submit">

    <a href="lesson.php" class="btn btn-secondary">Close</a>
  </form>
</div>
</div>



</body>
</html>
<!-- include footer -->
<?php include_once('./inst-footer.php');  ?>
