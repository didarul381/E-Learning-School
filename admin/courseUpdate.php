<?php
include_once('./admin_include/header.php');
include_once('../dbConnection.php');


if(isset($_REQUEST['updateCourseSubmitBtn'])){
    if(($_REQUEST['course_name']=="") ||($_REQUEST['course_author']=="") || ($_REQUEST['course_duration']=="") ||
    ($_REQUEST['course_orginal_price']=="") ||  ($_REQUEST['course_price']=="")){
      echo "All filed Required";
  
    }else{
     $c_id=$_REQUEST['id']; 
      $course_name=$_REQUEST['course_name'];
      $course_desc=$_REQUEST['course_desc'];
      $course_author=$_REQUEST['course_author'];
      $course_duration=$_REQUEST['course_duration'];
      $course_price=$_REQUEST['course_price'];
      $course_orginal_price=$_REQUEST['course_orginal_price'];
    //   $course_img=$_FILES['course_img']['name'];
    //   $course_img_temp=$_FILES['course_img']['tmp_name'];
      $img_folder='../assest/images/'.$_FILES['course_img']['name'];
    //   move_uploaded_file($course_img_temp,$img_folder);
      
      $sql="UPDATE `course` SET `course_id`='$c_id',`course_name`='$course_name',`course_desc`='$course_desc',`course_author`='$course_author',`course_img`='$img_folder',`course_duration`='$course_duration',`course_price`='$course_price',`course_orginal_price`='$course_orginal_price' WHERE `course_id`='$c_id'";
       
          if($conn->query($sql)==TRUE){
           $msg="Success";
          }else{
            $msg="UN Success";
          }
    }  
  }else{
    echo"not";
  }
  











if(isset($_REQUEST['update'])){

    $sql="SELECT * FROM course WHERE course_id={$_REQUEST['id']}" ;
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
   
}


?>
<div class="col-sm-6 mt-5 mx-3 jumbotron">
<h1>Update course</h1>
  

<div class="container">
  <form action="" method="POST" enctype="multipart/form-data">
  <label for="course_name">Course ID</label>
    <input type="text" id="id" name="id"  value="<?php if(isset($row['course_id'])){    echo $row['course_id'];} ?>">
    <label for="course_name">Course Name</label>
    <input type="text" id="course_name" name="course_name" value="<?php if(isset($row['course_name'])){    echo $row['course_name'];} ?>">
    <label for="course_desc">Course Descripation</label>
    <textarea id="course_desc" name="course_desc" row="2" 
    value="<?php if(isset($row['course_desc'])){echo $row['course_desc'];} ?>"
    ><?php if(isset($row['course_desc'])){echo $row['course_desc'];} ?></textarea>
   
    <label for="author">Author</label>
    <input type="text" id="author" name="course_author" 
    value="<?php if(isset($row['course_author'])){    echo $row['course_author'];} ?>"
    >

    <label for="course_duration">Course Duration</label>
    <input type="text" id="course_duration" name="course_duration"
    value="<?php if(isset($row['course_duration'])){    echo $row['course_duration'];} ?>"
    >
    <label for="course_orginal_price">Course Orginal Price</label>
    <input type="text" id="course_orginal_price" name="course_orginal_price" 
    value="<?php if(isset($row['course_orginal_price'])){    echo $row['course_orginal_price'];} ?>"
    >
    
    <label for="course_selling_price">Course Selling Price</label>
    <input type="text" id="course_selling_price" name="course_price" 
    value="<?php if(isset($row['course_price'])){    echo $row['course_price'];} ?>"
    >
    <label for="course_img">Course Imges</label>
    <img src="<?php if(isset($row['course_img'])){ echo $row['course_img'];} ?>" class='img-thumbnail' alt="">
    <input type="file" id="course_img" name="course_img" class="form-control-file">
    <input type="submit" id="updateCourseSubmitBtn" name="updateCourseSubmitBtn" value="Update">

    <a href="courses.php" class="btn btn-secondary">Close</a>
   <p> <?php if(isset($msg)){echo $msg;} ?></p>
  </form>
</div>
</div>
<!-- include footer -->
<?php include_once('./admin_include/footer.php')  ?>
</body>