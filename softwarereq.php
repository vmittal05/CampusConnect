<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty($_POST['name']) ){
        include('softwarereqform.php');

        exit();
    }

    else if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        include('softwarereqform.php');
        exit();

    } 

    /*else if(empty($_POST["form"])) {
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
        $name=$_POST['name'];
        $form=$_POST['form'];
        $email=$_POST['email'];
        $mob=$_POST['mob'];
        $type=$_POST['type'];
        $price=$_POST['price'];
        $imgpath=$_POST['imgpath'];
        
		

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

        $sql = "INSERT INTO software (name,uid,form,price,email,type,phone,imgpath)
        VALUES ('$name','$id','$form',$price,'$email','$type',$mob,'$imgpath')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            echo "<a href='home.php'>Go to home page</a>";
        } else {
            echo "Error: Record already exists" . $sql . "<br>" . $conn->error;
        }

        $conn->close();

	}
}
?>