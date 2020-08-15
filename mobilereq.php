<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty($_POST['brand']) ){
        include('newmobileform.php');

        exit();
    }

    /*else if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        include('booksreqform.php');
        exit();

    } 

    else if(empty($_POST["form"])) {
        include('gamesreqform.php');
        exit();

    } 

    else if(empty($_POST["mob"]))  {
        include('gamesreqform.php');
        exit();

    } 

    else if(empty($_POST["price"])) {
        include('gamesreqform.php');
        exit();

    } 
    else if(empty($_POST["type"])) {
        include('gamesreqform.php');
        exit();

    } 
    else if(empty($_POST["cond"])) {
        include('gamesreqform.php');
        exit();

    } */

 
    else {
		

        $id=$_SESSION['userid'];
        $brand=$_POST['brand'];
        $model=$_POST['model'];
        $email=$_POST['email'];
        $mob=$_POST['mob'];
        $imgpath=$_POST['imgpath'];
        $cond=$_POST['cond'];
        $type=$_POST['type'];
        $price=$_POST['price'];
        $email=$_POST['email'];
        $imgpath=$_POST['imgpath'];
        $yop=$_POST['yop'];
		

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "eztrade";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        $sql = "INSERT INTO accessories (uid,price,type,cond,brand,model,phone,email,imgpath,yop)
        VALUES ('$id',$price,'$type','$cond','$brand','$model',$mob,'$email','$imgpath',$yop)";

        if ($conn->query($sql) === TRUE) {
            $_SESSION['uniqueAcce']=$model;
            header('Location: afterADAccc.php');
        } else {
            echo "Error: Record already exists" . $sql . "<br>" . $conn->error;
        }

        $conn->close();

	}
}
?>