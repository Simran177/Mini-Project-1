<?php
session_start();
if(!isset($_SESSION['username']))   //if user presses back or log out
    header('location:login.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!--Google photos of customers-->
    <link rel="stylesheet" href=" https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> 

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <style>
      .slideshowContainer {
        position: relative;
        overflow: hidden;
        margin: 50px 0 75px;
        width: 80%;
        height: 500px;
        /*width: 100%;
        height: 100%;*/
        margin: auto;
       
      }

      .imageSlides {
        position: absolute;
        /*left: 50%;
        top: 50%;*/
        transform: translate(-50%, -50%);
        /*min-width: 100%;
        min-height: 100%;*/
        /*width: 3200px;
        height: 1000px;*/
        opacity: 0;
        transition: opacity 1s ease-in-out;
        z-index: -1;
        background-size: contain;
      }

      /* add 'visible' class via Javascript */
      .visible {
        opacity: 1;
      }

      .slideshowArrow {
        font-size: 7em;
        color: rgba(255, 255, 255, 0.5);
        cursor: pointer;
        transition: opacity 0.2s ease-in-out;
      }

      .slideshowArrow:hover {
        opacity: 0.75;
      }

      #leftArrow {
        position: absolute;
        left: 4%;
        top: 50%;
        transform: translate(-50%, -50%);
      }

      #rightArrow {
        position: absolute;
        right: 4%;
        top: 50%;
        transform: translate(50%, -50%);
      }

      .slideshowCircles {
        position: absolute;
        bottom: 2%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
      }

      .circle {
        display: inline-block;
        margin-left: 3px;
        margin-right: 3px;
        width: 15px;
        height: 15px;
        border-radius: 50%;
        border: solid 2px rgba(255, 255, 255, 0.5);
        transition: 1s ease-in-out;
      }

      .dot {
        background-color: rgba(255, 255, 255, 0.7);
        border: solid 2px rgba(255, 255, 255, 0.5);
      }

      
      /* NAV */
      ol, ul {
        list-style: none;
      }
      nav.navigation{
        position:relative;
        height:50px;
        background-color:#3c3c3c;
        z-index:200;
      }
      .nav-logo{
        float:left;
        height:50px;
        line-height:50px;
        padding:0 20px;
        background-color:#11999e;
        color:#ffffff;
        font-weight:700;
        text-transform:uppercase;
      }
      ul.nav-menu, ul.nav-menu li, ul.nav-menu li a{
        float:left;
      }
      ul.nav-menu{
        padding-left:10px;
        
      }
      ul.nav-menu li a{
        height:50px;
        line-height:50px;
        padding:0 10px;
        color:#ffffff;
        text-decoration:none;
        -webkit-transition-duration: 0.3s;
        -o-transition-duration: 0.3s;
        transition-duration: 0.3s;
      }
      ul.nav-menu li a:hover{
        color:#6decb9;
      }
      .nav-toggle{
        display:none;

        position:absolute;
        top:0;
        right:0;
        width:50px;
        height:50px;
        background-color:#11999e;
        cursor:pointer;
      }
      span.icon-bar{
        position:absolute;
        right:12px;
        display:block;
        width:26px;
        height:2px;
        background-color:#ffffff;
        -webkit-transition-duration: 0.3s;
        -o-transition-duration: 0.3s;
        transition-duration: 0.3s;
      }
      .icon-bar:nth-child(1){
      top:17px;
      }
      .icon-bar:nth-child(2){
      top:24px;
      }
      .icon-bar:nth-child(3){
      top:31px;
      }
      .nav-overlay{
        position:absolute;
        top:0;
        right:0;
        bottom:0;
        left:0;
        background-color:rgba(0,0,0,0.5);
        z-index:1;
        opacity:0;
        visibility:hidden;
        -webkit-transition-duration: 0.3s;
        -o-transition-duration: 0.3s;
        transition-duration: 0.3s;
      }
      .nav-overlay.active{
        opacity:1;
        visibility:visible;
      }

      /* ICON BARS ANIMATION */

      .nav-toggle.active .icon-bar:nth-child(1){
        top:24px;
        -webkit-transform: rotate(45deg);
        -moz-transform: rotate(45deg);
        transform: rotate(45deg);
      }
      .nav-toggle.active .icon-bar:nth-child(2){
        width:0;
      }
      .nav-toggle.active .icon-bar:nth-child(3){
        top:24px;
        -webkit-transform: rotate(-45deg);
        -moz-transform: rotate(-45deg);
        transform: rotate(-45deg);
      }
      @media screen and (max-width:767px){
        ul.nav-menu{
            position:absolute;
            top:50px;
            width:100%;
            height:0;
            padding:0;
            overflow:hidden;
        }
        ul.nav-menu.active{
            height:auto;
        }
        ul.nav-menu li{
            width:100%;
        }
        ul.nav-menu li a{
            width:100%;
            padding:0;
            text-align:center;
            background-color:#2c2c2c;
        }
        ul.nav-menu li a:hover{
            background-color:#1c1c1c;
        }
        .nav-toggle{
            display:block;
        }
      }
      @media screen and (min-width:768px){
        .nav-overlay.active{
            visibility:hidden;
            opacity:0;
        }
        
      }
 
    </style>


    
</head>
<body>
    
    <header>
        <div id="bar">
            Information about Health Hunt.
        </div>

        <nav class="navigation" style="position: fixed; top: 50px; width: 100%;">
          <div class="nav-logo"><img src="images/logo.jpg" alt="_target" style="line-height: 50px;width: 40px;height: 40px; margin-right: 15px;">HEALTH HUNT</div>
          <ul class="nav-menu">
            <li><a href="homepage.php">Home</a></li>
            <li><a href="contactUs.php">Contact Us</a></li>
            <li><a href="testimonial.php">Testimonials</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="signup.php"> Sign Up</a> </li>
            <li><a href="logout.php">Logout</a></li>
            
          </ul>
          <div class="nav-toggle">
            <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
          </div>
        </nav>
        <div class="nav-overlay"></div>
        
        <script src="js/dailydiet.js"></script>
      <br>
    <div class="container">
    <h2 class="text-center text-success" style="margin-top: 120px; font-weight: bolder">Welcome <?php echo $_SESSION['username'] ?></h2>
        <!--Different blocks to reach somewhere-->
        <div id="jumpbox">
        
            <a href="diagnosis.php" class="jump" id="j1">Diagnosis & Conditions</a>
            
            <a href="dailydiet.php" class="jump" id="j3">Daily Diet</a>
            <a href="exercises.php" class="jump" id="j4">Yoga & Exercises</a>
            <a href="mentalHealth.php" class="jump" id="j5">Mental Health Portal</a>
            
        </div>
    </header>
    
    <div class="container" id="slides">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner center">
      <div class="item active">
          <img src="img/jesse-orrico-Us3AQvyOP-o-unsplash.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
          <img src="img/johnny-mcclung-uDM99xirqI4-unsplash.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
          <img src="img/fabian-moller-gI7zgb80QWY-unsplash.jpg" alt="New york" style="width:100%;">
      </div>
        
       <div class="item">
           <img src="img/chander-r-AtfA8NDgpKA-unsplash.jpg" alt="New york" style="width:100%;">
      </div>
        
      <div class="item">
          <img src="img/ola-mishchenko-VRB1LJoTZ6w-unsplash.jpg" alt="New york" style="width:100%;">
      </div>
        
      <div class="item">
          <img src="img/priscilla-du-preez-LxEsi17Au6U-unsplash.jpg" alt="New york" style="width:100%;">
      </div>
      
      <div class="item">
          <img src="img/patrick-hendry-w5SgojGZooI-unsplash.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

    <br><br><br>

    <section>
      <div class="card-columns" style="width: 80%; display: flex;margin: auto;">
        <div class="card bg-primary" id="c1">
          <div class="card-body text-center" >
            <h2>About the portal</h2><br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus porro, aliquam molestias voluptatem repellendus asperiores, culpa omnis deserunt minus laborum quidem amet reprehenderit facilis impedit facere quasi iste. Officiis, vitae!</p>
          </div>
        </div>
        <div class="card bg-warning" id="c2">
          <div class="card-body text-center">
            <h2>Who will guide you?</h2><br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus porro, aliquam molestias voluptatem repellendus asperiores, culpa omnis deserunt minus laborum quidem amet reprehenderit facilis impedit facere quasi iste. Officiis, vitae!</p>
          </div>
        </div>
        <div class="card bg-success" id="c3">
          <div class="card-body text-center">
            <h2>What is Health Hunt?</h2><br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus porro, aliquam molestias voluptatem repellendus asperiores, culpa omnis deserunt minus laborum quidem amet reprehenderit facilis impedit facere quasi iste. Officiis, vitae!</p>
          </div>
        </div>
      </div> 
    </section>
    <br><br>

    <div id="head4">
        <h2>What you'll find in the Portal</h2>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur ipsum pariatur delectus ratione cumque sequi ullam, suscipit, labore accusamus obcaecati perspiciatis corrupti libero. Saepe architecto porro iure repellendus, quasi, fuga atque amet nam repudiandae rem suscipit, perferendis laboriosam officia id ratione sequi ad illo velit ab laborum incidunt. Corrupti, tenetur?
        </p>
        <a href="signup.php">Sign In to get connected with our expert.</a>
        <p style="text-align: center;"><b> Your identity is safe with us!</b></p>
    </div>
    
    <br><br>

    <div class="box">
        <h3>The Health Hunt Portal</h3>
        <br>
        <ul>
            <li>
                <h5><b>Vision:</b></h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, pariatur. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam sit non illum fuga excepturi itaque nam voluptates consectetur, ullam alias a laboriosam. Temporibus quaerat eaque soluta assumenda, porro, in ipsa ad alias excepturi ab cupiditate aut! Voluptates ullam numquam sed?</p>
            </li>
            <li>
                <h5><b>Mision:</b></h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, pariatur Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error consequuntur, incidunt deserunt et culpa eos provident repellendus enim dolor, rerum dolore. Error vel eos temporibus quasi exercitationem placeat est, ut ex rerum sed assumenda repellendus voluptas. Quidem, iure? Illum, deserunt!</p>
            </li>
            <li>
                <h5><b>Long Range Goal:</b></h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, pariatur. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam doloribus sunt sit, asperiores inventore autem odit voluptates recusandae eum quibusdam beatae distinctio dolorem quisquam! Laboriosam dolorem ab dolor optio dolorum aut veniam, nihil voluptatum! Fugit sunt deserunt recusandae fugiat maiores.</p>
            </li>
        </ul>
    </div>

    <!--Customer Reviews-->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                    <!-- Carousel Slides / Quotes -->
                    <div class="carousel-inner text-center">
                        <!-- Quote 1 -->
                        <div class="item active">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <p style="color: black;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. !</p>
                                        <small>Someone famous</small>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <!-- Quote 2 -->
                        <div class="item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <p style="color: black;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                        <small>Someone famous</small>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <!-- Quote 3 -->
                        <div class="item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <p style="color: black;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. .</p>
                                        <small>Someone famous</small>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                    </div>
                    <!-- Bottom Carousel Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-responsive " src="https://s3.amazonaws.com/uifaces/faces/twitter/mantia/128.jpg" alt="">
                        </li>
                        <li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/adhamdannaway/128.jpg" alt="">
                        </li>
                        <li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg" alt="">
                        </li>
                    </ol>

                    <!-- Carousel Buttons Next/Prev -->
                    <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                    <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
        <a class="btn btn-primary" href="contact.php" style="font-size: 18px;">
            Add your valuable reviews!!<i class="fa fa-arrow-right" style="margin-left: 5px;"></i></a>
    </div>
  </div>
    <br><br><br>

    <!--Footer Code-->

   <footer class="page-footer font-small stylish-color-dark pt-4" style="float: left; text-align: center; width: 100vw; background-color: #131418">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">
  
      <!-- Grid row -->
      <div class="row">
  
        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3" style="color: white; text-align: left;">
  
          <!-- Content -->
          <h3 class="text-uppercase" >Health Hunt</h3>
          <p style="color:white;">We do our best to let you reach & experience each corner of the world.</p>
  
        </div>
        <!-- Grid column -->
        
        <!--<hr class="clearfix w-100 d-md-none pb-3">-->
  
        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3" style="color: white; text-align: left;">
  
          <!-- Links -->
          <h5 class="text-uppercase">Links</h5>
  
          <ul class="list-unstyled">
            <li>
              <a href="home.php">Home</a>
            </li>
            <li>
              <a href="login.php">Log In</a>
            </li>
            <li>
              <a href="signup.php">Sign Up</a>
            </li>
            
          </ul>
  
        </div>
        <!-- Grid column -->
  
        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3" style="color: white; text-align: left;">
  
          <!-- Links -->
          <h5 class="text-uppercase" >Links</h5>
  
          <ul class="list-unstyled" >
            <li>
              <a href="contact.php">Contact Us</a>
            </li>
            <li>
              <a href="testimonial.php">Testimonials</a>
            </li>
            <li>
              <a href="index.php">Health Hunt</a>
            </li>
          </ul>
  
        </div>
        <!-- Grid column -->
  
      </div>
      <!-- Grid row -->
  
    </div>
    <!-- Footer Links -->
  
  <hr noshade>
  <div class="container3">
  
    <!-- Call to action -->
    <ul class="list-unstyled list-inline text-center py-2">
      <li class="list-inline-item">
        <h3 class="mb-1" style="color: white;">Register for free</h3>
      </li>
      <li class="list-inline-item" style="color: white;">
        <a href="signup.php" class="btn btn-outline-white btn-rounded" style="color: white; border-radius: 20px; padding: 8px 20px; background-color: rgb(253, 63, 5);">
            Sign up</a>
            /
            <strong><a href="login.php" style="color:rgb(253, 63, 5) ; font: lighter; letter-spacing: 1.5px;">Login</a></strong>
  
      </li>
    </ul>
    <!-- Call to action -->
  
  </div>
  
  
  <hr noshade>
    <div class="container2">
  
     
      <ul class="list-unstyled list-inline text-center">
        <li class="list-inline-item" >
          <a class="btn-floating btn-fb mx-1" href="https://www.facebook.com/" >
            <i class="fa fa-facebook"> </i>
          </a>
        </li>
  
        <li class="list-inline-item">
          <a class="btn-floating btn- mx-1" href="https://www.twitter.com/">
            <i class="fa fa-twitter"> </i>
          </a>
        </li>
  
        <li class="list-inline-item">
          <a class="btn-floating btn- mx-1" href="https://www.google.com/">
            <i class="fa fa-google"> </i>
          </a>
        </li>
  
        <li class="list-inline-item">
          <a class="btn-floating btn-in mx-1" href="https://www.instagram.com/">
            <i class="fa fa-instagram" > </i>
          </a>
        </li>
      
       
        <li class="list-inline-item">
          <a class="btn-floating btn- mx-1" href="https://www.linkedin.com/">
            <i class="fa fa-linkedin"> </i>
          </a>
        </li>    
      </ul>
    </div> 
  
     
       <!-- Copyright -->
    <div class="footer-copyright text-center py-3" style="color: grey; background-color: rgb(29, 28, 28); margin-bottom: -10px; height: 60px; display: flex; align-content: center; justify-content: center; line-height: 40px;">© 2020 Copyright:
      <a href="https://healthhunt.com/" style="color: white">HealthHunt.com</a>
    </div>
  </footer>
  <!-- Footer -->



    
    
</body>
</html>
