<?php  include('./pages/includepage/header.php') ?>
<?php  include('./dbConnection.php') ?>
<!-- start vide background -->
<div class="container-fluid remove-video-marg">
    <div class="video-parn">
        <video playsinline autoplay muted loop >
        <source src="./assest/videos/80356-online-learning.mp4" >
        </video>
        <div class="video-overlay"></div>
    </div>
    <div class="video-content">
        <h1 class="my-content text-dark">Wealcome E-learning</h1>
        <small class="my-content font-bold text-dark">Learn and Implement</small><br>
        <a href="" class="btn btn-danger">Get Start</a>
      
    </div>
</div>
<!-- end vide background -->


<!-- start text banner -->
<div class="container-fluid bg-danger txt-banner mb-5">
  <div class="row bottom-banner">
   <div class="col-sm">
    <h5><i class="fas fa-book-open me-3"></i>100+ online course</h5>
   </div>
   <div class="col-sm">
    <h5><i class="fas fa-users me-3"></i>Expart Instructor</h5>
   </div>
   <div class="col-sm">
    <h5><i class="fas fa-keyboard me-3"></i>Life time access</h5>
   </div>
  </div>
  
  </div>
</div>
<!-- end text banner -->
<!-- start popular Course -->

<div class="container">
  <h1 class="text-center">Popular coures</h1>
  <div class="row row-cols-1 row-cols-md-3 g-4">
 <?php 
  $sql="SELECT * FROM `course` LIMIT 3" ;
  $result=$conn->query($sql);
  if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
    $course_id=$row['course_id'];?>
  
  <div class="col">
    <div class="card">
      <img src="<?php  echo str_replace('..','.',$row['course_img']);?> "class="card-img-top" alt="python">
      <div class="card-body">
        <h5 class="card-title"><?php echo $row['course_name'] ;?></h5>
        <p class="card-text"> <?php echo $row['course_desc'] ;?> </p>
      </div>
      <div class="card-footer d-flex justify-content-between ">
      <p class="card-text d-inline">Price: <small><del><?php echo $row['course_orginal_price'] ?></del></small>
    <span class="font-weight-bolder"><?php  echo $row['course_price'] ?></span></p>
    <a href="coursedtails.php?course_id=<?php echo $course_id ?>" class="btn btn-primary float-right text-light font-weight-bolder">Enrole Now</a>
    </div>
    </div>
  </div>

   
 <?php }
 
}
 ?>
  <!-- <div class="col">
    <div class="card">
      <img src="./assest/images/php.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
      <div class="card-footer d-flex justify-content-between ">
      <p class="card-text d-inline">Price: <small><del> 2000</del></small>
    <span class="font-weight-bolder"> 2000</span></p>
    <a href="" class="btn btn-primary float-right text-light font-weight-bolder">Enrole Now</a>
    </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="./assest/images/php.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
      <div class="card-footer d-flex justify-content-between ">
      <p class="card-text d-inline">Price: <small><del> 2000</del></small>
    <span class="font-weight-bolder"> 2000</span></p>
    <a href="" class="btn btn-primary float-right text-light font-weight-bolder">Enrole Now</a>
    </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="./assest/images/php.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
      </div>
      <div class="card-footer d-flex justify-content-between ">
      <p class="card-text d-inline">Price: <small><del> 2000</del></small>
    <span class="font-weight-bolder"> 2000</span></p>
    <a href="" class="btn btn-primary float-right text-light font-weight-bolder">Enrole Now</a>
    </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="./assest/images/php.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
      <div class="card-footer d-flex justify-content-between ">
      <p class="card-text d-inline">Price: <small><del> 2000</del></small>
    <span class="font-weight-bolder"> 2000</span></p>
    <a href="" class="btn btn-primary float-right text-light font-weight-bolder">Enrole Now</a>
    </div>
    </div>
  </div> -->
</div>
<div class="text-center my-3"><a class="btn btn-primary px-2 " href="">View all course</a></div>
</div>

<!-- end popular Course -->

 <!-- start contact us -->
          <?php  include('./pages/includepage/contact.php'); ?>
        <!-- end contact section -->

        <!-- student review start -->
        <div class="testimonial text-center bg-danger">
          <div class="container">
              <div class="headeing">
                  <h3 class="text-white" style="text-decoration: double underline;">Students Review</h3>
              </div>
              <div class="padding-section">
              <div class="owl-carousel owl-theme">
                  <div class="item">
                      <div class="testimonial-item">
                          <div class="carousel-imgg">
                              <img src="img/client/client (1).jpg" alt="">
                          </div>
                          <div class="testimonial-name">
                              <h4>David</h4>
                          </div>
                          <div class="testimonial-title">
                              <h6>web designer</h6>
                          </div>
                          <div class="testimonial-description">
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis cum odit, iste quo consectetur obcaecati.</p>
                          </div>
                          <div class="testimonial-icon">
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                          </div>
                      </div>
                  </div>
                  <div class="item">
                      <div class="testimonial-item mb-3">
                          <div class="carousel-imgg">
                              <img src="img/client/client (2).jpg" alt="">
                          </div>
                          <div class="testimonial-name">
                              <h4>Millar</h4>
                          </div>
                          <div class="testimonial-title">
                              <h6>web developer</h6>
                          </div>
                          <div class="testimonial-description">
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis cum odit, iste quo consectetur obcaecati.</p>
                          </div>
                          <div class="testimonial-icon">
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                          </div>
                      </div>
                  </div>
                  <div class="item">
                      <div class="testimonial-item">
                          <div class="carousel-imgg">
                              <img src="img/client/client (3).jpg" alt="">
                          </div>
                          <div class="testimonial-name">
                              <h4>Bacchu</h4>
                          </div>
                          <div class="testimonial-title">
                              <h6>web designer</h6>
                          </div>
                          <div class="testimonial-description">
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis cum odit, iste quo consectetur obcaecati.</p>
                          </div>
                          <div class="testimonial-icon">
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                          </div>
                      </div>
                  </div>
                  <div class="item">
                      <div class="testimonial-item">
                          <div class="carousel-imgg">
                              <img src="img/client/client (4).jpg" alt="">
                          </div>
                          <div class="testimonial-name">
                              <h4>Karim</h4>
                          </div>
                          <div class="testimonial-title">
                              <h6>web designer</h6>
                          </div>
                          <div class="testimonial-description">
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis cum odit, iste quo consectetur obcaecati.</p>
                          </div>
                          <div class="testimonial-icon">
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                          </div>
                      </div>
                  </div>
                  <div class="item">
                      <div class="testimonial-item">
                          <div class="carousel-imgg">
                              <img src="img/client/client (5).jpg" alt="">
                          </div>
                          <div class="testimonial-name">
                              <h4>Walton</h4>
                          </div>
                          <div class="testimonial-title">
                              <h6>web developer</h6>
                          </div>
                          <div class="testimonial-description">
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis cum odit, iste quo consectetur obcaecati.</p>
                          </div>
                          <div class="testimonial-icon">
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                          </div>
                      </div>
                  </div>
                  <div class="item">
                      <div class="testimonial-item">
                          <div class="carousel-imgg">
                              <img src="img/client/client.jpg" alt="">
                          </div>
                          <div class="testimonial-name">
                              <h4>Mobarrak</h4>
                          </div>
                          <div class="testimonial-title">
                              <h6>web designer</h6>
                          </div>
                          <div class="testimonial-description">
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis cum odit, iste quo consectetur obcaecati.</p>
                          </div>
                          <div class="testimonial-icon">
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          </div>
      </div>
  <!-- student review end -->
   <!-- about us start -->
   <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h3>About Us</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias, ullam?</p>
      </div>
      <div class="col-md-4">
        <h3>Category</h3>
        <p>web developement</p>
        <p>web developement</p>
        <p>web developement</p>
        <p>web developement</p>
      </div>
      <div class="col-md-4">
      <h3>Category</h3>
        <p>web developement</p>
        <p>web developement</p>
        <p>web developement</p>
        <p>web developement</p>
      </div>
    </div>

   </div>
   <!-- about us end -->
  <!-- footer start -->
  
  <?php  include('./pages/includepage/footer.php') ; ?>

  <!-- footer end -->

