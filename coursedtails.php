<!-- include header -->
<?php  
include('./pages/includepage/header.php') ;
// include dbconnection 
include('./dbConnection.php') 
  ?>

<!-- start course banner -->
<div class="container-fluid">
    <div class="row">
        <img src="./assest/images/courseimg.jpg" alt="" style="height:500px;width:100%;object-fit:cover;
        box-shadow:10px;
        ">
    </div>
</div>
<!-- end course banner -->

<!-- start main content -->
<div class="container mt-4">
    <?php  
    if(isset($_GET['course_id'])){
        $course_id=$_GET['course_id'];
        $_SESSION['course_id']=$course_id;
        $sql="SELECT * FROM `course` WHERE course_id='$course_id'";
        $result=$conn->query($sql);
        $row=$result->fetch_assoc();
        
    }
    
    ?>
    <div class="row">
        <div class="col-md-4">
        <img src="<?php  echo str_replace('..','.',$row['course_img']);?>" alt="" class="card-img-top">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">Course Name:<?php echo $row['course_name'];  ?></h5>
                <p class="card-text"><?php echo $row['course_desc'];  ?></p>
                <p class="card-text">Duration:<?php echo $row['course_duration']; ?></p>
                <form action="checkout.php"method="POST">
                <p>Price:<small><del><?php echo $row['course_orginal_price']; ?></del> <span><?php echo $row['course_price']; ?></span></small></p>
                <input type="hidden" name="id" value="'$row['course_price']'">
                <button  type="submit" class="btn btn-primary text-white">Buy Now</button>
                </form>
            </div>
        </div>

    <div class="container">
        <div class="row">
        <table class="table table-bordered table-hover">
                <thead>
                    <th scope="col">Lesson No.</th>
                    <th scope="col">Lesson Name.</th>
                </thead>
        <?php 
           
            $sql="SELECT * FROM lesson ";
            $result=$conn->query($sql);
            $num=0;
            if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                    if($course_id==$row['course_id']){
                        $num++;
                    ?>
                <tbody>
                <th scope="col"><?php echo $num;?></th>
                <td><?php echo $row['lesson_name'] ;?></td>
                </tbody>
                <?php } }}  ?>
            
     
                
        </table>
    </div>
</div>
<!-- include footer -->
<?php  include('./pages/includepage/footer.php') ?> 