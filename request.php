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
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width = device-width, initial-scale = 1">
	<title>Requests</title>

<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script>
    $(document).ready(function() {

          var trigger = $('#bs-sidebar-navbar-collapse-1 ul li a');
   
          container = $('#jumbonav');

          trigger.on('click',function(){

            var $this = $(this);
            target = $this.data('target');
            container.load(target);
          


    return false;
});

});
  </script>
	
<style type="text/css">



body {
  font-size: 62.5%;
  font-family: arial, sans-serif;
}

#rather
{
  font-size: 3em;
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
}

.footimge{
width: 10rem;
}


	/* remove outer padding */
	.main .row{
		padding: 0px;
		margin: 0px;
	}

	/*Remove rounded coners*/




	nav.sidebar.navbar {
		margin-top: 35px;
		border-radius: 0px;
	}

	nav.sidebar, .main{
		-webkit-transition: margin 200ms ease-out;
	    -moz-transition: margin 200ms ease-out;
	    -o-transition: margin 200ms ease-out;
	    transition: margin 200ms ease-out;

	}

	/* Add gap to nav and right windows.*/
	.main{
		padding: 10px 10px 0 10px;
	}

	/* .....NavBar: Icon only with coloring/layout.....*/

	/*small/medium side display*/
	@media (min-width: 768px) {

		/*Allow main to be next to Nav*/
		.main{
			position: absolute;
			width: calc(100% - 40px); /*keeps 100% minus nav size*/
			margin-left: 40px;
			float: right;
		}

		/*lets nav bar to be showed on mouseover*/
		nav.sidebar:hover + .main{
			margin-left: 200px;
		}

		/*Center Brand*/
		nav.sidebar.navbar.sidebar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand {
			margin-left: 0px;
		}
		/*Center Brand*/
		nav.sidebar .navbar-brand, nav.sidebar .navbar-header{
			text-align: center;
			width: 100%;
			margin-left: 0px;
		}

		/*Center Icons*/
		nav.sidebar a{
			padding-right: 13px;
		}

		/*adds border top to first nav box */
		nav.sidebar .navbar-nav > li:first-child{
			border-top: 1px #e5e5e5 solid;
		}

		/*adds border to bottom nav boxes*/
		nav.sidebar .navbar-nav > li{
			border-bottom: 1px #e5e5e5 solid;
		}

		/* Colors/style dropdown box*/
		nav.sidebar .navbar-nav .open .dropdown-menu {
			position: static;
			float: none;
			width: auto;
			margin-top: 0;
			background-color: transparent;
			border: 0;
			-webkit-box-shadow: none;
			box-shadow: none;
		}

		/*allows nav box to use 100% width*/
		nav.sidebar .navbar-collapse, nav.sidebar .container-fluid{
			padding: 0 0px 0 0px;
		}

		/*colors dropdown box text */
		.navbar-inverse .navbar-nav .open .dropdown-menu>li>a {
			color: #777;
		}

		/*gives sidebar width/height*/
		nav.sidebar{
			width: 300px;
			height: 200%;
			margin-left: -160px;
			float: left;
			z-index: 8000;
			margin-bottom: 50px;
		}

		/*give sidebar 100% width;*/
		nav.sidebar li {
			width: 100%;
		}

		/* Move nav to full on mouse over*/
		nav.sidebar:hover{
			margin-left: 0px;
		}
		/*for hiden things when navbar hidden*/
		.forAnimate{
			opacity: 0;
		}
	}

	/* .....NavBar: Fully showing nav bar..... */

	@media (min-width: 1330px) {

		/*Allow main to be next to Nav*/
		.main{
			width: calc(100% - 200px); /*keeps 100% minus nav size*/
			margin-left: 200px;
		}

		/*Show all nav*/
		nav.sidebar{
			margin-left: 0px;
			float: left;
		}
		/*Show hidden items on nav*/
		nav.sidebar .forAnimate{
			opacity: 1;
		}
	}

	nav.sidebar .navbar-nav .open .dropdown-menu>li>a:hover, nav.sidebar .navbar-nav .open .dropdown-menu>li>a:focus {
		color: #CCC;
		background-color: transparent;
	}

	nav:hover .forAnimate{
		opacity: 1;
	}
	section{
		padding-left: 15px;
	}

	footer
	{
		margin-top: 350px;
	}
	#examplet
	{
		font-size: 18px;
	}
	.container
	{
		margin-top: 50px;
		position: relative;
		left:140px;
	}
	#jumbonav
	{
		font-size: 15px;
		

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



 <nav class="navbar navbar sidebar" role="navigation">
    <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Select Item</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="active" id="examplet"><a href="#" data-target="newmobileform.php">Accessories<span style="font-size:25px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-headphones"></span></a></li>
				<li id="examplet"><a href="#" data-target="gamesreqform.php" >Games<span style="font-size:25px;" class="pull-right hidden-xs showopacity fa fa-gamepad"></span></a></li>
				<li id="examplet"><a href="#" data-target="booksreqform.php">Books<span style="font-size:25px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-book"></span></a></li>
				
			</ul>
		</div>
	</div>
</nav>

<div class="container">
    <div class="jumbotron" id="jumbonav">

      <h2>Select item to post Ad/Request from left Menu</h2>

    </div>
   

 </div>





<br><br><br><br>


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