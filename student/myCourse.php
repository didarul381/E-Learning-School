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
?>
<div class="col-sm-6 mt-5  jumbotron">
<div class="container">
    <div class="row">
        
            <h4>All Course</h4>
            <?php   
              if($stuLogEmail){

                $sql="SELECT co.tran_id, c.course_id, c.course_name,c.course_desc,c.course_duration,c.course_author,c.course_img,c.course_price,c.course_orginal_price FROM courseOrder AS co JOIN course AS c ON c.course_id=co.course_id WHERE co.stu_email='$stuLogEmail'";
                $result=$conn->query($sql);
                if($result->num_rows>0){
                    while($row=$result->fetch_assoc()){?>
                    <div class="bg-light">
                        <h5><?php  echo $row['course_name'] ?> </h5>
                    </div>

                   <div class="row">
                    <div class="col-sm-3">
                        <img src="<?php echo $row['course_img'] ?>" class="card-img-top mt-2" alt="">
                    </div>
                    <div class="col-sm-6">
                      <a href="watchCourse.php?course_id=<?php  echo $row['course_id']  ?>" class="btn btn-primary">Watch Corse</a>
                    </div>
                   </div>


               <?php }
              }
              }
            ?>
        </div>
    </div>
</div>
<?php  include_once('./stuInclude/footer.php') ?>