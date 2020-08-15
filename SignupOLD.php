<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width = device-width, initial-scale = 1">
<title>Signup</title>
 

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
 
<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<style type="text/css">

.jumbotron
{
  align-items: left;
  align-content: left;
  left: 0px;
}

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
}

.footimge{
width: 10rem;
}

#lefts
{
  margin-left: 0px;
  left: 0px;
}
#myTable
{
  width: 10px;
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
          <li><a href="#">Software</a></li>
          <li><a href="#">Media</a></li>
          <li><a href="Games.php">Games</a></li>
          <li><a href="books.php">Books</a></li>
        </ul>
      </li>
      
      
    </ul>
     <form class="navbar-form navbar-left">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search">
        <div class="input-group-btn">
          <button class="btn btn-default btn-md" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#" id="rather">About us</a></li>
      <li><a href="loginp.php" id="rather"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  
</nav>


<div class="container">
  
      <div class="jumbotron">

        <h1 align="center">Signup</h1>
        <br><br><br>
        

          <form action="<?php echo htmlspecialchars($_SERVER['PHP SELF']);?>" method="POST" align="center">
          <div  class="input-group input-group-lg col-lg-6 col-md-offset-3" width > 
          <span  class="input-group-addon" id="myTable">Name:</span>
          <input  type="text" name="user" class="form-control" placeholder="Enter Name"> 
          </div><br>
          <div  class="input-group input-group-lg col-lg-6 col-md-offset-3" width > 
          <span  class="input-group-addon" id="myTable">User id:</span>
          <input  type="text" name="user" class="form-control" placeholder="Enter Username"> 
          </div><br>
          <div class="input-group input-group-lg col-lg-6 col-md-offset-3">
          <span class="input-group-addon" id="myTable">Password:</span>
          <input type="text" name="pass" class="form-control" placeholder="Enter Password"> 
          </div><br>
          <div class="input-group input-group-lg col-lg-6 col-md-offset-3">
          <span class="input-group-addon">Repeat Password:</span>
          <input type="text" name="pass" class="form-control" placeholder="Enter Password"> 
          </div><br>
          <div class="input-group input-group-lg col-lg-6 col-md-offset-3">
          <span class="input-group-addon">Email:</span>
          <input type="text" name="pass" class="form-control" placeholder="Eg : abcd@example.com"> 
          </div><br>
          <div class="input-group input-group-lg col-lg-6 col-md-offset-3">
          <span class="input-group-addon">Mobile Number:</span>
          <input type="text" name="pass" class="form-control" placeholder="Enter Mobile No."> 
          </div><br>
          
          <p>Are you a student of :</p>
          <div class="input-group input-group-lg col-lg-6 col-md-offset-3">
            
            <span class="input-group-addon">
              <span>JIIT 62</span>
                <input type="radio" aria-label="Checkbox for following text input" value="62" name="branch">
                <span> &nbsp   or  &nbsp   </span>
                <span>JIIT 128</span>
                <input type="radio" aria-label="Checkbox for following text input" value="128" name="branch">
                
            </span>

          </div>
          <div class="input-group input-group-lg col-lg-6 col-md-offset-3">
          <span class="input-group-addon">Batch:</span>
          <input type="text" name="pass" class="form-control" placeholder="Eg : Bxx"> 
          </div><br>
          <div class="input-group input-group-lg col-lg-6 col-md-offset-3">
          <span class="input-group-addon">Enrollment No.:</span>
          <input type="text" name="pass" class="form-control" placeholder="Eg : 1510xxxx"> 
          </div><br>
          <br>
          <button class="btn btn-lg btn-warning" type="submit">Signup</button>
          </form>

      

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
