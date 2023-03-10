<div style="overflow: hidden;" class="footer bg-light">
    <p class="text-center p-2 mt-3">Copyright: &copy; 2023. Design By <a href=""> Didarul</a> ||  <a 
    type="button" id="stuLoginbtn" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#adminModal"  href="#login"> Admin Login</a>. All Right Reserved.</p>
  </div>
   <!-- start student singup modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Student Registration</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
     <?php   include_once('studentRegitration.php') ;?>
    <!-- <label for="stuname"> Name</label>
    <input type="text" id="stuname" name="stuname" placeholder="Your name..">
    <label for="stuemail"> Email</label>
    <input type="email" id="stuemail" name="stuemail" placeholder="Your email.">
    <label for="stupassword">Password</label>
    <input type="password" id="stupassword" name="stupassword" placeholder="Your password..">
     
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Singup</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> 
  </form> -->
  </div>
      <div class="modal-footer">
        <span id="successMsg"></span>
         <button id="singup" type="button" class="btn btn-primary" onclick="addStu()">SingUp</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
  <!-- end  student singup modal -->


<!-- start student singin modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModal-1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Student Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form id="stuLoginForm" action="" method="post">
    <label for="stuLogemail"> Email</label>
    <input type="email" id="stuLogemail" name="stuLogemail" placeholder="Your email.">
    <label for="stuLogpassword">Password</label>
    <input type="password" id="stuLogpassword" name="stuLogpassword" placeholder="Your password..">
    

    <input type="submit" value="Submit">
  </form>
      </div>
      <div class="modal-footer">
      <button type="button" id="stuLoginbtn" class="btn btn-primary">Login</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancle</button>
       
      </div>
    </div>
  </div>
</div>
  <!-- end  student singin modal -->


  <!-- start admin singin modal -->
<!-- Modal -->
<div class="modal fade" id="adminModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Admin Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form id=" adminLoginForm" action="" method="post">
    <label for=" adminLogemail"> Email</label>
    <input type="email" id=" adminLogemail" name=" adminLogemail" placeholder="Your email.">
    <label for=" adminLogpassword">Password</label>
    <input type="password" id=" adminLogpassword" name=" adminLogpassword" placeholder="Your password..">
    
    <!-- <input type="submit" value="Submit"> -->
  </form>
      </div>
      <div class="modal-footer">
      <button type="button" id=" adminLoginbtn" class="btn btn-primary">Login</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancle</button>
       
      </div>
    </div>
  </div>
</div>
  <!-- end  admin singin modal -->


<!-- jquery and Booststarp js -->
<script  src="./assest/js/jquery-3.6.3.min.js"></script>
<script src="./assest/js/popper.min.js"></script>
<script src="./assest/js/bootstrap.bundle.min.js"></script>
<script  src="./assest/js/bootstrap.min.js"></script>
<script src="./assest/js/owl.carousel.min.js"></script>
<script src="./assest/js/typeWrittine.js"></script>

<!-- Fontwasome Js -->
<script  src="./assest/js/all.min.js"></script>
<!-- Fontwasome Js -->
<script  src="./assest/js/ajxrequest.js"></script>


<script>
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:3,
                nav:false
            },
            1000:{
                items:3,
                nav:true,
                loop:false
            }
        }
    })
</script>

</body>
</html>
<!-- <div class="card-footer d-flex justify-content-between ">
      <p class="card-text d-inline">Price: <small><del>&8377 2000</del></small>
    <span class="font-weight-bolder">&8377 2000</span></p>
    <a href="" class="btn btn-primary float-right text-light font-weight-bolder">Enrole Now</a>
    </div> -->
<!-- <a href="" class="btn" style="text-align:left;padding:0px;margin:0px"> -->
   