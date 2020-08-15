<?php
	session_start();
	echo 'Welcome'.'  '.$_SESSION['userid'];
	echo '<br><a href="loginp.php?action=logout">LOGOUT</a>';


?>