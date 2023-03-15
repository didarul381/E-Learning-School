<?php
include_once('./admin_include/header.php');
include_once('../dbConnection.php');

// if($conn->connect_error){
//   die("Conncetion failed");
// }else{
//   echo"connected";
// }

if(isset($_REQUEST['courseSubmitBtn'])){
  if(($_REQUEST['course_name']=="") ||($_REQUEST['course_author']=="") || ($_REQUEST['course_duration']=="") ||
  ($_REQUEST['course_orginal_price']=="") ||  ($_REQUEST['course_price']=="")){
    echo "All filed Required";

  }else{
    $course_name=$_REQUEST['course_name'];
    $course_desc=$_REQUEST['course_desc'];
    $course_author=$_REQUEST['course_author'];
    $course_duration=$_REQUEST['course_duration'];
    $course_price=$_REQUEST['course_price'];
    $course_orginal_price=$_REQUEST['course_orginal_price'];
    $course_img=$_FILES['course_img']['name'];
    $course_img_temp=$_FILES['course_img']['tmp_name'];
    $img_folder='../assest/images/'.$course_img;
    move_uploaded_file($course_img_temp,$img_folder);
    
    $sql="INSERT INTO course (course_name, course_desc, course_author, course_img, course_duration,course_price,course_orginal_price)VALUES('$course_name', '$course_desc', '$course_author', '$img_folder', '$course_duration', '$course_price','$course_orginal_price')";
    
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
<h1>Add course</h1>

<div class="container">
  <form action="" method="POST" enctype="multipart/form-data">
    <label for="course_name">Course Name</label>
    <input type="text" id="course_name" name="course_name" placeholder="Course Name..">
    <label for="course_desc">Course Descripation</label>
    <textarea id="course_desc" name="course_desc" row="2" placeholder="Write something.." ></textarea>
   
    <label for="author">Author</label>
    <input type="text" id="author" name="course_author" placeholder="Your author name..">

    <label for="course_duration">Course Duration</label>
    <input type="text" id="course_duration" name="course_duration" placeholder="Your course_duration..">
    <label for="course_orginal_price">Course Orginal Price</label>
    <input type="text" id="course_orginal_price" name="course_orginal_price" placeholder="Your course_orginal_price..">
    
    <label for="course_selling_price">Course Selling Price</label>
    <input type="text" id="course_selling_price" name="course_price" placeholder="Yourcourse_selling_price..">
    <label for="course_img">Course Imges</label>
    <input type="file" id="course_img" name="course_img" class="form-control-file">
    <input type="submit" id="courseSubmitBtn" name="courseSubmitBtn" value="Submit">

    <a href="courses.php" class="btn btn-secondary">Close</a>
  </form>
</div>
</div>

<!-- include footer -->
<?php include_once('./admin_include/footer.php')  ?>
</body>
</html>
