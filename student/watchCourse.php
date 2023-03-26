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
<div class="container-fluid">
    <div class="row">
        <h4 class="text-center">Lessons</h4>
        <ul id="playlist" class="nav flex flex-colum">
            <?php  
           
            if(isset($_GET['course_id'])){
                $course_id=$_GET['course_id'];
              
                $sql="SELECT * FROM lesson  WHERE course_id ='$course_id'";
                $result=$conn->query($sql);

                if($result->num_rows>0){
                    while($row=$result->fetch_assoc()){

                        echo'<li class="nav-item border-bottom py-2" movieurl='.$row['lesson_link'].'>
                           '.$row['lesson_name'].'
                        </li>';
                    }}
            }
            
            ?>

        </ul>

    </div>
    <div class="col-md-8">
      <video id="videoarea" src="" class="mt-5 w-75 me-3" controls></video>
    </div>
</div>
<?php  include('./stuInclude/footer.php') ?>