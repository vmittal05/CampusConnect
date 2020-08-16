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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script>
    $(document).ready(function() {

          var trigger = $('#toggleDemo ul li a');
          container = $('#jumbonav');

          trigger.on('click',function(){

            var $this = $(this);
            target = $this.data('target');
            container.load(target);
          


    return false;
});

});
  </script>

  <script>
    $(document).ready(function() {

          var trig = $('#toggleDemoi ul li a');
          container = $('#jumbonav');

          trig.on('click',function(){

            var $this = $(this);
            target = $this.data('target');
            container.load(target);
          


    return false;
});

});
  </script>

  <script type="text/javascript">
    function go()
    {
      window.location = "loginp.php";
    }
  </script>


<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width = device-width, initial-scale = 1">
<title>Account</title>
 

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
 
<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<style type="text/css">

@media (min-width: 768px){
  .affix-content .container {
    width: 700px;
  }   

    .affix-content .container .page-header{
    margin-top: 0;
  }
  .sidebar-nav{
        position:absolute; 
        width:80%;
  }
  .affix-sidebar{
    padding-right:0; 
    font-size:small;
    padding-left: 0;
  }  
  .affix-row, .affix-container, .affix-content{
    height: 10%;
    margin-left: 0;
    margin-right: 0;    
  } 
  .affix-content{
    background-color:white; 
  } 
  .sidebar-nav .navbar .navbar-collapse {
    padding: 0;
    max-height: none;
  }
  .sidebar-nav .navbar{
    border-radius:0; 
    margin-bottom:0; 
    border:0;
  }
  .sidebar-nav .navbar ul {
    float: none;
    display: block;
  }
  .sidebar-nav .navbar li {
    float: none;
    display: block;
  }
  .sidebar-nav .navbar li a {
    padding-top: 12px;
    padding-bottom: 12px;
  }  
}






body {
  font-size: 62.5%;
  font-family: arial, sans-serif;
}
#nttLogo{
  height: 100px;
  width: 100px;
}
.jumbotron
{
  margin-top: 0px;
  
  margin-left: 100px;
  padding-left: 100px;
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
    width= 100%;
    left: 0;
    right: 0;
    position: relative;
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

#mips
{
  font-family:
}
.container
{
  position: relative;
  left: 20px;
  top: -100px;
}
#itsb
{
  position: relative;
  left:730px;
  top: -120px;
}
#yio
{
  width: 1500px;
  margin-bottom: 100px;
}
</style>
</head>
<body>

  <div class=row>
      <div class="col-lg-12 col-md-12"></div>

      <img src="poly2.jpg" height="150px" width="100%" alt="" />
      
      <h1 id="head"><img class="footimg" src="ez.png" alt="Logo"></h1>
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
      <li><form action="loginp.php" method="get" id="acclogout"><button type="submit" form="acclogout" name="logout" class="btn btn-default btn-md"><span class="glyphicon glyphicon-user"  aria-hidden="true"></span>Logout</button></li>
    </ul>
  
</nav>





<h1 id="mips">
  <?php 
  if(!isset($_SESSION['userid']))
  {
    echo '<script type="text/javascript">',
     'go();',
     '</script>';

  }
  else
  {
    echo 'Welcome'.'  '.$_SESSION['userid'];
  }
  
  ?> 
  </h1>

  <div class="row affix-row">
    <div class="col-sm-3 col-md-2 affix-sidebar">
    <div class="sidebar-nav">
  <div class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
      <span class="visible-xs navbar-brand">Sidebar menu</span>
    </div>
    <div class="navbar-collapse collapse sidebar-navbar-collapse" id="test">
      <ul  class="nav navbar-nav" id="sidenav01">
        <li class="active">
          <a href="#" data-toggle="collapse" data-target="#toggleDemo0" data-parent="#sidenav01" class="collapsed">
          <h4>
          Account Info
          <br>
          <small></small>
          </h4>
          </a>
        
        </li>
        <li>
          <a href="#" data-toggle="collapse" data-target="#toggleDemo" data-parent="#sidenav01" class="collapsed">
          <span class="glyphicon glyphicon-cloud"></span> Account Settings <span class="caret pull-right"></span>
          </a>
          <div class="collapse" id="toggleDemo" style="height: 0px;">
            <ul id="keepcol" class="nav nav-list">
              <li><a href="#" data-target="info.php">Profile info</a></li>
              <li><a href="#" data-target="editinfo.php">Edit info</a></li>
              
            </ul>
          </div>
        </li>
        
        <li>
          <a href="#" data-toggle="collapse" data-target="#toggleDemoi" data-parent="#sidenav01" class="collapsed">
          <span class="glyphicon glyphicon-cloud"></span> My AD's <span class="caret pull-right"></span>
          </a>
          <div class="collapse" id="toggleDemoi" style="height: 0px;">
            <ul id="keepcol" class="nav nav-list">
              <li><a href="#" data-target="myadsGAMES.php">Game AD's</a></li>
              <li><a href="#" data-target="myadsACC.php">Accessories AD's</a></li>
              <li><a href="#" data-target="myadsBOOKS.php">Book AD's</a></li>
              
            </ul>
          </div>
        </li>
        
      </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
  </div>
</div>



<div class="container">
    <div class="jumbotron" id="jumbonav">

      <h2>You can Change Your Account Settings By Navigating the Nav Bar on The Left!</h2>

    </div>
   

 </div>




<div class="container custom-container" id="yio">
  
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
           
          </div>
        
        
</footer>
 
 
 

 
<!-- Use downloaded version of Bootstrap -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>