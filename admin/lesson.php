<?php 
if(!isset($_SESSION)){
session_start();

}

include_once('./admin_include/header.php');
include_once('../dbConnection.php');

if(isset($_SESSION['is_admin_login'])){
    $adminEmail= $_SESSION['adminLogemail'];
}else{
//    echo "<script>location.href='../index.php';</script>";
header('Location:../index.php');
}





?>


<div class="col-sm-9">
    <h2 class="text-center my-3">View Lesson</h2>
    <form action=""method="POST">
        <div class="form-group row">
            <label for="offset-sm-3 col-form-lable">Course ID:</label>
            <div >
                <input type="text" id="checkId" name="checkId" class="form-control mx-3">
            </div>
            <div class="my-2">
                <input type="submit" class="btn btn-primary mx-4" value="view">
            </div>
        </div>
    </form>

    <?php
  $sql="SELECT course_id FROM course";
  $result=$conn->query($sql);
  while($row=$result->fetch_assoc()){
    if(isset($_REQUEST['checkId']) && $_REQUEST['checkId']==$row['course_id']){
        $sql="SELECT * FROM course WHERE course_id={$_REQUEST['checkId']}";
        $result=$conn->query($sql);
        $row=$result->fetch_assoc();
        if(($row['course_id'])==$_REQUEST['checkId']){
            $_SESSION['course_id']=$row['course_id'];
            $_SESSION['course_name']=$row['course_name'];

            ?>
           <h3 class="mt-3 bg-primary text-white p-2">Course Id : <?php if(isset($row['course_id'])){echo $row['course_id'];} ?> Course Name
           <?php if(isset($row['course_name'])){echo $row['course_name'];} ?>
        </h3>
           
    <?php 
    
     $sql="SELECT * FROM lesson WHERE course_id={$_REQUEST['checkId']}";
     $result=$conn->query($sql);
    echo '
    <table class="table table-bordered table-hover">
    <thead>
    <tr>
       
        <th scope="col">Lesson Id</th>
        <th scope="col">LessonName</th>
        <th scope="col">Lesson Link</th>
        <th scope="col">Action</th>
       </tr>
      </thead>
      <tbody>';

       while($row=$result->fetch_assoc()){ ?>
        <tr>
        <th scope="row"><?php echo $row['lesson_id'] ?></th>
        <td><?php echo $row['lesson_name'] ?></td>
        <td><?php echo $row['lesson_link'] ?></td>
        <td >
        <form action="courseUpdate.php"  method="POST" class="d-inline">
        <input type="hidden" name="id" value="<?php echo $row['lesson_id']?>">
        <button type="submit" class="btn btn-secondary  ms-3 " name="update" value="update"><i class="fa fa-pen"></i></button>
        </form > 
        <form action=""  method="POST" class="d-inline">
       <input type="hidden" name="id" value="<?php echo $row['lesson_id']?>">
       <button type="submit" class="btn btn-secondary ms-3" name="delete" value="Delete"><i class="fa fa-trash-alt"></i></button>
      </form > 
       </td>
        </tr>
     <?php  }


}
    }
  }
?>

<div >
<?php if(isset($_SESSION['course_id'])){
    echo '
    <a href="add_lesson.php" class="btn btn-danger box my-5 ms-5"><i class="fas fa-plus fa-2x"></i>
   </a>
    ';
} ?>

</div>

</div>






<!-- include footer -->
<?php include_once('./admin_include/footer.php')  ?>