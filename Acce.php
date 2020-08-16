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
$servername = "localhost";
  $username = "root";
  $pass = "";
  $dbname = "eztrade";

  $conn = new mysqli($servername,$username,$pass,$dbname);

$test="rrrr";
  $Amodel="";
  $Aprice="";
  $Acond="";
  $Aimgpath="";
  $Abrand="";
    $sql = "SELECT model,price,cond,imgpath,brand FROM accessories";
  $result = $conn->query($sql);
?>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width = device-width, initial-scale = 1">
<title>Accesories</title>
 

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
  
      width: 1000px;
      padding:10 10px;
      
      
      
    }

.vertical-divider {
  position: absolute;
  
  top: 25%;
  left: 20%;
  margin: 0;
  padding: 0;
  width: auto;
  height: 80%;
  line-height: 30%;
  text-align:center;
  text-transform: uppercase;
  transform: translateX(-50%);
}

.vertical-divider:before, 
.vertical-divider:after {
  position: absolute;
  left: 50%;
  content: '';
  
  border-left: 1px solid rgba(34,36,38,.15);
  border-right: 1px solid rgba(255,255,255,.1);
  width: 0;
  height: calc(100% - 1rem);
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


.footimgedddd
{
  margin-top: 13px;

}

p.block {
    display:block;
    margin-left: 220px;


}
#new
{ color :#3366ff;
  font-size: 6em;
  font-family: 'Bebas Neue';
}
#price
{
  color :#33cccc;
  font-size: 3em;
  margin-left: 820px;
  font-family: 'Bebas Neue';
}
#pricereal
{
  color :#cc6600;
  font-size: 4em;
  margin-left: 840px;
  font-family: 'Bebas Neue';
}
#son
{ color :#3366ff;
  font-size: 3em;
  font-family: 'Bebas Neue';
}
#itsb
{
  margin-left: 600px;

}
#desc
{
  position: relative; 
  font-family: 'arial';
  font-size: 3em;
  margin-left: 210px;
  top: -130px;
  left: 8px;


}
#cond
{
  font-size: 3em;
  font-family: 'arial';
}
#sheep
{
  float: left;
}
#leftnav
{
  font-family: 'arial';
  font-size: 3em;
}
#wer
{
  color: #6666ff
}
#ser
{
  color: #cc9900;
}
.rating
{
  font-family: 'Bebas Neue';
  font-size: 3em;
  position: relative;
  left: 220px;
  top: -127px;
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
     <li><form action="loginp.php" method="get" id="acclogout"><button type="submit" form="acclogout" name="<?php echo  $Log_word ?>" class="btn btn-default btn-md"><span class="glyphicon glyphicon-user"  aria-hidden="true"></span><?php echo $Log_vis ?></button></li>
    </ul>
  
</nav>




<?php

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $Amodel=$row["model"];
        $Aprice=$row["price"];
        $Acond=$row["cond"];
        $Aimgpath=$row["imgpath"];
        $Abrand=$row["brand"];
 ?>
<script type="text/javascript">
  function showform()
    {

      var simple = '<?php echo $Amodel; ?>';

      var y="<div href='#' class='list-group-item list-group-item-action flex-column'>"+
    "<div class='d-flex w-100 justify-content-between'>"+
      "<img class='footimgedddd' src='<?php echo $Aimgpath; ?>' alt='fif' align='left'>"+
      "<p class='block align-top' id='new'>"+simple+"</p>"+
      "<p class='block' id='son'><?php echo $Abrand; ?></p>"+
      "<p class='block' id='cond'>Condition : <span id='wer'><?php echo $Acond; ?></span></p>"+
      "<p id='price'>Price :</p>"+
      "<p id='pricereal'>Rs.<?php print $Aprice; ?></p>"+
      "<form id='passv' method='post' action='afterbuyAcc.php'></form>"+
      "<button type='submit' id='itsb' form='passv' class = 'btn btn-warning btn-lg' name='getName' onclick='checklog()' value='<?php echo $Amodel; ?>' >Buy Now</button>"+
      "<br><br>"+
      "</div>"+
  "</div>";
          
      document.getElementById('j').innerHTML+=y;

    
    
    }
</script>    




<div class="custom-container container">

  <div class="list-group" id="j">
  
  
  
  
</div>

</div>


<?php

       echo "<script>showform();</script>";
        

    }
}
    else
    {

    }

    $conn->close();

?>






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
 
 
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 
<!-- Use downloaded version of Bootstrap -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
