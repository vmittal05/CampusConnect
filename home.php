<?php
error_reporting(0);
ini_set('display_errors', 0);
  session_start();
  $Log_vis = "";
  $Sign_vis = "";
  $Sign_target="";
  $Log_word="";
  $Req_post="";

if($_SESSION['userid'] ==NULL)
{
  $Sign_vis = "Sign Up";
  $Sign_target="Signup.php";
  $Log_vis = "Login";
  $Log_word="";
  
}
else
{
  $Sign_vis = "My Account";
  $Sign_target="Account.php";
  $Log_vis = "Logout";
  $Log_word="logout";
  $Req_post="<li><a href='request.php' id='rather'><span class='glyphicon glyphicon-camera'></span>&nbspPost An AD</a></li>";
}
?>

<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width = device-width, initial-scale = 1">
<title>HOME PAGE</title>
 

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
 
<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<style type="text/css">



body {
  font-size: 62.5%;
  font-family: arial, sans-serif;
}
#nttLogo{
  height: 100px;
  width: 100px;
}
#websiteTitle{
  font-size: 10em;
  vertical-align: middle;
  font-family: 'Pacifico', cursive;
  padding-left: 15px;
  color: #191970;
}
#websiteSlogan{
  font-size: 5.4em;
}
/* Carousel Styling */
.slide1{
  background-image: url('bkgrnd1.jpg');
  height: 500px;
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
}
.slide2{
  background-image: url('bkgrnd2.jpg');
  height: 500px;
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
}
.slide3{
  background-image: url('bkgrnd3.jpg');
  height: 500px;
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
}
.carousel-caption h1{
  font-size: 5.4em;
  font-family: 'Pacifico', cursive;
  padding-bottom: .4em;
}
.carousel-caption p{
  font-size: 2em;
}
#rather
{
  font-size: 3em;
}
#nttLogo{
  height: 200px;
  width: 200px;
  margin-right: 52px;
}
.container.custom-container {
      width: 1800px;
      padding:10 10px;
    }
#head
{ 
  position: absolute;
  text-align: center;
  font-family: 'Bebas Neue';
  font-size: 8em;
  margin-top: 1px;
  top: 0px; 
   left: 0; 
   width: 100%;
  color: white;
}
.image
{
  position: relative;
  margin-top: 0px;

}
.page-header
{
  margin-top: 0px;
}
.carousel
{
  margin-top: 0px;
  padding-top: 0px;
}
.navbar
{
  margin-bottom: 0px;
  margin-top: 0px;
}
.copyrights{
margin-top:0px;
}

footer.container-fluid.text-center.foot {
    background: #383838;
}

.dark-line{
border-top: 1px solid #525252;
}

.white-txt{
color: #FFF;
font-size: 4em;
}


a.link {
    color: #008acc;
    border: 1px #008acc solid;
    padding: 5px;
    text-decoration: none;
    font-size: 3em;
}

a.link:hover {
background: #008acc;
    color: #383838;
}

.footimg{
width: 15rem;
margin-top: 40px;
}

.footimge{
width: 10rem;
}
</style>
</head>
<body>

  <div class=row>
      <div class="col-lg-12 col-md-12"></div>

      <img src="poly2.jpg" height="150px" width="100%" alt="" />
      
      <h1 id="head">
      <a href="home.html">
        <img class="footimg" src="ez.png" alt="Logo">
      </a>
    </h1>
  </div>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    </div>
    <ul class="nav navbar-nav">
      <li><a href="Home.php" id="rather">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" id="rather" data-toggle="dropdown" href="#">Browse<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="Acce.php">Accessories</a></li>
          <li><a href="Games.php">Games</a></li>
          <li><a href="books.php">Books</a></li>
        </ul>
      </li>
      
      
    </ul>
     <form class="navbar-form navbar-left">
      
    </form>
    <ul class="nav navbar-nav navbar-right">
      
      <?php echo $Req_post ?>
      <li><a href="<?php echo $Sign_target ?>" id="rather"><span class="glyphicon glyphicon-user"></span> <?php echo $Sign_vis ?></a></li>
     <li><form action="loginp.php" method="get" id="acclogout"><button type="submit" form="acclogout" name="<?php echo  $Log_word ?>" class="btn btn-default btn-md"><span class="glyphicon glyphicon-user"  aria-hidden="true"></span><?php echo $Log_vis ?></button></li>
    </ul>
  
</nav>
  




<div id="theCarousel" class="carousel slide" data-ride="carousel">
 
  <!-- Define how many slides to put in the carousel -->
  <ol class="carousel-indicators">
    <li data-target="#theCarousel" data-slide-to="0" class="active"> </li >
    <li data-target="#theCarousel" data-slide-to="1"> </li>
    <li data-target ="#theCarousel" data-slide-to="2"> </li>
  </ol >
 
  <!-- Define the text to place over the image -->
  <div class="carousel-inner">
    <div class="item active" >
    <div class ="slide1"></div>
    <div class="carousel-caption">
      <h1>Great Offers</h1>
      <p>Choose from many different Categories</p>
      <p><a href="#" class="btn btn-primary btn-sm">Sign up Now</a></p>
    </div>
  </div>
  <div class="item">
  <div class="slide2"></div>
  <div class="carousel-caption">
    <h1>Request your Favourite Accessories</h1>
    <p>Exchange is also Applicable</p>
  </div>
  </div>
  <div class="item">
  <div class="slide3"></div>
  <div class="carousel-caption">
  <h1>Get Latest Games and Softwares</h1>
  <p>And they are All Free!</p>
  </div>
  </div>
  </div>
 
  <!-- Set the actions to take when the arrows are clicked -->
  <a class="left carousel-control" href="#theCarousel" data-slide="prev">
  <span class="glyphicon glyphicon-chevron-left"> </span>
  </a>
  <a class="right carousel-control" href="#theCarousel" data-slide="next">
  <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
  </div>



  <div class="container">
    
    <div class="jumbotron">
    <h1>Intro of Project</h1>
    <p id="rather">This project is based on the concept of Multi user Interaction and uses components of JavaScript, HTML, Bootstrap, PHP, CSS and SQL language to create this Website. The Aim of this Project is to provide the students of our college a means to trade or sell items on this website such as books, software, accessories, etc. by means of a user-friendly interface. It will make use of JavaScript and CSS to create an interactive web page along with PHP to retrieve or store any user given data from our SQL based server. 
    </p>
    <img src="phplogo.png" id="nttLogo" alt="PHP Logo">

    <img src="bootstrap-logo.png" id="nttLogo" alt="Bootstrap Logo">
    <img src="JavaScript.png" id="nttLogo" alt="JS Logo">
    <img src="logo-mysql.png" id="nttLogo" alt="Mysql Logo">
  </div>

  </div>
 
 <div class="container">
    <div class="jumbotron">

      <img src="stepsv3.jpg" width="1650px" class="img-responsive img-rounded">

    </div>
   

 </div>
  

<footer class="container-fluid text-center foot">
        
        <div class="copyrights">
            <p class="white-txt">
                <br><br>
                <img class="footimge" src="ez.png" alt="Logo">
            </p>
            <hr class="dark-line">
            <a class="link" href="#">Contact Us</a>
            <a class="link" href="#">Privacy Policy</a>
            <a class="link" href="#">Terms & Conditions</a>
            <br><br>
            <p class="white-txt small">
                Copyright © 2017 EZtrade Inc. All rights reserved.
            </p>
          </div>
        
</footer>
 
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 
<!-- Use downloaded version of Bootstrap -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>