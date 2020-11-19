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
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        /*Nav Bar Styling*/

        .header{
            width: 100%;
            height: 70px;
            background-color: #131418;
            padding: 0 20px;
            font-family: Arial, Helvetica, sans-serif;
            position: fixed;
            top: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            
           
        }
        .header h2{
            line-height: 70px;
            color: white;
            letter-spacing: 1px;
        }
        .header img{
            width: 50px;
            height:50px;
            border-radius: 50%;
        }
        #check{
            position: absolute;
            visibility: hidden;
            
        }
        .show-btn, .hide-btn{
            display: block;
            font-size: 30px;
            color: white;
            line-height: 70px;
            transition: .4s;
            /*position: absolute;*/
            position: fixed;
            left: 20px;
            top: 2px;
        }
        .hide-btn{
            opacity: 0;
        }
        .menu ul li a:hover{
            
            border-left: 10px solid white;
        }
        .menu li i:hover, .social-sites i:hover , .show-btn:hover, .hide-btn:hover{
            color: skyblue;
        }
        #check:checked ~ .menu{
            left: 0;
        }
        #check:checked ~ .show-btn{
            opacity: 0;
        }
        #check:checked ~ .hide-btn{
            opacity: 1;
        }

        #check:checked ~ .testimonials{
            width: 80%;
        }
        .menu{
            position: fixed;
            top: 70px;
            left: -100%;          /*slider-effect*/
            width: 20%;
            height: 100%;
            background-color:#333;
            text-align: left;
            /*padding: 10px 0px;*/
            transition: .7s;
            line-height: normal;
            z-index: 200;
        }
            
        .menu li{
            display: block;
            line-height: 60px;
            border-bottom: 1px solid grey;
           
        }
        .menu li a{
            display: block;
            text-decoration: none;
            color: white;
            font-size: 18px;
            text-transform: uppercase;
            padding: 0px 20px;
            transition: .4s;
        }
        .menu li i{
            margin-right: 15px;
        }
        .social-sites{
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            font-size: 30px;
            border-bottom: 2px solid rgba(255, 255, 255, .1);
            border-top: 2px solid rgba(255, 255, 255, .1);
            padding: 15px 25px;
            margin-top: 220px;
        }

        i{
            font-size: 30px;
            color: white;
        }

        /*#container styling*/
        .jumbotron {
            background-color: #048ac9;
            color: #FFF;
            border-radius: 0px;
        }
        .jumbotron-sm { 
            padding-top: 24px;
            padding-bottom: 24px; 
        }
        .jumbotron small {
            color: #FFF;
        }
        .h1 small {
            font-size: 24px;
        }

        /*Footer Styling*/
        footer{
            position: relative;
            z-index: -100;
            
        }

        .container2 .fa:hover{
            opacity: 0.7;
        }
        .container2 .fa{
            padding: 15px;
            font-size: 30px;
            width: 62px;
            text-align: center;
            text-decoration: none;
            margin: 5px 2px;
            border-radius: 50%;
        }


        .container2 .fa-facebook {
            background: #3B5998;
            color: white;
        }

        .container2 .fa-linkedin {
            background: #007bb5;
            color: white;
        }

        .container2 .fa-instagram {
            background: #91132e;
            color: white;
        }

        .container2 .fa-twitter {
            background: #55ACEE;
            color: white;
        }

        .container2 .fa-google {
            background: #dd4b39;
            color: white;
        }
        .container3 a:hover{
            opacity: 0.7;
        }
        .list-unstyled li a{
            color: white;
        }
        hr{
            opacity: .3;
            
        }
        @media(max-width: 768px) {
            .menu{
                width: 100%;
                text-align: center;
            }
            .menu .social-sites{
                margin-top: 0px;
                border-bottom: none;
                border-top: none;
                
            }
            .header h2{
                display: none;
            }
        }
        /*Contact purpose icons*/
        a .fa-envelope, a .fa-volume-control-phone{
            display: block;
            padding: 10px;
            font-size: 30px;
            line-height: 70px;
            
            transition: .4s;
            /*position: absolute;*/
            position: fixed;
            right: 20px;
            top: -10px;
        }
        a .fa-envelope{
            right: 60px;
        }
        .fa:hover{
            color: skyblue;
            transition: 0.75s;
        }
        
    </style>
</head>
<body>
    <nav>
        <div class="header" style="z-index: 100;">
            <img src="images/logo.jpg" alt="_blank">
            <h2>HEALTH HUNT</h2>
            <a href="mailto: aishwarya.singh_cs18@gla.ac.in"><i class="fa fa-envelope"></i></a>
            <a href="tel: 8953098700"><i class="fa fa-volume-control-phone"></i></a>
        </div>
        
            <input type="checkbox" id="check">
            <label for="check" class="show-btn" style="z-index: 200;">
                <i class="fa fa-bars" ></i>
            </label>
            <label for="check" class="hide-btn" style="z-index: 200;">
                <i class="fa fa-times"></i>
            </label>
            <div class="menu">
            <ul>
                <li ><a href="#"><i class="fa fa-home"></i>Home</a></li>
              
                <li><a href="#"><i class="fa fa-user"></i>About</a></li>
                
                <li><a href="#"><i class="fa fa-tasks"></i>Services</a></li>
                
                <li><a href="#"><i class="fa fa-rss"></i>Blog</a></li>
                
                <li><a href="#"><i class="fa fa-id-card"></i>Contact</a></li>
                
                <div class="social-sites">
                    
                        <a href="#"><i class="fa fa-facebook-square"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-youtube-square"></i></a>
                    
                </div>
            </ul>
        </div>
    </nav>    
    <div class="jumbotron jumbotron-sm" style="margin-top: 60px; display: flex;" >
    <div class="container">
        <div class="row" style="display: flex;">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                    Contact us :)
                    <br><small>Feel free to get connected.</small></h1>

                  <?php 
            $msg = "";
        
            if(isset($_GET['error']))
            {
               $msg = "Please fill in the blanks";
               echo '<div class="alert alert-danger">'.$msg.'</div>';
            }
           
                  ?>
                  
            </div>
        </div>
    </div>
       
    </div>
    
    <!--Main Elememts-->
    <div class="container">
        <div class="row">
            <div class="col-md-8" >
                <div class="well well-sm">
                    <form style="z-index: 100;" action="contactScript.php" method="post">
                      <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">
                                    Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter name"  name="name" />
                            </div>
                            <div class="form-group">
                                <label for="email">
                                    Email Address</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                    </span>
                                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email_id"/></div>
                            </div>
                            <div class="form-group">
                                <label for="subject">
                                    Subject</label>
                                <select id="subject" name="subject" class="form-control" name="subject">
                                    <option value="na" selected="">Choose One:</option>
                                    <option value="symptoms">Symptoms</option>
                                    
                                    <option value="service">General Customer Service</option>
                                    <option value="suggestions">Suggestions</option>
                                    <!--<option value="product">Product Support</option>-->
                                    <option value="other">Other</option>
                                    
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">
                                    Message</label>
                                <textarea name="message" id="message" class="form-control" rows="9" cols="25"  name="message"
                                    placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary pull-right" id="btnContactUs" name="send">
                                Send Message</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4" style="margin-top: 25px;">
               
                <div class="mapouter"><div class="gmap_canvas"><iframe width="332" height="240" id="gmap_canvas" src="https://maps.google.com/maps?q=mathura%2C%20India&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net">google map html embed</a></div><style>.mapouter{position:relative;text-align:right;height:240px;width:332px;}.gmap_canvas {overflow:hidden;background:none!important;height:240px;width:332px;}</style></div>
            
                 <form style="color: rgb(29, 28, 28);">
                <legend><span class="glyphicon glyphicon-globe"></span> Our office</legend>
                <address>
                    <!--<strong>Twitter, Inc.</strong><br>-->
                    <strong> GLA University</strong><br>
                    Mathura, India<br>
                    <abbr title="Phone">
                        P:</abbr>
                        91- 10000000
                </address>
                <address>
                    <strong>Tours & Travels Team</strong><br>
                    <a href="mailto: aishwarya.singh_cs18@gla.ac.in">Mail us here!</a>
                </address>
                </form>
            
            </div>
        </div>
    </div>



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
              <a href="contactUs.php">Contact Us</a>
            </li>
            <li>
              <a href="testimonials3.php">Testimonials</a>
            </li>
            <li>
              <a href="imageGallery.php">Gallery</a>
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
    <div class="footer-copyright text-center py-3" style="color: grey; background-color: rgb(29, 28, 28); margin-bottom: -10px; height: 60px; display: flex; align-content: center; justify-content: center; line-height: 30px;">© 2020 Copyright:
      <a href="https://healthhunt.com/" style="color: white">HealthHunt.com</a>
    </div>
  </footer>
  <!-- Footer -->
    
</body>
</html>
