<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty($_POST['name']) ){
        include('booksreqform.php');

        exit();
    }

    else if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        include('booksreqform.php');
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
        $imgpath=$_POST['imgpath'];
        $cond=$_POST['cond'];
        $type=$_POST['type'];
        $price=$_POST['price'];
        $author=$_POST['author'];
		

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

        $sql = "INSERT INTO books (name,uid,author,price,email,phone,cond,type,form,imgpath)
        VALUES ('$name','$id','$author',$price,'$email',$mob,'$cond','$type','$form','$imgpath')";

        if ($conn->query($sql) === TRUE) {
            $_SESSION['uniqueBook']=$name;
            header('Location: afterADBOOK.php');
        } else {
            echo "Error: Record already exists" . $sql . "<br>" . $conn->error;
        }

        $conn->close();

	}
}
?>