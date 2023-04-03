<?php 
if(!isset($_SESSION)){
session_start();

}

include_once('./admin_include/header.php');
include_once('../dbConnection.php');

?>
<?php
$i=0;
 if(isset($_REQUEST['checkId']) && isset($_REQUEST['submit'])){
   
    $trnx_id=$_REQUEST['checkId'];
    $sql="SELECT * FROM `courseorder` WHERE tran_id='$trnx_id'";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();

      $i=1;
 }else{
    echo "No result Found..";
 }

?>

<div class="col-sm-6">
    <h2 class="text-center my-3">Payment Status...</h2>
    <form action=""method="POST">
        <div class="form-group row">
            <label for="offset-sm-3 col-form-lable">Transxtion ID:</label>
            <div >
                <input type="text" id="checkId" required name="checkId" class="form-control mx-3">
            </div>
            <div class="my-2">
                <input type="submit" name="submit" class="btn btn-primary mx-4" value="view">
            </div>
        </div>
    </form>
  
  
    <table class="table table-bordered my-3">
    <!-- <thead>
    <tr>
         <th>Course Id</th>
        <th>Email</th>
        <th>Amount</th>
        <th>Date</th>
        <th>Tran_id</th>
    </tr>
   </thead>  -->
   <tbody>
  
      <?php
        if($i==1){?>
          <h2>Payment Details</h2>
         <tr>
           <td>Course Id :</td> 
         <td><?php echo $row['course_id']  ?></td> 
         </tr>
         <tr>
         <td>Email:</td>
          <td> <?php echo $row['stu_email']  ?></td>
          </tr>
          <tr>
          <td>Amount:</td>
         <td><?php echo $row['amount']  ?></td>
        </tr>
        <tr>
         <td>Date: </td>
       
         <td><?php echo $row['order_date']  ?></td>
        </tr>
        <tr>
         <td>Transxtion Id</td>
         <td><?php echo $row['tran_id']  ?></td>
        </tr>
          <tr>
            <td></td>
            <td><button class="btn btn-primary" onclick="javascript:window.print()">print</button></td>
        </tr>


<?php } ?>
   
   </tbody>
    </table>


</div>









<!-- include footer -->
<?php include_once('./admin_include/footer.php')  ?>