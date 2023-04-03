<?php include_once('./admin_include/header.php')  ?>
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
$c=0;
$s=0;
$i=0;
$sold=0;

$sql="SELECT * FROM course";
$result=$conn->query($sql);
if($result->num_rows>0){
  while($row=$result->fetch_assoc()){
         $c++;
  }
}

$sql="SELECT * FROM student";
$result=$conn->query($sql);
if($result->num_rows>0){
  while($row=$result->fetch_assoc()){
         $s++;
  }
}

$sql="SELECT * FROM courseorder";
$result=$conn->query($sql);
if($result->num_rows>0){
  while($row=$result->fetch_assoc()){
         $sold++;
  }
}

$sql="SELECT * FROM instructor";
$result=$conn->query($sql);
if($result->num_rows>0){
  while($row=$result->fetch_assoc()){
         $i++;
  }
}


?>
<div class="col-sm-9 mt-5">
<div class="row text-center">

<div class="col-sm-3 mt-5">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h3 class="card-title">Courses</h3>
    <p class="card-text"><?php echo $c; ?></p>
    <a href="#" class="btn btn-primary">View</a>
  </div>
</div>
</div>
<div class="col-sm-3 mt-5">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h3 class="card-title">Student</h3>
    <p class="card-text"><?php echo $s; ?></p>
    <a href="#" class="btn btn-primary">View</a>
  </div>
</div>
</div>
<div class="col-sm-3 mt-5">
<div class="card" style="width: 18rem;">
<div class="card-body">
    <h3 class="card-title">Instructor</h3>
    <p class="card-text"><?php echo $i; ?></p>
    <a href="#" class="btn btn-primary">View</a>
  </div>
</div>
</div>
<div class="col-sm-3 mt-5">
<div class="card" style="width: 18rem;">
<div class="card-body">
    <h3 class="card-title">Sold</h3>
    <p class="card-text"><?php echo $sold; ?></p>
    <a href="#" class="btn btn-primary">View</a>
  </div>
</div>
</div>

<div class=" mt-5 text-center">
<!-- table -->
<p class="bg-dark text-white p-2">Course order</p>
<table class="table">
 <thead>
    <tr>
        <th scope="col">Order Id</th>
        <th scope="col">Coures Id</th>
        <th scope="col">Student Email</th>
        <th scope="col">Order Date</th>
        <th scope="col">Amount</th>
        <th scope="col">Action</th>
    </tr>
 </thead>
 <tbody>

     <tr>
     <th scope="row">22</th>
     <td>100</td>
     <td>100</td>
     <td>100</td>
     <td>100</td>
     <td><button type="submit" class="btn btn-secondary" name="delete" value="Delete"><i class="fa fa-trash-alt"></i></button></td>
     </tr>
 </tbody>
</table>
</div>
</div>
</div>




</div>
</div>

<!-- side bar end -->

  
    <!-- <a href="../logout.php" class="btn btn-primary ">Logout <Button></Button></a> -->

<!-- include footer -->
<?php include_once('./admin_include/footer.php')  ?>







    