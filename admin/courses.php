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

<div class="col-sm-9 ">
<div class=" mt-5 text-center">
<!-- table -->
<p class="bg-dark text-white p-2">List of Course</p>

<?php  $sql="SELECT * FROM course";
$result=$conn->query($sql);
if($result->num_rows>0)

  
 {?>
<table class="table">
 <thead>
    <tr>
       
        <th scope="col">Coures Id</th>
        <th scope="col">Name</th>
        <th scope="col">Authour</th>
        <th scope="col">Action</th>
    </tr>
 </thead>
 <tbody>
   <?php while($row=$result->fetch_assoc()){ ?>
     <tr>
     <th scope="row"><?php echo $row['course_id'] ?></th>
     <td><?php echo $row['course_name'] ?></td>
     <td><?php echo $row['course_author'] ?></td>
     <td >
     <form action="courseUpdate.php"  method="POST" class="d-inline">
     <input type="hidden" name="id" value="<?php echo $row['course_id']?>">
     <button type="submit" class="btn btn-secondary  ms-3 " name="update" value="update"><i class="fa fa-pen"></i></button>
     </form > 
     <form action=""  method="POST" class="d-inline">
    <input type="hidden" name="id" value="<?php echo $row['course_id']?>">
    <button type="submit" class="btn btn-secondary ms-3" name="delete" value="Delete"><i class="fa fa-trash-alt"></i></button>
   </form > 
    </td>
     </tr>
     <?php } ?>
 </tbody>
</table>
<?php }else{
    echo "No couse found";
} ?>
</div>
  
<div >

<a href="add_course.php" class="btn btn-danger box"><i class="fas fa-plus fa-2x"></i>

</a>
</div>
</div>
</div>

<!-- delte course -->

<?php  
if(isset($_REQUEST['delete'])){
   
    $sql="DELETE FROM course WHERE course_id={$_REQUEST['id']}";

    if($conn->query($sql)==TRUE){
        echo'<meta http-equiv="refresh" content="0;URL=?deleted"/>';

    }else{
        echo "Unable to delete";
    }
}


?>
<!-- include footer -->
<?php include_once('./admin_include/footer.php')  ?>