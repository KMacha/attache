<?php include "secure.php"?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Jobstart &mdash; Colorlib Website Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">
    
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <header class="site-navbar py-1" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0"><a href="index.php" class="text-black h2 mb-0">Job<strong>start</strong></a></h1>
          </div>

          <div class="col-10 col-xl-10 d-none d-xl-block">
            <nav class="site-navigation text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="index.php">Home</a></li>
                <li class="has-children">
                  <a href="category.php">Category</a>
                  <ul class="dropdown">
                    <li><a href="#">Accounting/ Finance</a></li>
                    <li><a href="#">Automotive Jobs</a></li>
                    <li><a href="#">Computing</a></li>
                    <li><a href="#">Construction</a></li>
                    <li><a href="#">Telecommuunications</a></li>
                    <li><a href="#">Design, Art & Multimedia</a></li>
                  </ul>
                </li>
<!--                <li><a href="blog.html">Blog</a></li>-->
                <li><a href="about.php">About</a></li>
                <li class="active"><a href="contact.php">Contact</a></li>

                  <li><a href="new-post.php"><span class="rounded bg-primary py-2 px-3 text-white"><span class="h5 mr-2">+</span>Post Attachment</span></a></li>



                  <li><a href="#"></a></li>




                  <li>
                      <?php
//                      session_start();

                      if (isset($_SESSION['email']))

                      {
                          include"connect.php";

                          $email = $_SESSION['email'];
                          $sql= "SELECT * FROM persona_details WHERE persona_details.email = '$email'";
                          $result = mysqli_query($db,$sql);
                          while ($row = mysqli_fetch_array($result)){

//                              echo "<li><a href=''><span class='glyphicon glyphicon-user'></span>".$email;
//                             echo '<li><a href="signup.php"><span class="rounded bg-primary py-2 px-3 text-white"><span class="h5 mr-2">+</span>Sign Up</span></a></li>';
                          };




                          echo "</a></li>";
                          echo "<li><a href=''><span class='glyphicon glyphicon-user'></span>".$email;
                          echo "<li><a href='logout.php'><span class='glyphicon glyphicon-log-in'></span> Logout </a></li>";
//
                      }
                      else
                      {
                          echo "<li><a href='login.php'><span class='glyphicon glyphicon-log-in'></span>Login </a></li>";
                          echo "<li><a href='signup.php'><span class='glyphicon glyphicon-log-in'></span>Sign Up </a></li>";
                      }
                      ?>
                  </li>
<!--                  <li><a href="signup.php"><span class="rounded bg-primary py-2 px-3 text-white"><span class="h5 mr-2">+</span>Sign Up</span></a></li>-->
<!--                  <li><a href="login.php"><span class="rounded bg-primary py-2 px-3 text-white"><span class="h5 mr-2">+</span>Login</span></a></li>-->
              </ul>
            </nav>
          </div>

          <div class="col-6 col-xl-2 text-right d-block">
            
            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>

    <div class="unit-5 overlay" style="background-image: url('images/hero_bg_2.jpg');">
      <div class="container text-center">
        <h2 class="mb-0">Post a Job</h2>
        <p class="mb-0 unit-6"><a href="index.php">Home</a> <span class="sep">></span> <span>Post a Job</span></p>
      </div>
    </div>

    
    

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5">



<!--            <form action="#" class="p-5 bg-white">-->
                <form role="form" method="post" action="process_post.php" enctype="multipart/form-data" class="p-5 bg-white">

              
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label for="option-price-1">
<!--                    <input type="checkbox" id="option-price-1"> <span class="text-success">$300</span> For 30 days-->
                  </label>
                </div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <label for="option-price-2">
<!--                    <input type="checkbox" id="option-price-2"> <span class="text-success">$200</span> / Monthly Recurring-->
                  </label>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Job Title</label>
                  <input type="text" name="job_title" id="fullname" class="form-control" placeholder="eg. Full Stack Frontend">
                </div>
              </div>

              <div class="row form-group mb-5">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Company</label>
                  <input type="text" name="company"  id="fullname" class="form-control" placeholder="eg. Facebook, Inc.">
                </div>
              </div>


              <div class="row form-group">
                <div class="col-md-12"><h3>Attachment Category</h3></div>

                  <div class="col-md-12 mb-3 mb-md-0">
                      <label>Select Category</label>
                      <select name="category" class="form-control">
                          <option value="a">Accounting/ Finance</option>
                          <option value="b">Automotive Jobs</option>
                          <option value="c">Computing</option>
                          <option value="d">Construction</option>
                          <option value="e">Telecommunications</option>
                          <option value="f">Design, Art & Multimedia</option>

                      </select>
                  </div>


              </div>

              <div class="row form-group mb-4">
                <div class="col-md-12"><h3>Location</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <input type="text" name="location" class="form-control" placeholder="New York City">
                </div>
              </div>

              <div class="row form-group mb-4">
                <div class="col-md-12"><h3>Email</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <input type="text" name="email" class="form-control" placeholder="abcd@gmail.com ">
                </div>
              </div>

              <div class="row form-group mb-4">
                <div class="col-md-12"><h3>Phone</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <input type="text" name="phone" class="form-control" placeholder="+1 232 3234 234">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12"><h3>Attachment Description</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <textarea name="descr" class="form-control" id="" cols="30" rows="5"></textarea>
                </div>
              </div>



              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Post" class="btn btn-primary  py-2 px-5">
                </div>
              </div>

  
            </form>
          </div>

          <div class="col-lg-4">
<!--            <div class="p-4 mb-3 bg-white">-->
<!--&lt;!&ndash;              <h3 class="h5 text-black mb-3">Contact Info</h3>&ndash;&gt;-->
<!--&lt;!&ndash;              <p class="mb-0 font-weight-bold">Address</p>&ndash;&gt;-->
<!--&lt;!&ndash;              <p class="mb-4">203 Fake St. Mountain View, San Francisco, California, USA</p>&ndash;&gt;-->

<!--&lt;!&ndash;              <p class="mb-0 font-weight-bold">Phone</p>&ndash;&gt;-->
<!--&lt;!&ndash;              <p class="mb-4"><a href="#">+1 232 3235 324</a></p>&ndash;&gt;-->

<!--&lt;!&ndash;              <p class="mb-0 font-weight-bold">Email Address</p>&ndash;&gt;-->
<!--&lt;!&ndash;              <p class="mb-0"><a href="#">youremail@domain.com</a></p>&ndash;&gt;-->

<!--            </div>-->
<!--            -->
<!--            <div class="p-4 mb-3 bg-white">-->
<!--  &lt;!&ndash;              <h3 class="h5 text-black mb-3">More Info</h3>&ndash;&gt;-->
<!--  &lt;!&ndash;              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ad iure porro mollitia architecto hic consequuntur. Distinctio nisi perferendis dolore, ipsa consectetur</p>&ndash;&gt;-->
<!--  &lt;!&ndash;              <p><a href="#" class="btn btn-primary  py-2 px-4">Learn More</a></p>&ndash;&gt;-->
<!--            </div>-->
          </div>
        </div>
      </div>
    </div>

   


    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-6" data-aos="fade" >
            <h2>Frequently Ask Questions</h2>
          </div>
        </div>
        

        <div class="row justify-content-center" data-aos="fade" data-aos-delay="100">
          <div class="col-md-8">
            <div class="accordion unit-8" id="accordion">
            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">What is the name of your company<span class="icon"></span></a>
              </h3>
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur quae cumque perspiciatis aperiam accusantium facilis provident aspernatur nisi optio debitis dolorum, est eum eligendi vero aut ad necessitatibus nulla sit labore doloremque magnam! Ex molestiae, dolor tempora, ad fuga minima enim mollitia consequuntur, necessitatibus praesentium eligendi officia recusandae culpa tempore eaque quasi ullam magnam modi quidem in amet. Quod debitis error placeat, tempore quasi aliquid eaque vel facilis culpa voluptate.</p>
                </div>
              </div>
            </div> <!-- .accordion-item -->
            
            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">How much pay for 3  months?<span class="icon"></span></a>
              </h3>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel ad laborum expedita. Nostrum iure atque enim quisquam minima distinctio omnis, consequatur aliquam suscipit, quidem, esse aspernatur! Libero, excepturi animi repellendus porro impedit nihil in doloremque a quaerat enim voluptatum, perspiciatis, quas dignissimos maxime ut cum reiciendis eius dolorum voluptatem aliquam!</p>
                </div>
              </div>
            </div> <!-- .accordion-item -->

            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false" aria-controls="collapseThree">Do I need to register?  <span class="icon"></span></a>
              </h3>
              <div id="collapseThree" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel ad laborum expedita. Nostrum iure atque enim quisquam minima distinctio omnis, consequatur aliquam suscipit, quidem, esse aspernatur! Libero, excepturi animi repellendus porro impedit nihil in doloremque a quaerat enim voluptatum, perspiciatis, quas dignissimos maxime ut cum reiciendis eius dolorum voluptatem aliquam!</p>
                </div>
              </div>
            </div> <!-- .accordion-item -->

            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseFour" role="button" aria-expanded="false" aria-controls="collapseFour">Who should I contact in case of support.<span class="icon"></span></a>
              </h3>
              <div id="collapseFour" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel ad laborum expedita. Nostrum iure atque enim quisquam minima distinctio omnis, consequatur aliquam suscipit, quidem, esse aspernatur! Libero, excepturi animi repellendus porro impedit nihil in doloremque a quaerat enim voluptatum, perspiciatis, quas dignissimos maxime ut cum reiciendis eius dolorum voluptatem aliquam!</p>
                </div>
              </div>
            </div> <!-- .accordion-item -->

          </div>
          </div>
        </div>
      
      </div>
    </div>

    

    
    <div class="py-5 bg-primary">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="text-white h4 font-weihgt-normal mb-4">Subscribe Newsletter</h2>
          </div>
        </div>
        <form action="" class="row">
          <div class="col-md-9">
            <input type="text" class="form-control border-0 mb-3 mb-md-0" placeholder="Enter Your Email">
          </div>
          <div class="col-md-3">
            <input type="submit" value="Send" class="btn btn-dark btn-block" style="height: 45px;">  
          </div>
        </form>
      </div>
    </div>


    <footer class="site-footer">
      <div class="container">
        

        <div class="row">
          <div class="col-lg-9">
            <div class="row">
              <div class="col-6 col-md-3 col-lg-3 mb-5 mb-lg-0">
                <h3 class="footer-heading mb-4">For Candidates</h3>
                <ul class="list-unstyled">
                  <li><a href="#">Register</a></li>
                  <li><a href="#">Find Jobs</a></li>
                  <li><a href="#">News</a></li>
                  <li><a href="#">Search Jobs</a></li>
                  <li><a href="#">Contact</a></li>
                  <li><a href="#">Careers</a></li>
                </ul>
              </div>
              <div class="col-6 col-md-3 col-lg-3 mb-5 mb-lg-0">
                <h3 class="footer-heading mb-4">For Employers</h3>
                <ul class="list-unstyled">
                  <li><a href="#">Employer Account</a></li>
                  <li><a href="#">Clients</a></li>
                  <li><a href="#">News</a></li>
                  <li><a href="#">Find Candidates</a></li>
                  <li><a href="#">Terms &amp; Policies</a></li>
                  <li><a href="#">Careers</a></li>
                </ul>
              </div>
              <div class="col-6 col-md-3 col-lg-3 mb-5 mb-lg-0">
                <h3 class="footer-heading mb-4">Archives</h3>
                <ul class="list-unstyled">
                  <li><a href="#">January 2018</a></li>
                  <li><a href="#">February 2018</a></li>
                  <li><a href="#">March 2018</a></li>
                  <li><a href="#">April 2018</a></li>
                  <li><a href="#">May 2018</a></li>
                  <li><a href="#">June 2918</a></li>
                </ul>
              </div>
              <div class="col-6 col-md-3 col-lg-3 mb-5 mb-lg-0">
                <h3 class="footer-heading mb-4">Company</h3>
                <ul class="list-unstyled">
                  <li><a href="#">About</a></li>
                  <li><a href="#">Team</a></li>
                  <li><a href="#">Terms &amp; Policies</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <h3 class="footer-heading mb-4">Contact Info</h3>
            <ul class="list-unstyled">
              <li>
                <span class="d-block text-white">Address</span>
                New York - 2398 10 Hadson Carl Street
              </li>
              <li>
                <span class="d-block text-white">Telephone</span>
                +1 232 305 3930
              </li>
              <li>
                <span class="d-block text-white">Email</span>
                info@yourdomain.com
              </li>
            </ul>
            
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy; <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All Rights Reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  

  <script src="js/main.js"></script>
    
  </body>
</html>