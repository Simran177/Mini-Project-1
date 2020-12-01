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
  <title>Mental Health</title>
  <!--Header Link-->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!--For footer-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!--nav bar-->
  <!--<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet"> -->
    <link rel="stylesheet" href="css/dailydiet.css">
    <link rel="stylesheet" href="css/mentalHealth.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <script>
      know = {
          "How do i get connected to you":" &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp You can click on the chat icon below and get connected to us through a live platform.",
          "hello":" &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Hi there!",
          "HELLO":" &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Hi there!",
          "Are you a professional in medicine?":" &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp NO! We're not professional. We've collected informations from different websites and aligned them into one. Our aim is to provide knowledge about healthy lifestyle.",
          "who are you?":" &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp I'm one of the teammates. Here, to help you anytime.",
          "Who are you?":" &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp I'm one of the teammates. Here, to help you anytime.",
          "Okay":" &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Thanx for connecting!",
          "okay":" &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Thanx for connecting!",
          "How can i talk to you?":"You can talk to us by visiting the chat icon below. You can click it and you'll be directed to a platform where you can have live communication with us.",
          "how can i talk to you?":"You can talk to us by visiting the chat icon below. You can click it and you'll be directed to a platform where you can have live communication with us.",
          "How Can I Talk To You?":"You can talk to us by visiting the chat icon below. You can click it and you'll be directed to a platform where you can have live communication with us.",
          "HOW CAN I TALK TO YOU?":"You can talk to us by visiting the chat icon below. You can click it and you'll be directed to a platform where you can have live communication with us."
      };
      
      function talk(){
          var user=document.getElementById("userBox").value;
          document.getElementById("userBox").value="";
          document.getElementById("chatLog").innerHTML += user+"<br>";

          if(user in know){
              document.getElementById("chatLog").innerHTML += know[user]+"<br>";
          }
          else{
              document.getElementById("chatLog").innerHTML += "I don't understand <br>";
          }
      }
    </script>

    <style>
      ul li{
        list-style: none;
      }
      #chat .fa{
            /*padding: 15px;*/
            font-size: 60px;
            width: 62px;
            text-align: center;
            text-decoration: none;
            color: whitesmoke;
        }
        #chat a{
            text-decoration: none;
        }
        #chat a:hover, input[type="text"]:hover{
            opacity: 0.7;
            transition: 0.6s;
        }
        h2{
            color: white;
            text-transform: uppercase;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.6);
            background-color: teal;
            word-spacing: 2px;
        }
        #chat h2, #chat a{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        #chat input[type=text]
        {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: none;
            align-items: center;
            justify-content: center;
        }
    </style>
  
</head>
<body>
    <div id="bar">
        Mental Health Portal
      </div>
      <nav class="navigation" style="position: fixed; top: 50px; width: 100%;">
        <div class="nav-logo"><img src="images/logo.jpg" alt="_target" style="line-height: 50px;width: 40px;height: 40px; margin-right: 15px;">HEALTH HUNT</div>
        <ul class="nav-menu">
          <li><a href="homepage.php">Home</a></li>
          <li><a href="contactUs.php">Contact Us</a></li>
          <li><a href="testimonial.php">Testimonials</a></li>
          <li><a href="login.php">Login</a></li>
          <li><a href="signup.php"> Sign Up</a> </li>
          
        </ul>
        <div class="nav-toggle">
          <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
        </div>
      </nav>
      <div class="nav-overlay"></div>
      
      <script src="js/dailydiet.js"></script>
    <br><br><br>
    <div class="container">
    <h2>What is Mental health</h2>
    
    <p id="one" >Mental health includes our emotional, psychological, and social well-being. It affects how we think, feel, and act. It also helps determine how we handle stress. Mental health is important at every stage of life, from childhood and adolescence through adulthood.

        Over the course of your life, if you experience mental health problems, your thinking, mood, and behavior could be affected. Many factors contribute to mental health problems, including:</p>
        <ul>
        <li> Biological factors, such as genes or brain chemistry.</li>
        <li>Life experiences, such as trauma or abuse.</li>
        <li> History of mental health problems.</li>
        </ul>
        <img src="img/mh3.jpg" id="mh3" class="center" style="width: 60%;">

       <h2>Easy Warning Signs &nbsp; <i class="fa fa-exclamation-triangle" aria-hidden="true"></i></h2>
       <p>Not sure if you or someone you know is living with mental health problems? Experiencing one or more of the following feelings or behaviors can be an early warning sign of a problem:</p>
       
       <ul id="list0">
         

<li>Eating or sleeping too much or too little</li>
<li>Pulling away from people and usual activities</li>
<li>Having low or no energy</li>
<li>Feeling numb or like nothing matters</li>
<li>Having unexplained aches and pains</li>
<li>Feeling helpless or hopeless</li>
<li>Smoking, drinking, or using drugs more than usual</li>
<li>Feeling unusually confused, forgetful, on edge, angry, upset, worried, or scared</li>
<li>Yelling or fighting with family and friends</li>
<li>Experiencing severe mood swings that cause problems in relationships</li>
<li>Having persistent thoughts and memories you can't get out of your head</li>
       </ul>

       <h4>For People With Mental Health Problems</h4>
<p>
       If you have, or believe you may have, mental health problem, it can be helpful to talk about these issues with others. It can be scary to reach out for help, but it is often the first step to helping you heal, grow, and recover.
       
       Having a good support system and engaging with trustworthy people are key elements to successfully talking about your own mental health.</p>
       
      <h4> Build Your Support System</h4>
     <p>  Find someone - such as a parent, family member, teacher, faith leader, health care provider or other trusted individual, who:</p>
       <ul id="list">
       <li id="items"> Gives good advice when you want and ask for it; assists you in taking action that will help</li>
       <li id="items">Likes, respects, and trusts you and who you like, respect, and trust, too</li>
       <li id="items"> You the space to change, grow, make decisions, and even make mistakes</li>
       <li id="items">Listens to you and shares with you, both the good and bad times</li>
       <li id="items">Respects your need for confidentiality so you can tell him or her anything</li>
       <li id="items">Lets you freely express your feelings and emotions without judging, teasing, or criticizing</li>
       <li id="items">Works with you to figure out what to do the next time a difficult situation comes up</li>
       <li id="items">Have your best interest in mind</li>
       </ul>
      
      <h2> For Parents and Caregivers</h2>
    
<p>
        As a parent or caregiver, you want the best for your children or other dependents. You may be concerned or have questions about certain behaviors they exhibit and how to ensure they get help.</p>
        <img src="img/fam.jpg" style="width:60%;height:100px;" class="center">
        <h4>What to Do ?</h4>
<p>If you are concerned your child's behaviors, it is important to get appropriate care. You should:</p>
<ul id="list0">
<li>Talk to your child's doctor, school nurse, or another health care provider and seek further information about the behaviors or symptoms that worry you</li>
<li>Ask your child's primary care physician if your child needs further evaluation by a specialist with experience in child behavioral problems</li>
<li>Ask if your child's specialist is experienced in treating the problems you are observing</li>
<li>Talk to your medical provider about any medication and treatment plans</li>

</ul>
<h4>How to Talk About Mental Health ?</h4>
<ol style="padding: 20px;"> 
<li>Do you need help starting a conversation with your child about mental health? Try leading with these questions. Make sure you actively listen to your child's response.

<li>Can you tell me more about what is happening? How you are feeling?</li>
<li>Have you had feelings like this in the past?</li>
<li>Sometimes you need to talk to an adult about your feelings. I'm here to listen. How can I help you feel better?</li>
<li>Do you feel like you want to talk to someone else about your problem?</li>
<li>I'm worried about your safety. Can you tell me if you have thoughts about harming yourself or others?</li>
</ol>

<h4>Get Help for Your Child</h4>

<p>Seek immediate assistance if you think your child is in danger of harming themselves or others. You can call a crisis line or the National Suicide Prevention Line at &nbsp; <a  style="text-decoration: underline; color: maroon;" href="tel:7393090868">7393090868</a>&nbsp;
If your child is in need of community mental health services you can find help in your area.</p>


<!--CODE FOR CHATBOT-->
<div id="chat">
  <h2 id="chatLog">ChatBot by Health Hunt <br></h2>
  <br>
  <input type="text" name="" id="userBox" onkeydown="if(event.keyCode==13){talk()}" placeholder="Put you queries about the website here...">
  
<div class="chat">
  <h4>To attend live sessions with our experts.</h4>
  <p>Follow the steps mentioned below:</p>
  <ul id="list0" style="list-style-type: decimal;">
  <li>Go to the Navigation bar of the page. </li>
  <li>Click on Contact Us. You'll be directed to our Contact page.</li>
  <li>Fill the credentials. Make sure you've selected 'Other' in subject. In the message box, tell us why you need a live seesion and your expectations about the session.</li>
  </ul>
  <p>As soon as we get your details, we'll provide you a 'Link to join' on your mentioned email id to attend our live sessions.</p>
  <p>Come back and tap the Chat icon below. We'll be there to guide you further on your Mental Health.</p>
  <h3 style="text-align: center; color: white; font-weight: bolder;">And then talk to our specialist. Tap <i class="fa fa-hand-o-down" aria-hidden="true" style="font-size: large; margin-left: -20px; "></i></h3>
  <a href="https://app.slack.com/client/T01EL8KALEN/D01EYT38Q1X?redir=%2Fapps%2FA7FTEHPEG"><i class="fa fa-comments-o" aria-hidden="true"></i></a>
<!--END OF CHATBOT-->
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
            <li style="padding: 5px 0px;">
              <a href="homepage.php">Home</a>
            </li>
            <li style="padding: 5px 0px;">
              <a href="login.php">Log In</a>
            </li>
            <li style="padding: 5px 0px;">
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
            <li style="padding: 5px 0px;">
              <a href="contact.php">Contact Us</a>
            </li>
            <li style="padding: 5px 0px;">
              <a href="testimonial.php">Testimonials</a>
            </li>
            <li style="padding: 5px 0px;">
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
