<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty($_POST['name']) || !preg_match("/^[a-zA-Z ]*$/",$_POST['name'])){
        include('exmp.php');

        exit();
    }

    else if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        include('exmp.php');
        exit();

    } 

    else if(empty($_POST["enroll"])) {
        include('exmp.php');
        exit();

    } 

    else if(empty($_POST["mob"]))  {
        include('exmp.php');
        exit();

    } 

    else if(empty($_POST["user"])) {
        include('exmp.php');
        exit();

    } 
    else if(empty($_POST["pass"])) {
        include('exmp.php');
        exit();

    } 
    else if(empty($_POST["cpass"])) {
        include('exmp.php');
        exit();

    } 

    else if($_POST["cpass"]!=$_POST["pass"]) {
        include('exmp.php');
        exit();

    }
 
    else {
		session_start();

		$id = $_POST['user'];
        $name=$_POST['name'];
        $pass=$_POST['pass'];
        $email=$_POST['email'];
        $mob=$_POST['mob'];
        $batch=$_POST['batch'];
        $enroll=$_POST['enroll'];
        $sector=$_POST['branch'];

		echo "Your user id is: ".$id.".";

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

        $sql = "INSERT INTO signup (name,userid,pass,email,phone,batch,enroll,sector)
        VALUES ('$name','$id','$pass','$email',$mob,'$batch',$enroll,$sector)";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: Record already exists" . $sql . "<br>" . $conn->error;
        }

        $conn->close();

	}
}
?>