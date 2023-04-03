<?php 
if(!isset($_SESSION)){
session_start();

}

include_once('./stuInclude/header.php');
include('../dbConnection.php');

if(isset($_SESSION['is_login'])){
    $stuLogEmail  = $_SESSION['stuLogEmail'];
    
}else{
//    echo "<script>location.href='../index.php';</script>";
header('Location:../index.php');
}
?>
<div class="col-sm-9">
<div class="container-fluid">
    <div class="row">
        <br>
        <h4 class="text-center  mt-5 ">Lessons</h4>
       <div class="col-md-3">
       <ul id="playlist" class="nav flex flex-column">
            <?php  
           
            if(isset($_GET['course_id'])){
                $course_id=$_GET['course_id'];
              
                $sql="SELECT * FROM lesson  WHERE course_id ='$course_id'";
                $result=$conn->query($sql);
                   $i=0;
                if($result->num_rows>0){
                    while($row=$result->fetch_assoc()){
                            $i++;
                        echo'<li  class="nav-item border-bottom py-2 " movieurl='.$row['lesson_link'].'>
                           '.$row['lesson_name'].'
                        </li>';
                    }}
            }
            
            ?>

        </ul>
       </div>
       <div class="col-md-9 ">
      <video id="videoarea" src="" class="mt-5 w-75 me-3" controls></video>
    </div>
    </div>
</div>

    </div>
   
    
<?php  include('./stuInclude/footer.php') ?>