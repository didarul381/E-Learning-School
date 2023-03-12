
<!-- include header -->
<?php include_once('./admin_include/header.php')  ?>

<div class="col-sm-9 ">
<div class=" mt-5 text-center">
<!-- table -->
<p class="bg-dark text-white p-2">List of Course</p>
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

     <tr>
     <th scope="row">22</th>
     <td>100</td>
     <td>100</td>
     <td>
     <button type="submit" class="btn btn-secondary" name="add" value="Add"><i class="fa fa-pen"></i></button>
    <button type="submit" class="btn btn-secondary" name="delete" value="Delete"><i class="fa fa-trash-alt"></i></button>

    </td>
     </tr>
 </tbody>
</table>
</div>
  
<div >

<a href="add_course.php" class="btn btn-danger box"><i class="fas fa-plus fa-2x"></i>

</a>
</div>


</div>

</div>


<!-- include footer -->
<?php include_once('./admin_include/footer.php')  ?>